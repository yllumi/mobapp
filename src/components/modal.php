<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Modal</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- =============================================
             1. Basic Modal (Konten Teknis)
             ============================================= -->
        <div class="section-title">Basic Modal</div>
        <p class="text-muted small mb-3">Menampilkan konten teks panjang seperti syarat &amp; ketentuan.</p>
        <div class="button-group">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBasic">
                <i class="bi bi-file-text me-1"></i> Lihat Syarat &amp; Ketentuan
            </button>
        </div>

        <!-- =============================================
             2. Form Modal (Input Data)
             ============================================= -->
        <div class="section-title mt-4">Form Modal</div>
        <p class="text-muted small mb-3">Modal berisi formulir login dengan fitur clear input.</p>
        <div class="button-group">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalForm">
                <i class="bi bi-box-arrow-in-right me-1"></i> Buka Form Login
            </button>
        </div>

        <!-- =============================================
             3. Listview Modal (Daftar Gambar)
             ============================================= -->
        <div class="section-title mt-4">Listview Modal</div>
        <p class="text-muted small mb-3">Modal daftar kontak bergulir dengan avatar dan teks.</p>
        <div class="button-group">
            <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalListview">
                <i class="bi bi-people me-1"></i> Pilih Kontak
            </button>
        </div>

        <!-- =============================================
             4. Checkbox Modal (Pilihan Jamak)
             ============================================= -->
        <div class="section-title mt-4">Checkbox Modal</div>
        <p class="text-muted small mb-3">Modal pemilihan beberapa pilihan sekaligus menggunakan checkbox.</p>
        <div class="button-group">
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalCheckbox">
                <i class="bi bi-check2-square me-1"></i> Pilih Kategori
            </button>
        </div>

        <!-- =============================================
             5. Android Alert Dialog
             ============================================= -->
        <div class="section-title mt-4">Android — Alert Dialog</div>
        <p class="text-muted small mb-3">Gaya Material Design: sudut membulat kecil, tombol aksi berupa teks rata kanan.</p>
        <div class="button-group">
            <button class="btn btn-outline-primary" onclick="openAndroidAlert('androidAlertConfirm')">
                <i class="bi bi-question-circle me-1"></i> Konfirmasi Hapus
            </button>
            <button class="btn btn-outline-danger" onclick="openAndroidAlert('androidAlertWifi')">
                <i class="bi bi-wifi-off me-1"></i> Alert Wi-Fi
            </button>
        </div>

        <!-- =============================================
             6. Android Bottom Sheet
             ============================================= -->
        <div class="section-title mt-4">Android — Bottom Sheet</div>
        <p class="text-muted small mb-3">Sheet meluncur dari bawah dengan drag handle, sudut atas membulat, gaya Material Design.</p>
        <div class="button-group">
            <button class="btn btn-outline-success" onclick="openAndroidSheet('androidSheetOptions')">
                <i class="bi bi-three-dots-vertical me-1"></i> Opsi Lainnya
            </button>
        </div>

        <!-- =============================================
             7. iOS Alert
             ============================================= -->
        <div class="section-title mt-4">iOS — Alert</div>
        <p class="text-muted small mb-3">Gaya native UIAlertController: kotak terpusat 270px, tombol dibatasi garis tipis, efek frosted glass.</p>
        <div class="button-group">
            <button class="btn btn-outline-dark" onclick="openIosAlert('iosAlertDelete')">
                <i class="bi bi-trash me-1"></i> Konfirmasi Hapus
            </button>
            <button class="btn btn-outline-secondary" onclick="openIosAlert('iosAlertUpdate')">
                <i class="bi bi-arrow-repeat me-1"></i> Update Tersedia
            </button>
        </div>

        <!-- =============================================
             8. iOS Card Sheet
             ============================================= -->
        <div class="section-title mt-4">iOS — Card Sheet</div>
        <p class="text-muted small mb-3">Half-sheet card meluncur dari bawah dengan drag indicator dan sudut atas membulat besar.</p>
        <div class="button-group">
            <button class="btn btn-dark" onclick="openIosSheet('iosSheetFilter')">
                <i class="bi bi-sliders me-1"></i> Filter &amp; Urutkan
            </button>
        </div>

        <!-- Selected categories result -->
        <div id="selectedResult" class="mt-3 d-none">
            <div class="alert alert-success py-2 small">
                <strong>Kategori dipilih:</strong> <span id="selectedLabels"></span>
            </div>
        </div>

    </div>

    <!-- =============================================
         MODAL 1: Basic (Konten Teknis)
         ============================================= -->
    <div class="modal fade" id="modalBasic" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Syarat &amp; Ketentuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>1. Penerimaan Persyaratan</h6>
                    <p class="text-muted small">Dengan mengakses dan menggunakan aplikasi ini, Anda menyetujui untuk tunduk pada syarat dan ketentuan penggunaan yang berlaku. Jika Anda tidak menyetujui syarat-syarat ini, harap hentikan penggunaan aplikasi.</p>
                    <h6>2. Penggunaan Layanan</h6>
                    <p class="text-muted small">Layanan ini hanya dapat digunakan untuk tujuan yang sah dan sesuai dengan semua peraturan hukum yang berlaku. Anda bertanggung jawab penuh atas semua aktivitas yang terjadi melalui akun Anda.</p>
                    <h6>3. Privasi Data</h6>
                    <p class="text-muted small">Kami berkomitmen untuk melindungi privasi Anda. Data pribadi yang Anda berikan akan digunakan sesuai dengan kebijakan privasi kami dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan Anda.</p>
                    <h6>4. Pembatasan Tanggung Jawab</h6>
                    <p class="text-muted small">Kami tidak bertanggung jawab atas kerugian langsung, tidak langsung, insidental, atau konsekuensial yang timbul dari penggunaan atau ketidakmampuan menggunakan layanan ini.</p>
                    <h6>5. Perubahan Ketentuan</h6>
                    <p class="text-muted small">Kami berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan berlaku sejak dipublikasikan. Penggunaan layanan setelah perubahan berarti Anda menyetujui ketentuan yang baru.</p>
                    <h6>6. Hukum yang Berlaku</h6>
                    <p class="text-muted small mb-0">Syarat dan ketentuan ini diatur oleh hukum yang berlaku di wilayah hukum Indonesia. Setiap sengketa akan diselesaikan melalui pengadilan yang berwenang di Jakarta.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tolak</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Setuju</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         MODAL 2: Form (Input Data)
         ============================================= -->
    <div class="modal fade" id="modalForm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title">Masuk ke Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-2">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Email</label>
                        <div class="input-with-clear">
                            <input type="email" id="inputEmail" class="form-control" placeholder="nama@email.com" oninput="toggleClear('inputEmail', 'clearEmail')">
                            <button type="button" id="clearEmail" class="input-clear-btn d-none" onclick="clearInput('inputEmail', 'clearEmail')">
                                <i class="bi bi-x-circle-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label small fw-semibold">Kata Sandi</label>
                        <div class="input-with-clear">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan kata sandi" oninput="toggleClear('inputPassword', 'clearPassword')">
                            <button type="button" id="clearPassword" class="input-clear-btn d-none" onclick="clearInput('inputPassword', 'clearPassword')">
                                <i class="bi bi-x-circle-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="text-end mb-3">
                        <a href="#" class="small text-primary text-decoration-none">Lupa kata sandi?</a>
                    </div>
                    <button type="button" class="btn btn-success w-100">Masuk</button>
                    <p class="text-center small text-muted mt-3 mb-0">
                        Belum punya akun? <a href="#" class="text-primary text-decoration-none">Daftar sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         MODAL 3: Listview (Daftar Gambar / Kontak)
         ============================================= -->
    <div class="modal fade" id="modalListview" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="px-3 pt-3 pb-2">
                        <input type="search" class="form-control form-control-sm" placeholder="Cari kontak...">
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        $contacts = [
                            ['Andi Pratama', 'Developer', 'AP', 'primary'],
                            ['Budi Santoso', 'Designer', 'BS', 'success'],
                            ['Citra Dewi', 'Product Manager', 'CD', 'danger'],
                            ['Deni Kurniawan', 'QA Engineer', 'DK', 'warning'],
                            ['Eka Putri', 'Marketing', 'EP', 'info'],
                            ['Fajar Rahman', 'Backend Dev', 'FR', 'dark'],
                            ['Gita Nuraini', 'Frontend Dev', 'GN', 'secondary'],
                            ['Hendra Wijaya', 'DevOps', 'HW', 'primary'],
                            ['Indah Lestari', 'Data Analyst', 'IL', 'success'],
                            ['Joko Susilo', 'Scrum Master', 'JS', 'danger'],
                        ];
                        foreach ($contacts as $c): ?>
                        <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 px-3 py-2" onclick="selectContact('<?= $c[0] ?>')" data-bs-dismiss="modal">
                            <div class="rounded-circle bg-<?= $c[3] ?> text-white d-flex align-items-center justify-content-center flex-shrink-0" style="width:40px;height:40px;font-size:13px;font-weight:600;">
                                <?= $c[2] ?>
                            </div>
                            <div>
                                <div class="fw-semibold small"><?= $c[0] ?></div>
                                <div class="text-muted" style="font-size:12px;"><?= $c[1] ?></div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         MODAL 4: Checkbox (Pilihan Jamak)
         ============================================= -->
    <div class="modal fade" id="modalCheckbox" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted small mb-3">Pilih satu atau lebih kategori yang sesuai.</p>
                    <?php
                    $categories = [
                        ['Teknologi', 'bi-cpu'],
                        ['Bisnis', 'bi-briefcase'],
                        ['Desain', 'bi-palette'],
                        ['Pemasaran', 'bi-megaphone'],
                        ['Keuangan', 'bi-cash-stack'],
                        ['Pendidikan', 'bi-book'],
                        ['Kesehatan', 'bi-heart-pulse'],
                        ['Hiburan', 'bi-play-circle'],
                    ];
                    foreach ($categories as $i => $cat): ?>
                    <div class="form-check d-flex align-items-center gap-2 py-2 border-bottom">
                        <input class="form-check-input mt-0 flex-shrink-0" type="checkbox" id="cat<?= $i ?>" value="<?= $cat[0] ?>">
                        <label class="form-check-label d-flex align-items-center gap-2 w-100" for="cat<?= $i ?>">
                            <i class="bi <?= $cat[1] ?> text-primary"></i>
                            <?= $cat[0] ?>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-warning" onclick="applyCategories()">Terapkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         ANDROID ALERT DIALOGS
         ============================================= -->
    <div class="android-alert-backdrop" id="androidBackdrop" onclick="closeAndroidAlert()"></div>

    <div class="android-alert" id="androidAlertConfirm">
        <div class="android-alert-title">Hapus Item?</div>
        <div class="android-alert-body">Item yang dihapus tidak dapat dikembalikan. Apakah Anda yakin ingin melanjutkan?</div>
        <div class="android-alert-actions">
            <button class="android-alert-btn" onclick="closeAndroidAlert()">Batal</button>
            <button class="android-alert-btn android-alert-btn--accent" onclick="closeAndroidAlert(); alert('Item dihapus')">Hapus</button>
        </div>
    </div>

    <div class="android-alert" id="androidAlertWifi">
        <div class="android-alert-title">Koneksi Terputus</div>
        <div class="android-alert-body">Tidak dapat terhubung ke jaringan Wi-Fi. Periksa pengaturan jaringan Anda dan coba lagi.</div>
        <div class="android-alert-actions">
            <button class="android-alert-btn" onclick="closeAndroidAlert()">Nanti</button>
            <button class="android-alert-btn android-alert-btn--accent" onclick="closeAndroidAlert()">Pengaturan</button>
        </div>
    </div>

    <!-- =============================================
         ANDROID BOTTOM SHEET
         ============================================= -->
    <div class="android-sheet-backdrop" id="androidSheetBackdrop" onclick="closeAndroidSheet()"></div>

    <div class="android-sheet" id="androidSheetOptions">
        <div class="android-sheet-handle"></div>
        <div class="android-sheet-title">Opsi Lainnya</div>
        <ul class="android-sheet-list">
            <li class="android-sheet-item" onclick="closeAndroidSheet(); alert('Unduh')">
                <i class="bi bi-download"></i>
                <span>Unduh</span>
            </li>
            <li class="android-sheet-item" onclick="closeAndroidSheet(); alert('Salin Tautan')">
                <i class="bi bi-link-45deg"></i>
                <span>Salin Tautan</span>
            </li>
            <li class="android-sheet-item" onclick="closeAndroidSheet(); alert('Cetak')">
                <i class="bi bi-printer"></i>
                <span>Cetak</span>
            </li>
            <li class="android-sheet-item" onclick="closeAndroidSheet(); alert('Laporkan')">
                <i class="bi bi-flag"></i>
                <span>Laporkan</span>
            </li>
        </ul>
    </div>

    <!-- =============================================
         iOS ALERTS
         ============================================= -->
    <div class="ios-alert-backdrop" id="iosAlertBackdrop"></div>

    <div class="ios-alert" id="iosAlertDelete">
        <div class="ios-alert-content">
            <div class="ios-alert-title">Hapus Item</div>
            <div class="ios-alert-message">Item ini akan dihapus secara permanen dan tidak dapat dipulihkan.</div>
        </div>
        <div class="ios-alert-actions">
            <button class="ios-alert-btn" onclick="closeIosAlert()">Batal</button>
            <button class="ios-alert-btn ios-alert-btn--destructive" onclick="closeIosAlert(); alert('Dihapus')">Hapus</button>
        </div>
    </div>

    <div class="ios-alert" id="iosAlertUpdate">
        <div class="ios-alert-content">
            <div class="ios-alert-title">Update Tersedia</div>
            <div class="ios-alert-message">Versi 2.4.1 tersedia. Segera perbarui untuk mendapatkan fitur terbaru dan perbaikan keamanan.</div>
        </div>
        <div class="ios-alert-actions ios-alert-actions--stack">
            <button class="ios-alert-btn ios-alert-btn--primary" onclick="closeIosAlert(); alert('Mengunduh...')">Perbarui Sekarang</button>
            <button class="ios-alert-btn" onclick="closeIosAlert()">Nanti</button>
        </div>
    </div>

    <!-- =============================================
         iOS CARD SHEET
         ============================================= -->
    <div class="ios-sheet-backdrop" id="iosSheetBackdrop" onclick="closeIosSheet()"></div>

    <div class="ios-sheet" id="iosSheetFilter">
        <div class="ios-sheet-handle"></div>
        <div class="ios-sheet-header">
            <span class="ios-sheet-title">Filter &amp; Urutkan</span>
            <button class="ios-sheet-close" onclick="closeIosSheet()">Selesai</button>
        </div>
        <div class="ios-sheet-body">
            <div class="ios-sheet-section-label">URUTKAN BERDASARKAN</div>
            <div class="ios-sheet-radio-group">
                <?php foreach (['Terbaru', 'Terpopuler', 'Harga Terendah', 'Harga Tertinggi'] as $i => $opt): ?>
                <label class="ios-sheet-radio-item">
                    <span><?= $opt ?></span>
                    <input type="radio" name="sortOption" value="<?= $opt ?>" <?= $i === 0 ? 'checked' : '' ?>>
                </label>
                <?php endforeach; ?>
            </div>
            <div class="ios-sheet-section-label mt-3">KATEGORI</div>
            <div class="ios-sheet-radio-group">
                <?php foreach (['Semua', 'Elektronik', 'Fashion', 'Makanan'] as $j => $cat): ?>
                <label class="ios-sheet-radio-item">
                    <span><?= $cat ?></span>
                    <input type="checkbox" name="catOption" value="<?= $cat ?>" <?= $j === 0 ? 'checked' : '' ?>>
                </label>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="ios-sheet-footer">
            <button class="btn btn-outline-secondary btn-sm" onclick="closeIosSheet()">Reset</button>
            <button class="btn btn-primary btn-sm flex-grow-1" onclick="closeIosSheet(); alert('Filter diterapkan')">Terapkan Filter</button>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
/* ---- Demo-specific functions ---- */

function selectContact(name) {
    alert('Kontak dipilih: ' + name);
}

function applyCategories() {
    const checked = [...document.querySelectorAll('#modalCheckbox .form-check-input:checked')];
    const result  = document.getElementById('selectedResult');
    const labels  = document.getElementById('selectedLabels');
    const modal   = bootstrap.Modal.getInstance(document.getElementById('modalCheckbox'));
    modal.hide();
    if (checked.length === 0) {
        result.classList.add('d-none');
        return;
    }
    labels.textContent = checked.map(c => c.value).join(', ');
    result.classList.remove('d-none');
}
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>