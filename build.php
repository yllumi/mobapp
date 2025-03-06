<?php

// Pindah direktori kerja ke folder /src/
chdir(__DIR__ . "/src");

// Konfigurasi direktori sumber dan output
$sourceDir = __DIR__ . "/src";  
$outputDir = __DIR__ . "/dist";  
$assetsSource = $sourceDir . "/assets"; 
$assetsDestination = $outputDir . "/assets"; 
$pagesFile = __DIR__ . "/pages.txt"; // File daftar halaman
$cssFile = "$assetsSource/style.css"; // File CSS yang akan di-minify
$cssOutput = "$assetsDestination/style.css"; // Hasil minify

// Membaca daftar halaman dari pages.txt
$pages = file_exists($pagesFile) ? file($pagesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

if (empty($pages)) {
    die("❌ Tidak ada halaman yang ditemukan di pages.txt\n");
}

// Fungsi untuk mengubah semua tautan dari .php ke .html
function convertLinks($content)
{
    return preg_replace('/href=["\']([^"\']+)\.php(["\'])/', 'href="$1.html$2"', $content);
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
                // Jika file adalah style.css, minify terlebih dahulu
                if ($fileinfo->getFilename() === "style.css") {
                    minifyCSS($srcFile, $dstFile);
                } else {
                    copy($srcFile, $dstFile);
                }
                echo "📂 Menyalin: $srcFile -> $dstFile\n";
            }
        }
    }
}

// Fungsi untuk meminify CSS
function minifyCSS($srcFile, $dstFile)
{
    $css = file_get_contents($srcFile);
    
    // Hapus komentar, spasi berlebih, dan baris baru
    $css = preg_replace('!/\*.*?\*/!s', '', $css); // Hapus komentar
    $css = preg_replace('/\s*([{};:,])\s*/', '$1', $css); // Hapus spasi berlebih
    $css = preg_replace('/\s+/', ' ', $css); // Hapus spasi ekstra
    $css = trim($css);

    file_put_contents($dstFile, $css);
    echo "🎨 Minify CSS: $srcFile -> $dstFile\n";
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

// Menyalin dan meminify folder /assets/
copyFolder($assetsSource, $assetsDestination);

echo "🎉 Build selesai! Semua file telah diekspor ke /dist/\n";