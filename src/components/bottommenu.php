<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Bottom Menu</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Info -->
        <p class="text-muted mb-3" style="font-size:14px;">
            Berbagai variasi style <strong>Bottom Menu</strong> untuk mobile app. Scroll ke bawah untuk melihat contoh demo.
        </p>

        <!-- 1. Icons Only -->
        <div class="section-title">Icons Only</div>
        <div class="bm-demo">
            <nav class="bm bm-icons-only">
                <a href="#" class="bm-item active">
                    <i class="bi bi-house-fill"></i>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-heart"></i>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-bell"></i>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-person"></i>
                </a>
            </nav>
        </div>

        <!-- 2. Icons with Labels -->
        <div class="section-title">Icons with Labels</div>
        <div class="bm-demo">
            <nav class="bm bm-label">
                <a href="#" class="bm-item active">
                    <i class="bi bi-house-fill"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-search"></i>
                    <span>Search</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-heart"></i>
                    <span>Favorites</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-bell"></i>
                    <span>Alerts</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </nav>
        </div>

        <!-- 3. Center Prominent Button -->
        <div class="section-title">Center Prominent Button</div>
        <div class="bm-demo">
            <nav class="bm bm-center">
                <a href="#" class="bm-item">
                    <i class="bi bi-house-fill"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-heart"></i>
                    <span>Wishlist</span>
                </a>
                <a href="#" class="bm-item bm-center-btn">
                    <i class="bi bi-plus-lg"></i>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-bell"></i>
                    <span>Alerts</span>
                </a>
                <a href="#" class="bm-item active">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </nav>
        </div>

        <!-- 4. Label Shows Only on Active Menu -->
        <div class="section-title">Label Shows Only on Active Menu</div>
        <div class="bm-demo">
            <nav class="bm bm-label-on-active">
                <a href="#" class="bm-item active">
                    <i class="bi bi-house-fill"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-search"></i>
                    <span>Search</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-heart"></i>
                    <span>Favorites</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </nav>
        </div>

        <!-- 5. iOS Style -->
        <div class="section-title">iOS Style</div>
        <div class="bm-demo">
            <nav class="bm bm-ios">
                <a href="#" class="bm-item active">
                    <i class="bi bi-house-fill"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-search"></i>
                    <span>Search</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-heart"></i>
                    <span>Favorites</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-bell"></i>
                    <span>Alerts</span>
                </a>
                <a href="#" class="bm-item">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </nav>
        </div>

        <!-- Spacer for the actual bottom menu -->
        <div style="height:20px"></div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>