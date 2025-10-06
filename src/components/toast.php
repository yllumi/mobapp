<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Toast</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Toast Demo Buttons -->
        <div class="section-title">Toast Examples</div>
        
        <div class="button-group">
            <button class="btn btn-success" onclick="showToast('success', 'Success! Operation completed.')">
                Success Toast
            </button>
            <button class="btn btn-danger" onclick="showToast('error', 'Error! Something went wrong.')">
                Error Toast
            </button>
            <button class="btn btn-warning" onclick="showToast('warning', 'Warning! Please be careful.')">
                Warning Toast
            </button>
            <button class="btn btn-info" onclick="showToast('info', 'Info: Here is some information.')">
                Info Toast
            </button>
        </div>

        <div class="button-group">
            <button class="btn btn-primary" onclick="showToast('default', 'This is a simple toast message.')">
                Simple Toast
            </button>
            <button class="btn btn-secondary" onclick="showToast('success', 'This toast will last 10 seconds!', 10000)">
                Long Duration
            </button>
            <button class="btn btn-secondary" onclick="showToast('info', 'Quick toast!', 1000)">
                Quick Toast
            </button>
        </div>

        <!-- Toast Position Demo -->
        <div class="section-title">Toast Positions</div>
        
        <div class="button-group">
            <button class="btn btn-outline-primary" onclick="showToast('info', 'Toast at top', 3000, 'top')">
                Top Position
            </button>
            <button class="btn btn-outline-primary" onclick="showToast('info', 'Toast at bottom', 3000, 'bottom')">
                Bottom Position
            </button>
            <button class="btn btn-outline-primary" onclick="showToast('info', 'Toast at center', 3000, 'center')">
                Center Position
            </button>
        </div>

        <!-- Action Toast -->
        <div class="section-title">Action Toast</div>
        
        <div class="button-group">
            <button class="btn btn-warning" onclick="showActionToast()">
                Show Action Toast
            </button>
        </div>

        <!-- Multiple Toasts -->
        <div class="section-title">Multiple Toasts</div>
        
        <div class="button-group">
            <button class="btn btn-primary" onclick="showMultipleToasts()">
                Show Multiple Toasts
            </button>
            <button class="btn btn-danger" onclick="clearAllToasts()">
                Clear All Toasts
            </button>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<!-- Toast Container -->
<div id="toast-container-top" class="toast-container toast-top"></div>
<div id="toast-container-center" class="toast-container toast-center"></div>
<div id="toast-container-bottom" class="toast-container toast-bottom"></div>

<?php include __DIR__ . '/../partials/footer.php' ?>