<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void(0)" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">OS Detection</div>
        <div class="right"></div>
    </div>

    <div class="app-container px-3 pt-3">

        <div class="osdet-box-desktop mb-3">
            <div class="card osdet-card text-center">
                <div class="card-body p-4 py-5">
                    <div class="osdet-icon-wrapper text-secondary">
                        <i class="bi bi-display"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Not a Mobile Device</h5>
                    <p class="text-secondary small mb-0 px-2">
                        You are currently browsing from a computer. Try opening this page on your mobile device. This
                        box is only visible on non-mobile platforms.
                    </p>
                </div>
            </div>
        </div>

        <div class="osdet-box-ios mb-3">
            <div class="card osdet-card text-center">
                <div class="card-body p-4 py-5">
                    <div class="osdet-icon-wrapper text-dark">
                        <i class="bi bi-apple"></i>
                    </div>
                    <h5 class="fw-bold mb-2">iOS Detected</h5>
                    <p class="text-secondary small mb-0 px-2">
                        You can see this box because you are browsing from an iPhone, iPad, or iPod device.
                    </p>
                </div>
            </div>
        </div>

        <div class="osdet-box-android mb-3">
            <div class="card osdet-card text-center">
                <div class="card-body p-4 py-5">
                    <div class="osdet-icon-wrapper text-success">
                        <i class="bi bi-android2"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Android Detected</h5>
                    <p class="text-secondary small mb-0 px-2">
                        You can see this box because you are browsing from an Android device.
                    </p>
                </div>
            </div>
        </div>

        <div class="osdet-box-windows mb-3">
            <div class="card osdet-card text-center">
                <div class="card-body p-4 py-5">
                    <div class="osdet-icon-wrapper text-primary">
                        <i class="bi bi-windows"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Windows Device Detected</h5>
                    <p class="text-secondary small mb-0 px-2">
                        You can see this box because you are browsing from a Windows Mobile or Windows handheld device.
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-3 mt-4">
            <h6 class="fw-bold text-secondary mb-2 px-1">How it works?</h6>
            <div class="osdet-wide-block">
                <p class="text-secondary small mb-0" style="line-height: 1.6;">
                    OS Detection automatically identifies the visitor's operating system environment. By targetting
                    specific CSS prefix classes, you can craft specific call-to-actions, layouts, or download buttons
                    intended only for those platform users.
                </p>
            </div>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold text-secondary mb-2 px-1">Target Classes Reference</h6>
            <div class="osdet-wide-block">
                <div class="mb-3">
                    <span class="badge bg-success mb-1">Android</span>
                    <p class="text-secondary small mb-0">Use <code>.osdet-box-android</code> to target Android-specific
                        layouts.</p>
                </div>
                <div class="mb-3">
                    <span class="badge bg-dark mb-1">iOS</span>
                    <p class="text-secondary small mb-0">Use <code>.osdet-box-ios</code> to toggle elements visibility
                        only on Apple mobile devices.</p>
                </div>
                <div class="mb-3">
                    <span class="badge bg-primary mb-1">Windows Mobile</span>
                    <p class="text-secondary small mb-0">Use <code>.osdet-box-windows</code> to filter elements for
                        Windows device ecosystems.</p>
                </div>
                <div>
                    <span class="badge bg-secondary mb-1">Non-mobile (Desktop)</span>
                    <p class="text-secondary small mb-0">Use <code>.osdet-box-desktop</code> to approach user segments
                        browsing from desktop/laptop nodes.</p>
                </div>
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ambil string user agent dari browser
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;

        // Element Selector Box
        const boxDesktop = document.querySelector(".osdet-box-desktop");
        const boxIos = document.querySelector(".osdet-box-ios");
        const boxAndroid = document.querySelector(".osdet-box-android");
        const boxWindows = document.querySelector(".osdet-box-windows");

        // 1. Logika Cek Windows Phone / Windows Handheld
        if (/windows phone/i.test(userAgent) || /IEMobile/i.test(userAgent)) {
            boxWindows.style.display = "block";
        }
        // 2. Logika Cek Android
        else if (/android/i.test(userAgent)) {
            boxAndroid.style.display = "block";
        }
        // 3. Logika Cek iOS (iPhone, iPad, iPod)
        else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            boxIos.style.display = "block";
        }
        // Mac / iPadOS Safari Modern Detection (sering terdeteksi sebagai Macintosh biasa)
        else if (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1) {
            boxIos.style.display = "block";
        }
        // 4. Fallback jika tidak masuk kategori mobile diatas, berarti Desktop/PC
        else {
            boxDesktop.style.display = "block";
        }
    });
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>