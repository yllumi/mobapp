<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Action Sheet</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- =============================================
             STYLE 1: Default Bootstrap Offcanvas (Bottom)
             ============================================= -->
        <div class="section-title">Default Bootstrap Offcanvas</div>
        <p class="text-muted small mb-3">Gaya bawaan Bootstrap offcanvas dari bawah layar.</p>

        <div class="button-group">
            <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#actionsheetDefault">
                <i class="bi bi-list me-1"></i> Buka Action Sheet Default
            </button>
            <button class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#actionsheetShare">
                <i class="bi bi-share me-1"></i> Share Sheet
            </button>
        </div>

        <!-- =============================================
             STYLE 2: iOS-style Floating Action Sheet
             ============================================= -->
        <div class="section-title mt-4">iOS-style Floating Action Sheet</div>
        <p class="text-muted small mb-3">Melayang dengan margin dan sudut membulat seperti menu action sheet di aplikasi iOS.</p>

        <div class="button-group">
            <button class="btn btn-dark" onclick="openIosActionSheet('iosActionsheetFile')">
                <i class="bi bi-folder me-1"></i> File Actions
            </button>
            <button class="btn btn-outline-dark" onclick="openIosActionSheet('iosActionsheetProfile')">
                <i class="bi bi-person me-1"></i> Profile Actions
            </button>
        </div>

    </div>

    <!-- =============================================
         OFFCANVAS 1: Default Bootstrap
         ============================================= -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="actionsheetDefault">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Pilih Aksi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 px-4 py-3" onclick="alert('Edit')">
                    <i class="bi bi-pencil text-primary fs-5"></i>
                    <span>Edit</span>
                </li>
                <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 px-4 py-3" onclick="alert('Duplicate')">
                    <i class="bi bi-copy text-success fs-5"></i>
                    <span>Duplikat</span>
                </li>
                <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 px-4 py-3" onclick="alert('Move')">
                    <i class="bi bi-folder-symlink text-warning fs-5"></i>
                    <span>Pindahkan</span>
                </li>
                <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 px-4 py-3" onclick="alert('Delete')" style="color: var(--bs-danger)">
                    <i class="bi bi-trash fs-5"></i>
                    <span>Hapus</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- OFFCANVAS: Share Sheet (Default Style) -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="actionsheetShare">
        <div class="offcanvas-header border-bottom">
            <h6 class="offcanvas-title text-muted">Bagikan ke</h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex gap-4 justify-content-around py-2 mb-3">
                <div class="text-center" onclick="alert('WhatsApp')">
                    <div class="rounded-circle bg-success d-flex align-items-center justify-content-center mx-auto mb-1" style="width:52px;height:52px;">
                        <i class="bi bi-whatsapp text-white fs-4"></i>
                    </div>
                    <small>WhatsApp</small>
                </div>
                <div class="text-center" onclick="alert('Telegram')">
                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center mx-auto mb-1" style="width:52px;height:52px;">
                        <i class="bi bi-telegram text-white fs-4"></i>
                    </div>
                    <small>Telegram</small>
                </div>
                <div class="text-center" onclick="alert('Email')">
                    <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center mx-auto mb-1" style="width:52px;height:52px;">
                        <i class="bi bi-envelope-fill text-white fs-4"></i>
                    </div>
                    <small>Email</small>
                </div>
                <div class="text-center" onclick="alert('Copy Link')">
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center mx-auto mb-1" style="width:52px;height:52px;">
                        <i class="bi bi-link-45deg text-white fs-4"></i>
                    </div>
                    <small>Salin Link</small>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         iOS-STYLE FLOATING ACTION SHEET OVERLAY
         ============================================= -->
    <div class="ios-actionsheet-backdrop" id="iosBackdrop" onclick="closeIosActionSheet()"></div>

    <!-- iOS Action Sheet: File Actions -->
    <div class="ios-actionsheet" id="iosActionsheetFile">
        <div class="ios-actionsheet-group">
            <div class="ios-actionsheet-title">Aksi File</div>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Buka')">
                <span>Buka</span>
                <i class="bi bi-folder2-open"></i>
            </button>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Rename')">
                <span>Ubah Nama</span>
                <i class="bi bi-input-cursor-text"></i>
            </button>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Share')">
                <span>Bagikan</span>
                <i class="bi bi-share"></i>
            </button>
            <button class="ios-actionsheet-btn ios-actionsheet-btn--danger" onclick="closeIosActionSheet(); alert('Delete')">
                <span>Hapus</span>
                <i class="bi bi-trash"></i>
            </button>
        </div>
        <div class="ios-actionsheet-group">
            <button class="ios-actionsheet-btn ios-actionsheet-btn--cancel" onclick="closeIosActionSheet()">
                <strong>Batal</strong>
            </button>
        </div>
    </div>

    <!-- iOS Action Sheet: Profile Actions -->
    <div class="ios-actionsheet" id="iosActionsheetProfile">
        <div class="ios-actionsheet-group">
            <div class="ios-actionsheet-title">Profil Pengguna</div>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Lihat Profil')">
                <span>Lihat Profil</span>
                <i class="bi bi-person-circle"></i>
            </button>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Kirim Pesan')">
                <span>Kirim Pesan</span>
                <i class="bi bi-chat"></i>
            </button>
            <button class="ios-actionsheet-btn" onclick="closeIosActionSheet(); alert('Blokir')">
                <span>Blokir Pengguna</span>
                <i class="bi bi-slash-circle"></i>
            </button>
            <button class="ios-actionsheet-btn ios-actionsheet-btn--danger" onclick="closeIosActionSheet(); alert('Laporkan')">
                <span>Laporkan</span>
                <i class="bi bi-flag"></i>
            </button>
        </div>
        <div class="ios-actionsheet-group">
            <button class="ios-actionsheet-btn ios-actionsheet-btn--cancel" onclick="closeIosActionSheet()">
                <strong>Batal</strong>
            </button>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
let activeIosSheet = null;

function openIosActionSheet(id) {
    closeIosActionSheet();
    const sheet = document.getElementById(id);
    const backdrop = document.getElementById('iosBackdrop');
    if (!sheet) return;
    activeIosSheet = sheet;
    backdrop.classList.add('active');
    sheet.style.display = 'block';
    // Force reflow before adding active class for transition
    sheet.getBoundingClientRect();
    sheet.classList.add('active');
}

function closeIosActionSheet() {
    const backdrop = document.getElementById('iosBackdrop');
    backdrop.classList.remove('active');
    if (activeIosSheet) {
        activeIosSheet.classList.remove('active');
        const sheet = activeIosSheet;
        activeIosSheet = null;
        setTimeout(() => { sheet.style.display = 'none'; }, 300);
    }
}
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>