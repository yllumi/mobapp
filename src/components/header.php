<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Header</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Info -->
        <p class="text-muted mb-3" style="font-size:14px;">
            Berbagai variasi style <strong>Header</strong> untuk mobile app. Scroll ke bawah untuk melihat contoh demo.
        </p>

        <!-- 1. Basic Header -->
        <div class="section-title">Basic Header</div>
        <div class="header-demo">
            <header class="header-basic">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Menu">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="header-title">Home</div>
                <div class="header-right">
                    <a href="javascript:void(0)" class="header-btn" title="Notifications">
                        <i class="bi bi-bell"></i>
                        <span class="badge badge-notification">3</span>
                    </a>
                </div>
            </header>
        </div>

        <!-- 2. Header with Search -->
        <div class="section-title">Header with Search</div>
        <div class="header-demo">
            <header class="header-search">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Menu">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="header-search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-right">
                    <a href="javascript:void(0)" class="header-btn" title="Filter">
                        <i class="bi bi-funnel"></i>
                    </a>
                </div>
            </header>
        </div>

        <!-- 3. Header with Icons and Badge -->
        <div class="section-title">Header with Icons and Badge</div>
        <div class="header-demo">
            <header class="header-icons">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Back">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="header-title">Messages</div>
                <div class="header-right header-icon-group">
                    <a href="javascript:void(0)" class="header-btn" title="Search">
                        <i class="bi bi-search"></i>
                    </a>
                    <a href="javascript:void(0)" class="header-btn" title="Notifications">
                        <i class="bi bi-bell"></i>
                        <span class="badge badge-notification">5</span>
                    </a>
                    <a href="javascript:void(0)" class="header-btn" title="Options">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                </div>
            </header>
        </div>

        <!-- 4. Header with Profile -->
        <div class="section-title">Header with Profile</div>
        <div class="header-demo">
            <header class="header-profile">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Menu">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="header-title">Profile</div>
                <div class="header-right">
                    <a href="javascript:void(0)" class="header-profile-btn" title="User Profile">
                        <img src="<?= $basePath ?>assets/wide2.jpg" alt="User" class="header-profile-img">
                    </a>
                </div>
            </header>
        </div>

        <!-- 5. Header with Text + Icon Button -->
        <div class="section-title">Header with Text + Icon Button</div>
        <div class="header-demo">
            <header class="header-text-icon">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Back">
                        <i class="bi bi-chevron-left"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="header-title">Settings</div>
                <div class="header-right">
                    <a href="javascript:void(0)" class="header-btn" title="Save">
                        <i class="bi bi-check2"></i>
                        <span>Save</span>
                    </a>
                </div>
            </header>
        </div>

        <!-- 6. Header Minimal -->
        <div class="section-title">Header Minimal</div>
        <div class="header-demo">
            <header class="header-minimal">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn" title="Back">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="header-title">Minimal</div>
                <div class="header-right"></div>
            </header>
        </div>

        <!-- 7. Header with Action Buttons -->
        <div class="section-title">Header with Action Buttons</div>
        <div class="header-demo">
            <header class="header-actions">
                <div class="header-left">
                    <a href="javascript:void(0)" class="header-btn btn-outline" title="Cancel">
                        <i class="bi bi-x-lg"></i>
                    </a>
                </div>
                <div class="header-title">Select Items</div>
                <div class="header-right">
                    <a href="javascript:void(0)" class="header-btn btn-primary" title="Done">
                        <i class="bi bi-check-lg"></i>
                    </a>
                </div>
            </header>
        </div>

        <!-- Spacer for the actual bottom menu -->
        <div style="height:20px"></div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>