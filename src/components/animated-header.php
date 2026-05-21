<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header anim-header-effect">
        <div class="left">
            <a href="javascript:void(0)" onclick="history.back()" class="anim-nav-btn">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Page Title</div>
        <div class="right">
            <a href="javascript:void(0)" class="anim-nav-btn toggle-search">
                <i class="bi bi-search"></i>
            </a>
        </div>
    </div>

    <!-- Search Component Dropdown Panel -->
    <div id="searchPanel" class="anim-search-dropdown">
        <div class="anim-search-box">
            <i class="bi bi-search search-icon-left"></i>
            <input type="text" class="form-control shadow-none" placeholder="Search...">
            <a href="javascript:void(0)" class="close-icon-right toggle-search">
                <i class="bi bi-x-circle-fill"></i>
            </a>
        </div>
    </div>

    <!-- App Container -->
    <div class="app-container px-2">

        <!-- Banner Judul Besar -->
        <div class="anim-hero-banner" id="heroTrigger">
            <h1 class="hero-title">Page Title</h1>
            <h2 class="hero-subtitle">Scroll down to see the header background & title fade-in</h2>
        </div>

        <!-- Dummy Content panjang untuk memicu Scroll halaman -->
        <div class="mt-4 mb-5 pb-5">
            <h6 class="fw-bold text-muted mb-3">Content Section</h6>
            <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="card border-0 shadow-sm rounded-3 mb-3">
                <div class="card-body text-secondary small">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet leo eget maximus ultricies.
                    Nunc vitae enim facilisis tortor aliquet ullamcorper nec at tortor. Vivamus lobortis, orci et
                    commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus dolor sed ipsum.
                </div>
            </div>
            <?php endfor; ?>
        </div>

    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. Logika Animasi Latar Belakang & Judul Teks
        const appHeader = document.querySelector(".anim-header-effect");
        const heroTrigger = document.getElementById("heroTrigger");

        window.addEventListener("scroll", function() {
            // Mendapatkan posisi koordinat bagian bawah dari banner besar
            const triggerPoint = heroTrigger.getBoundingClientRect().bottom;

            // Jika bagian bawah banner sudah melewati batas atas layar header asli (56px)
            if (triggerPoint < 56) {
                appHeader.classList.add("anim-header-show");
            } else {
                appHeader.classList.remove("anim-header-show");
            }
        });

        // 2. Logika Buka / Tutup Search Panel
        const searchToggles = document.querySelectorAll(".toggle-search");
        const searchPanel = document.getElementById("searchPanel");
        const searchInput = searchPanel.querySelector("input");

        searchToggles.forEach(function(btn) {
            btn.addEventListener("click", function() {
                searchPanel.classList.toggle("is-active");

                if (searchPanel.classList.contains("is-active")) {
                    setTimeout(() => {
                        searchInput.focus();
                    }, 250);
                }
            });
        });
    });
    </script>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>