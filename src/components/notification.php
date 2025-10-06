<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Notifications</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Demo Buttons -->
        <div class="section-title">Interactive Notifications</div>
        
        <div class="button-group">
            <button class="btn btn-success" onclick="showNotification('success', 'Success!', 'Operation completed successfully.')">
                Show Success
            </button>
            <button class="btn btn-danger" onclick="showNotification('error', 'Error!', 'Something went wrong.')">
                Show Error
            </button>
            <button class="btn btn-warning" onclick="showNotification('warning', 'Warning!', 'Please be careful.')">
                Show Warning
            </button>
            <button class="btn btn-info" onclick="showNotification('info', 'Info', 'Here is some information.')">
                Show Info
            </button>
        </div>

        <!-- Demo Buttons for Fixed Notifications -->
        <div class="section-title">Fixed Top Notifications</div>
        
        <div class="button-group">
            <button class="btn btn-success" onclick="showNotification('success', 'Success!', 'Operation completed successfully.', {position: 'fixed-top', style: 'fullwidth'})">
                Fullwidth Success
            </button>
            <button class="btn btn-danger" onclick="showNotification('error', 'Error!', 'Something went wrong.', {position: 'fixed-top', style: 'rounded'})">
                Rounded Error
            </button>
            <button class="btn btn-warning" onclick="showNotification('warning', 'Warning!', 'Please be careful.', {position: 'fixed-top', style: 'fullwidth'})">
                Fullwidth Warning
            </button>
            <button class="btn btn-info" onclick="showNotification('info', 'Info', 'Here is some information.', {position: 'fixed-top', style: 'rounded'})">
                Rounded Info
            </button>
        </div>

        <!-- Demo Multiple Notifications -->
        <div class="section-title">Test Multiple Notifications</div>
        
        <div class="button-group">
            <button class="btn btn-outline-primary" onclick="testMultipleNotifications()">
                Test Rapid Notifications
            </button>
            <button class="btn btn-outline-danger" onclick="clearAllNotifications()">
                Clear All Notifications
            </button>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
// Test function for multiple notifications
function testMultipleNotifications() {
    const notifications = [
        {type: 'info', title: 'First', message: 'This will be replaced immediately'},
        {type: 'warning', title: 'Second', message: 'This will also be replaced'},
        {type: 'success', title: 'Third', message: 'This will be replaced too'},
        {type: 'error', title: 'Final', message: 'Only this one should remain visible'}
    ];
    
    notifications.forEach((notif, index) => {
        setTimeout(() => {
            showNotification(notif.type, notif.title, notif.message, {
                position: 'fixed-top',
                style: 'rounded'
            });
        }, index * 500);
    });
}
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>