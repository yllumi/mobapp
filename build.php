<?php

// Pindah direktori kerja ke folder /src/
chdir(__DIR__ . "/src");

// Konfigurasi direktori sumber dan output
$sourceDir = __DIR__ . "/src";  
$outputDir = isset($argv[1]) ? __DIR__ . "/" . trim($argv[1], "/") : __DIR__ . "/docs"; 

$assetsSource = $sourceDir . "/assets"; 
$assetsDestination = $outputDir . "/assets"; 
$pagesFile = __DIR__ . "/pages.txt"; // File daftar halaman

// Membaca daftar halaman dari pages.txt
$pages = file_exists($pagesFile) ? file($pagesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

if (empty($pages)) {
    die("❌ Tidak ada halaman yang ditemukan di pages.txt\n");
}

// Fungsi untuk mengubah semua tautan dari .php ke .html
function convertLinks($content)
{
    return preg_replace('/href=["\']([^"\']+)\.php(["\'])/', 'href="$1.html$2', $content);
}

// Fungsi untuk membangun file HTML statis
function buildPage($sourceFile, $outputPath)
{
    ob_start();
    include $sourceFile; // Render file PHP
    $content = ob_get_clean();

    // Ubah tautan .php ke .html
    $content = convertLinks($content);

    // Membuat folder jika belum ada
    $dir = dirname($outputPath);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    // Simpan output ke file HTML
    file_put_contents($outputPath, $content);
    echo "✅ Berhasil membangun: $outputPath\n";
}

// Fungsi untuk minify CSS
function minifyCSS($content)
{
    // Hapus komentar /* ... */
    $content = preg_replace('/\/\*[\s\S]*?\*\//', '', $content);
    // Hapus whitespace berlebih, newline, tab
    $content = preg_replace('/\s+/', ' ', $content);
    // Hapus spasi di sekitar karakter khusus
    $content = preg_replace('/\s*([{}:;,>~+])\s*/', '$1', $content);
    // Hapus titik koma sebelum tanda tutup kurung
    $content = str_replace(';}', '}', $content);
    return trim($content);
}

// Fungsi untuk minify JavaScript
function minifyJS($content)
{
    // Hapus komentar satu baris // ... (hindari URL https://)
    $content = preg_replace('/(?<!:)(?<!\/)\/\/[^\n]*$/m', '', $content);
    // Hapus komentar blok /* ... */
    $content = preg_replace('/\/\*[\s\S]*?\*\//', '', $content);
    // Ganti multiple whitespace/newline dengan satu spasi
    $content = preg_replace('/[ \t]+/', ' ', $content);
    $content = preg_replace('/\s*\n\s*/', "\n", $content);
    // Hapus spasi di sekitar operator (BUKAN kurung kurawal, hindari template literals)
    $content = preg_replace('/\s*([=+\-*\/&|!<>?,;:])\s*/', '$1', $content);
    // Hapus spasi berlebih di sekitar tanda kurung biasa dan siku (aman)
    $content = preg_replace('/\s*([\[\]])\s*/', '$1', $content);
    // Hapus baris kosong
    $content = preg_replace('/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/', "\n", $content);
    return trim($content);
}

// Fungsi untuk menyalin folder assets secara rekursif
function copyFolder($src, $dst)
{
    if (!is_dir($src)) {
        echo "⚠️ Folder assets tidak ditemukan, dilewati.\n";
        return;
    }

    if (!is_dir($dst)) {
        mkdir($dst, 0777, true);
    }

    $dir = new DirectoryIterator($src);
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            $srcFile = $fileinfo->getPathname();
            $dstFile = $dst . "/" . $fileinfo->getFilename();

            if ($fileinfo->isDir()) {
                copyFolder($srcFile, $dstFile);
            } else {
                $ext = strtolower(pathinfo($srcFile, PATHINFO_EXTENSION));
                if ($ext === 'css') {
                    $minified = minifyCSS(file_get_contents($srcFile));
                    file_put_contents($dstFile, $minified);
                    $saved = strlen(file_get_contents($srcFile)) - strlen($minified);
                    echo "🗜️  Minify CSS: $srcFile (hemat {$saved} bytes)\n";
                } elseif ($ext === 'js') {
                    $minified = minifyJS(file_get_contents($srcFile));
                    file_put_contents($dstFile, $minified);
                    $saved = strlen(file_get_contents($srcFile)) - strlen($minified);
                    echo "🗜️  Minify JS : $srcFile (hemat {$saved} bytes)\n";
                } else {
                    copy($srcFile, $dstFile);
                    echo "📂 Menyalin: $srcFile -> $dstFile\n";
                }
            }
        }
    }
}

// Loop semua halaman untuk diekspor
foreach ($pages as $page) {
    $sourceFile = $sourceDir . "/" . $page;
    $outputFile = str_replace(".php", ".html", $page);
    $outputPath = $outputDir . "/" . $outputFile;

    if (file_exists($sourceFile)) {
        buildPage($sourceFile, $outputPath);
    } else {
        echo "❌ File tidak ditemukan: $sourceFile\n";
    }
}

// Menyalin folder /assets/
copyFolder($assetsSource, $assetsDestination);

echo "🎉 Build selesai! Semua file telah diekspor ke $outputDir\n";
?>
