<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Go to Top</div>
        <div class="right">
        </div>
    </div>

    <a href="javascript:void(0)" class="gtt-button-fixed gtt-trigger-action">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <div class="app-container px-3 pt-3">

        <div class="mb-4">
            <div class="gtt-section-title px-2">Usage</div>
            <div class="gtt-wide-block">
                <p class="text-secondary small mb-2">
                    Add <code>.gtt-trigger-action</code> class on any element (link, button, images or div) to activate
                    scroll-to-top feature.
                </p>
                <p class="text-secondary small mb-3">
                    Also, a floating back-to-top button will automatically slide up from the bottom right corner when
                    you scroll down this page.
                </p>

                <a href="javascript:void(0)" class="gtt-btn-inline gtt-trigger-action">
                    <i class="bi bi-arrow-up"></i>
                </a>
            </div>
        </div>

        <div class="mb-4">
            <div class="gtt-section-title">Scroll Down for Fixed Button</div>
            <div class="gtt-wide-block text-secondary small" style="line-height: 1.6;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur sem eros, id sodales ipsum
                    ultricies a. Vivamus id scelerisque justo. In at tellus a nibh gravida porttitor. Ut at enim nec
                    massa rutrum laoreet. Nulla euismod rhoncus mauris vitae euismod. Nullam bibendum id urna et
                    placerat.</p>

                <p>Proin sem neque, facilisis at blandit ut, cursus maximus felis. Nunc a nunc vestibulum, rhoncus通 讯
                    turpis in, pretium purus. Cras feugiat nunc sit amet ipsum ultricies, sit amet consequat augue
                    gravida. Nulla ullamcorper in ante vel auctor. Donec dolor dolor, fringilla in nunc quis, posuere
                    scelerisque nisi.</p>

                <p>Aliquam suscipit mi dolor, pulvinar scelerisque justo vehicula nec. Praesent euismod orci fringilla
                    lorem pulvinar semper eget ac mi. Nam non augue bibendum, luctus nisi eu, semper erat. Donec posuere
                    nisl eu nunc placerat ultrices. Mauris ut dui ut nibh scelerisque efficitur. In eu elit neque.
                    Praesent auctor, magna quis ornare ultrices.</p>

                <p>Donec a est in est consequat hendrerit eu id ipsum. In viverra rutrum finibus. Nullam ornare
                    efficitur dolor at porttitor. Donec tempor convallis neque, faucibus interdum lorem pellentesque
                    quis. Maecenas quis hendrerit orci. Suspendisse at bibendum dui, non vulputate neque. Mauris
                    shattered scelerisque.</p>

                <p class="mb-0">Phasellus sodales augue semper enim blandit lobortis. Suspendisse sed orci nunc. Donec
                    nisl lorem, pulvinar sed orci in, tempus cursus elit. Vestibulum ante ipsum primis in faucibus orci
                    luctus et ultrices posuere cubilia Curae; Nulla at consectetur lacus. Pellentesque elementum
                    imperdiet volutpat. Vestibulum ut pretium justo.</p>
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fixedScrollBtn = document.querySelector(".gtt-button-fixed");
        const allTopTriggers = document.querySelectorAll(".gtt-trigger-action");

        // 1. Memantau posisi scroll untuk memunculkan/menyembunyikan tombol mengambang
        window.addEventListener("scroll", function() {
            // Jika halaman di-scroll ke bawah lebih dari 150 piksel
            if (window.scrollY > 150) {
                fixedScrollBtn.classList.add("gtt-show");
            } else {
                fixedScrollBtn.classList.remove("gtt-show");
            }
        });

        // 2. Eksekusi aksi lompat ke paling atas halaman secara smooth saat elemen diklik
        allTopTriggers.forEach(function(element) {
            element.addEventListener("click", function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: "smooth" // Efek transisi meluncur halus
                });
            });
        });
    });
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>