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

    <div class="app-container">

        <!-- Static Notification Examples -->
        <div class="section-title">Static Notifications</div>
        
        <!-- Success Notification -->
        <div class="notify notify-success">
            <div class="notify-icon">
                <i class="bi bi-check-circle"></i>
            </div>
            <div class="notify-content">
                <div class="notify-title">Success!</div>
                <div class="notify-text">Your action has been completed successfully.</div>
            </div>
            <div class="notify-close">
                <i class="bi bi-x"></i>
            </div>
        </div>

        <!-- Error Notification -->
        <div class="notify notify-error">
            <div class="notify-icon">
                <i class="bi bi-exclamation-circle"></i>
            </div>
            <div class="notify-content">
                <div class="notify-title">Error!</div>
                <div class="notify-text">Something went wrong. Please try again.</div>
            </div>
            <div class="notify-close">
                <i class="bi bi-x"></i>
            </div>
        </div>

        <!-- Warning Notification -->
        <div class="notify notify-warning">
            <div class="notify-icon">
                <i class="bi bi-exclamation-triangle"></i>
            </div>
            <div class="notify-content">
                <div class="notify-title">Warning!</div>
                <div class="notify-text">Please check your input before proceeding.</div>
            </div>
            <div class="notify-close">
                <i class="bi bi-x"></i>
            </div>
        </div>

        <!-- Info Notification -->
        <div class="notify notify-info">
            <div class="notify-icon">
                <i class="bi bi-info-circle"></i>
            </div>
            <div class="notify-content">
                <div class="notify-title">Information</div>
                <div class="notify-text">Here's some important information for you.</div>
            </div>
            <div class="notify-close">
                <i class="bi bi-x"></i>
            </div>
        </div>

        <!-- Simple Notification without icon -->
        <div class="notify notify-simple">
            <div class="notify-content">
                <div class="notify-text">This is a simple notification without icon.</div>
            </div>
            <div class="notify-close">
                <i class="bi bi-x"></i>
            </div>
        </div>

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

        <!-- Notification Container for dynamic notifications -->
        <div id="notification-container"></div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
// Notification system
function showNotification(type, title, message, duration = 5000) {
    const container = document.getElementById('notification-container');
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notify notify-${type} notify-dynamic`;
    
    let iconClass = '';
    switch(type) {
        case 'success': iconClass = 'bi-check-circle'; break;
        case 'error': iconClass = 'bi-exclamation-circle'; break;
        case 'warning': iconClass = 'bi-exclamation-triangle'; break;
        case 'info': iconClass = 'bi-info-circle'; break;
        default: iconClass = 'bi-info-circle';
    }
    
    notification.innerHTML = `
        <div class="notify-icon">
            <i class="bi ${iconClass}"></i>
        </div>
        <div class="notify-content">
            <div class="notify-title">${title}</div>
            <div class="notify-text">${message}</div>
        </div>
        <div class="notify-close" onclick="closeNotification(this)">
            <i class="bi bi-x"></i>
        </div>
    `;
    
    // Add to container
    container.appendChild(notification);
    
    // Show animation
    setTimeout(() => {
        notification.classList.add('notify-show');
    }, 100);
    
    // Auto remove
    if (duration > 0) {
        setTimeout(() => {
            closeNotification(notification.querySelector('.notify-close'));
        }, duration);
    }
}

function closeNotification(closeBtn) {
    const notification = closeBtn.closest('.notify');
    notification.classList.add('notify-hide');
    
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}

// Add close functionality to static notifications
document.addEventListener('DOMContentLoaded', function() {
    const closeButtons = document.querySelectorAll('.notify-close');
    closeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            closeNotification(this);
        });
    });
});
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>