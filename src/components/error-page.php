<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Error Pages</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Error Page Examples -->
        <div class="section-title">Error Page Examples</div>
        
        <div class="button-group">
            <button class="btn btn-danger" onclick="showErrorPage('404')">
                404 - Not Found
            </button>
            <button class="btn btn-warning" onclick="showErrorPage('403')">
                403 - Forbidden
            </button>
            <button class="btn btn-info" onclick="showErrorPage('500')">
                500 - Server Error
            </button>
            <button class="btn btn-secondary" onclick="showErrorPage('503')">
                503 - Service Unavailable
            </button>
        </div>

        <!-- Custom Error Pages -->
        <div class="section-title">Custom Error Pages</div>
        
        <div class="button-group">
            <button class="btn btn-outline-danger" onclick="showErrorPage('network')">
                Network Error
            </button>
            <button class="btn btn-outline-warning" onclick="showErrorPage('timeout')">
                Timeout Error
            </button>
            <button class="btn btn-outline-info" onclick="showErrorPage('maintenance')">
                Maintenance Mode
            </button>
            <button class="btn btn-outline-secondary" onclick="showErrorPage('empty')">
                No Data Found
            </button>
        </div>

        <!-- Inline Error Examples -->
        <div class="section-title">Inline Error Examples</div>

        <!-- 404 Error Card -->
        <div class="error-card">
            <div class="error-icon error-404">
                <i class="bi bi-search"></i>
            </div>
            <div class="error-content">
                <div class="error-code">404</div>
                <div class="error-title">Page Not Found</div>
                <div class="error-message">The page you are looking for doesn't exist or has been moved.</div>
            </div>
            <div class="error-actions">
                <button class="btn btn-primary" onclick="goHome()">Go Home</button>
                <button class="btn btn-outline-primary" onclick="goBack()">Go Back</button>
            </div>
        </div>

        <!-- Network Error Card -->
        <div class="error-card error-network">
            <div class="error-icon">
                <i class="bi bi-wifi-off"></i>
            </div>
            <div class="error-content">
                <div class="error-title">No Internet Connection</div>
                <div class="error-message">Please check your internet connection and try again.</div>
            </div>
            <div class="error-actions">
                <button class="btn btn-success" onclick="retryConnection()">Retry</button>
                <button class="btn btn-outline-secondary" onclick="goOffline()">Work Offline</button>
            </div>
        </div>

        <!-- Empty State Card -->
        <div class="error-card error-empty">
            <div class="error-icon">
                <i class="bi bi-inbox"></i>
            </div>
            <div class="error-content">
                <div class="error-title">No Data Found</div>
                <div class="error-message">There's nothing here yet. Start by adding some content.</div>
            </div>
            <div class="error-actions">
                <button class="btn btn-primary" onclick="addContent()">Add Content</button>
                <button class="btn btn-outline-primary" onclick="refresh()">Refresh</button>
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<!-- Error Page Overlay -->
<div id="error-overlay" class="error-overlay"></div>

<!-- Error Page Container -->
<div id="error-page-container" class="error-page-container"></div>

<?php include __DIR__ . '/../partials/footer.php' ?>