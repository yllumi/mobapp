// Global variables
let toastCounter = 0;
let alertCounter = 0;
let currentDialog = null;
let currentErrorPage = null;

/*=function closeToast(toastId) {
    const toast =    containers.forEach(container => {
        if (container) {
            const toasts = container.querySelectorAll('.toaster');
            toasts.forEach(toast => {
                toast.classList.remove('toaster-show');
                toast.classList.add('toaster-hide');
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.parentNode.removeChild(toast);
                    }
                }, 300);
            });
        }
    });lementById(toastId);
    if (toast) {
        toast.classList.remove('toaster-show');
        toast.classList.add('toaster-hide');
        
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 300);
    }
}=======================
 * Toast System
 *=====================================*/
function showToast(type = 'default', message, duration = 3000, position = 'bottom') {
    toastCounter++;
    const toastId = `toast-${toastCounter}`;
    
    // Get container based on position
    let container;
    switch(position) {
        case 'top':
            container = document.getElementById('toast-container-top');
            break;
        case 'center':
            container = document.getElementById('toast-container-center');
            break;
        case 'bottom':
        default:
            container = document.getElementById('toast-container-bottom');
            break;
    }
    
    if (!container) {
        // Create containers if they don't exist
        createToastContainers();
        container = document.getElementById(`toast-container-${position}`);
    }
    
    // Create toast element
    const toast = document.createElement('div');
    toast.className = `toaster toaster-${type}`;
    toast.id = toastId;
    
    let iconClass = '';
    switch(type) {
        case 'success': iconClass = 'bi-check-circle'; break;
        case 'error': iconClass = 'bi-exclamation-circle'; break;
        case 'warning': iconClass = 'bi-exclamation-triangle'; break;
        case 'info': iconClass = 'bi-info-circle'; break;
        default: iconClass = 'bi-chat-dots';
    }
    
    toast.innerHTML = `
        <div class="toast-content">
            <div class="toast-icon">
                <i class="bi ${iconClass}"></i>
            </div>
            <div class="toast-message">${message}</div>
        </div>
        <div class="toast-close" onclick="closeToast('${toastId}')">
            <i class="bi bi-x"></i>
        </div>
    `;
    
    // Add to container
    container.appendChild(toast);
    
    // Show animation
    setTimeout(() => {
        toast.classList.add('toaster-show');
    }, 100);
    
    // Auto remove
    if (duration > 0) {
        setTimeout(() => {
            closeToast(toastId);
        }, duration);
    }
    
    return toastId;
}

function showActionToast() {
    toastCounter++;
    const toastId = `toast-${toastCounter}`;
    let container = document.getElementById('toast-container-bottom');
    
    if (!container) {
        createToastContainers();
        container = document.getElementById('toast-container-bottom');
    }
    
    const toast = document.createElement('div');
    toast.className = 'toaster toaster-action';
    toast.id = toastId;
    
    toast.innerHTML = `
        <div class="toast-content">
            <div class="toast-icon">
                <i class="bi bi-archive"></i>
            </div>
            <div class="toast-message">Item moved to trash</div>
        </div>
        <div class="toast-actions">
            <button class="toast-btn" onclick="undoAction('${toastId}')">UNDO</button>
            <button class="toast-close" onclick="closeToast('${toastId}')">
                <i class="bi bi-x"></i>
            </button>
        </div>
    `;
    
    container.appendChild(toast);
    
    setTimeout(() => {
        toast.classList.add('toaster-show');
    }, 100);
    
    setTimeout(() => {
        closeToast(toastId);
    }, 8000);
}

function undoAction(toastId) {
    showToast('success', 'Action has been undone!', 2000);
    closeToast(toastId);
}

function closeToast(toastId) {
    const toast = document.getElementById(toastId);
    if (toast) {
        toast.classList.remove('show');
        toast.classList.add('toast-hide');
        
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 300);
    }
}

function showMultipleToasts() {
    const messages = [
        {type: 'info', message: 'First toast message'},
        {type: 'success', message: 'Second toast message'},
        {type: 'warning', message: 'Third toast message'},
        {type: 'error', message: 'Fourth toast message'}
    ];
    
    messages.forEach((item, index) => {
        setTimeout(() => {
            showToast(item.type, item.message, 4000);
        }, index * 500);
    });
}

function clearAllToasts() {
    const containers = [
        document.getElementById('toast-container-top'),
        document.getElementById('toast-container-center'),
        document.getElementById('toast-container-bottom')
    ];
    
    containers.forEach(container => {
        if (container) {
            const toasts = container.querySelectorAll('.toast');
            toasts.forEach(toast => {
                toast.classList.remove('show');
                toast.classList.add('toast-hide');
                setTimeout(() => {
                    if (toast.parentNode) {
                        toast.parentNode.removeChild(toast);
                    }
                }, 300);
            });
        }
    });
}

function createToastContainers() {
    if (!document.getElementById('toast-container-top')) {
        const topContainer = document.createElement('div');
        topContainer.id = 'toast-container-top';
        topContainer.className = 'toast-container toast-top';
        document.body.appendChild(topContainer);
    }
    
    if (!document.getElementById('toast-container-center')) {
        const centerContainer = document.createElement('div');
        centerContainer.id = 'toast-container-center';
        centerContainer.className = 'toast-container toast-center';
        document.body.appendChild(centerContainer);
    }
    
    if (!document.getElementById('toast-container-bottom')) {
        const bottomContainer = document.createElement('div');
        bottomContainer.id = 'toast-container-bottom';
        bottomContainer.className = 'toast-container toast-bottom';
        document.body.appendChild(bottomContainer);
    }
}

/*=====================================
 * Notification System
 *=====================================*/
function showNotification(type, title, message, options = {}) {
    const {
        dismissible = true,
        persistent = false,
        position = 'fixed-top',
        style = 'rounded', // 'rounded' or 'fullwidth'
        duration = persistent ? 0 : 5000
    } = options;
    
    // Create notification container if it doesn't exist
    let container = document.getElementById(`notification-container-${position}`);
    if (!container) {
        container = document.createElement('div');
        container.id = `notification-container-${position}`;
        container.className = `notification-container notification-${position}`;
        document.body.appendChild(container);
    }
    
    // Clear any existing notifications to ensure only one at a time
    const existingNotifications = container.querySelectorAll('.notify');
    existingNotifications.forEach(existingNotification => {
        existingNotification.classList.remove('notify-show');
        existingNotification.classList.add('notify-hide');
        setTimeout(() => {
            if (existingNotification.parentNode) {
                existingNotification.parentNode.removeChild(existingNotification);
            }
        }, 100); // Faster removal for immediate replacement
    });
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notify notify-${type} notify-dynamic notify-${style}`;
    
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
        ${dismissible ? '<div class="notify-close" onclick="closeNotification(this)"><i class="bi bi-x"></i></div>' : ''}
    `;
    
    // Add to container with slight delay to ensure smooth transition
    setTimeout(() => {
        container.appendChild(notification);
        
        // Show animation
        setTimeout(() => {
            notification.classList.add('notify-show');
        }, 50);
    }, 150); // Wait for existing notifications to be removed
    
    // Auto remove
    if (duration > 0) {
        setTimeout(() => {
            const closeBtn = notification.querySelector('.notify-close');
            if (closeBtn) {
                closeNotification(closeBtn);
            }
        }, duration + 150); // Adjust duration for the delay
    }
}

function closeNotification(closeBtn) {
    if (!closeBtn) return;
    
    const notification = closeBtn.closest('.notify');
    if (notification) {
        notification.classList.add('notify-hide');
        
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }
}

function clearAllNotifications() {
    const containers = document.querySelectorAll('[id^="notification-container-"]');
    containers.forEach(container => {
        const notifications = container.querySelectorAll('.notify');
        notifications.forEach(notification => {
            notification.classList.remove('notify-show');
            notification.classList.add('notify-hide');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        });
    });
}

/*=====================================
 * Alert System
 *=====================================*/
function showAlert(type, title, message, options = {}) {
    alertCounter++;
    const alertId = `alert-${alertCounter}`;
    
    const {
        dismissible = true,
        persistent = false,
        position = 'inline',
        actions = [],
        duration = persistent ? 0 : 8000
    } = options;
    
    // Create alert element
    const alert = document.createElement('div');
    alert.className = `alert alert-${type} alert-dynamic`;
    alert.id = alertId;
    alert.setAttribute('role', 'alert');
    
    let iconClass = '';
    switch(type) {
        case 'success': iconClass = 'bi-check-circle'; break;
        case 'error': iconClass = 'bi-exclamation-circle'; break;
        case 'warning': iconClass = 'bi-exclamation-triangle'; break;
        case 'info': iconClass = 'bi-info-circle'; break;
        default: iconClass = 'bi-info-circle';
    }
    
    let actionsHTML = '';
    if (actions.length > 0) {
        alert.classList.add('alert-action');
        actionsHTML = '<div class="alert-actions">';
        actions.forEach(action => {
            const btnClass = action.class || 'alert-btn-secondary';
            const btnAction = action.action || `closeAlert(document.getElementById('${alertId}'))`;
            actionsHTML += `<button class="alert-btn ${btnClass}" onclick="${btnAction}">${action.text}</button>`;
        });
        actionsHTML += '</div>';
    }
    
    alert.innerHTML = `
        <div class="alert-icon">
            <i class="bi ${iconClass}"></i>
        </div>
        <div class="alert-content">
            <div class="alert-title">${title}</div>
            <div class="alert-message">${message}</div>
        </div>
        ${actionsHTML}
        ${dismissible ? `<button class="alert-close" onclick="closeAlert(this)"><i class="bi bi-x"></i></button>` : ''}
    `;
    
    // Add to container
    const container = getAlertContainer(position);
    container.appendChild(alert);
    
    // Show animation
    setTimeout(() => {
        alert.classList.add('alert-show');
    }, 100);
    
    // Auto remove (if not persistent)
    if (duration > 0) {
        setTimeout(() => {
            closeAlert(alert);
        }, duration);
    }
    
    return alertId;
}

function closeAlert(element) {
    let alert;
    if (typeof element === 'string') {
        alert = document.getElementById(element);
    } else if (element.classList && element.classList.contains('alert')) {
        alert = element;
    } else {
        alert = element.closest('.alert');
    }
    
    if (alert) {
        alert.classList.remove('alert-show');
        alert.classList.add('alert-hide');
        
        setTimeout(() => {
            if (alert.parentNode) {
                alert.parentNode.removeChild(alert);
            }
        }, 300);
    }
}

function getAlertContainer(position) {
    if (position === 'inline') {
        let container = document.getElementById('alert-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'alert-container';
            document.body.appendChild(container);
        }
        return container;
    }
    // For other positions, create temporary containers if needed
    return document.getElementById('alert-container') || document.body;
}

function clearAllAlerts() {
    const alerts = document.querySelectorAll('.alert:not(.alert-hide)');
    alerts.forEach(alert => {
        closeAlert(alert);
    });
}

/*=====================================
 * Dialog System
 *=====================================*/
function showDialog(options) {
    const {
        title = '',
        content = '',
        type = 'default',
        size = 'medium',
        buttons = [],
        dismissible = true,
        onShow = null,
        onClose = null
    } = options;

    // Create overlay and container if they don't exist
    createDialogElements();

    // Create dialog element
    const dialog = document.createElement('div');
    dialog.className = `dialog dialog-${type} dialog-${size}`;
    
    let headerHTML = '';
    if (title) {
        headerHTML = `
            <div class="dialog-header">
                <div class="dialog-title">${title}</div>
                ${dismissible ? '<div class="dialog-close" onclick="closeDialog()"><i class="bi bi-x"></i></div>' : ''}
            </div>
        `;
    }
    
    let buttonsHTML = '';
    if (buttons.length > 0) {
        buttonsHTML = '<div class="dialog-footer">';
        buttons.forEach(button => {
            const btnClass = button.class || 'btn-secondary';
            const btnAction = button.action || 'closeDialog()';
            buttonsHTML += `<button class="btn ${btnClass}" onclick="${btnAction}">${button.text}</button>`;
        });
        buttonsHTML += '</div>';
    }
    
    dialog.innerHTML = `
        ${headerHTML}
        <div class="dialog-body">
            ${content}
        </div>
        ${buttonsHTML}
    `;
    
    // Add to container
    const container = document.getElementById('dialog-container');
    const overlay = document.getElementById('dialog-overlay');
    
    container.innerHTML = '';
    container.appendChild(dialog);
    
    // Show dialog
    overlay.classList.add('dialog-overlay-show');
    dialog.classList.add('dialog-show');
    
    // Store reference
    currentDialog = {
        element: dialog,
        onClose: onClose
    };
    
    // Call onShow callback
    if (onShow) onShow();
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeDialog() {
    if (!currentDialog) return;
    
    const overlay = document.getElementById('dialog-overlay');
    const dialog = currentDialog.element;
    
    // Hide animation
    overlay.classList.remove('dialog-overlay-show');
    dialog.classList.remove('dialog-show');
    
    // Call onClose callback
    if (currentDialog.onClose) {
        currentDialog.onClose();
    }
    
    // Clean up
    setTimeout(() => {
        const container = document.getElementById('dialog-container');
        if (container) container.innerHTML = '';
        document.body.style.overflow = '';
        currentDialog = null;
    }, 300);
}

function createDialogElements() {
    if (!document.getElementById('dialog-overlay')) {
        const overlay = document.createElement('div');
        overlay.id = 'dialog-overlay';
        overlay.className = 'dialog-overlay';
        overlay.onclick = () => closeDialog();
        document.body.appendChild(overlay);
    }
    
    if (!document.getElementById('dialog-container')) {
        const container = document.createElement('div');
        container.id = 'dialog-container';
        container.className = 'dialog-container';
        document.body.appendChild(container);
    }
}

/*=====================================
 * Error Page System
 *=====================================*/
function showErrorPage(type) {
    const errorConfigs = {
        '404': {
            icon: 'bi-search',
            code: '404',
            title: 'Page Not Found',
            message: 'The page you are looking for doesn\'t exist or has been moved.',
            actions: [
                {text: 'Go Home', class: 'btn-primary', action: 'goHome()'},
                {text: 'Go Back', class: 'btn-outline-primary', action: 'goBack()'}
            ]
        },
        '403': {
            icon: 'bi-shield-exclamation',
            code: '403',
            title: 'Access Forbidden',
            message: 'You don\'t have permission to access this resource.',
            actions: [
                {text: 'Go Home', class: 'btn-primary', action: 'goHome()'},
                {text: 'Contact Support', class: 'btn-outline-primary', action: 'contactSupport()'}
            ]
        },
        '500': {
            icon: 'bi-exclamation-triangle',
            code: '500',
            title: 'Internal Server Error',
            message: 'Something went wrong on our end. Please try again later.',
            actions: [
                {text: 'Try Again', class: 'btn-primary', action: 'refresh()'},
                {text: 'Go Home', class: 'btn-outline-primary', action: 'goHome()'}
            ]
        },
        '503': {
            icon: 'bi-tools',
            code: '503',
            title: 'Service Unavailable',
            message: 'The service is temporarily unavailable. Please try again in a few minutes.',
            actions: [
                {text: 'Retry', class: 'btn-primary', action: 'refresh()'},
                {text: 'Check Status', class: 'btn-outline-primary', action: 'checkStatus()'}
            ]
        },
        'network': {
            icon: 'bi-wifi-off',
            code: '',
            title: 'No Internet Connection',
            message: 'Please check your internet connection and try again.',
            actions: [
                {text: 'Retry', class: 'btn-success', action: 'retryConnection()'},
                {text: 'Work Offline', class: 'btn-outline-secondary', action: 'goOffline()'}
            ]
        },
        'timeout': {
            icon: 'bi-clock',
            code: '',
            title: 'Request Timeout',
            message: 'The request took too long to complete. Please try again.',
            actions: [
                {text: 'Try Again', class: 'btn-primary', action: 'refresh()'},
                {text: 'Cancel', class: 'btn-outline-secondary', action: 'closeErrorPage()'}
            ]
        },
        'maintenance': {
            icon: 'bi-tools',
            code: '',
            title: 'Under Maintenance',
            message: 'We\'re currently performing maintenance. Please check back later.',
            actions: [
                {text: 'Check Status', class: 'btn-primary', action: 'checkStatus()'},
                {text: 'Get Updates', class: 'btn-outline-primary', action: 'getUpdates()'}
            ]
        },
        'empty': {
            icon: 'bi-inbox',
            code: '',
            title: 'No Data Found',
            message: 'There\'s nothing here yet. Start by adding some content.',
            actions: [
                {text: 'Add Content', class: 'btn-primary', action: 'addContent()'},
                {text: 'Refresh', class: 'btn-outline-primary', action: 'refresh()'}
            ]
        }
    };
    
    const config = errorConfigs[type];
    if (!config) return;
    
    createErrorPageElements();
    
    // Create error page element
    const errorPage = document.createElement('div');
    errorPage.className = `error-page error-page-${type}`;
    
    let codeHTML = config.code ? `<div class="error-code">${config.code}</div>` : '';
    
    let actionsHTML = '';
    if (config.actions.length > 0) {
        actionsHTML = '<div class="error-actions">';
        config.actions.forEach(action => {
            actionsHTML += `<button class="btn ${action.class}" onclick="${action.action}">${action.text}</button>`;
        });
        actionsHTML += '</div>';
    }
    
    errorPage.innerHTML = `
        <div class="error-page-content">
            <div class="error-icon">
                <i class="bi ${config.icon}"></i>
            </div>
            <div class="error-content">
                ${codeHTML}
                <div class="error-title">${config.title}</div>
                <div class="error-message">${config.message}</div>
            </div>
            ${actionsHTML}
            <div class="error-close" onclick="closeErrorPage()">
                <i class="bi bi-x"></i>
            </div>
        </div>
    `;
    
    // Add to container
    const container = document.getElementById('error-page-container');
    const overlay = document.getElementById('error-overlay');
    
    container.innerHTML = '';
    container.appendChild(errorPage);
    
    // Show error page
    overlay.classList.add('error-overlay-show');
    errorPage.classList.add('error-page-show');
    
    // Store reference
    currentErrorPage = errorPage;
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeErrorPage() {
    if (!currentErrorPage) return;
    
    const overlay = document.getElementById('error-overlay');
    
    // Hide animation
    overlay.classList.remove('error-overlay-show');
    currentErrorPage.classList.remove('error-page-show');
    
    // Clean up
    setTimeout(() => {
        const container = document.getElementById('error-page-container');
        if (container) container.innerHTML = '';
        document.body.style.overflow = '';
        currentErrorPage = null;
    }, 300);
}

function createErrorPageElements() {
    if (!document.getElementById('error-overlay')) {
        const overlay = document.createElement('div');
        overlay.id = 'error-overlay';
        overlay.className = 'error-overlay';
        overlay.onclick = () => closeErrorPage();
        document.body.appendChild(overlay);
    }
    
    if (!document.getElementById('error-page-container')) {
        const container = document.createElement('div');
        container.id = 'error-page-container';
        container.className = 'error-page-container';
        document.body.appendChild(container);
    }
}

/*=====================================
 * Action Handlers
 *=====================================*/
function goHome() {
    closeErrorPage();
    showToast('info', 'Redirecting to home page...', 2000);
}

function goBack() {
    closeErrorPage();
    history.back();
}

function refresh() {
    closeErrorPage();
    showToast('info', 'Refreshing page...', 2000);
    setTimeout(() => {
        location.reload();
    }, 1000);
}

function retryConnection() {
    closeErrorPage();
    showToast('info', 'Checking connection...', 2000);
    
    // Simulate connection check
    setTimeout(() => {
        showToast('success', 'Connection restored!', 3000);
    }, 2000);
}

function goOffline() {
    closeErrorPage();
    showToast('warning', 'Working in offline mode', 3000);
}

function contactSupport() {
    closeErrorPage();
    showToast('info', 'Opening support page...', 2000);
}

function checkStatus() {
    closeErrorPage();
    showToast('info', 'Checking service status...', 2000);
}

function getUpdates() {
    closeErrorPage();
    showToast('info', 'Subscribing to updates...', 2000);
}

function addContent() {
    closeErrorPage();
    showToast('success', 'Opening content creation...', 2000);
}

/*=====================================
 * Initialize
 *=====================================*/
document.addEventListener('DOMContentLoaded', function() {
    // Create toast containers
    createToastContainers();
    
    // Add event listeners for existing static notifications and alerts
    const closeButtons = document.querySelectorAll('.notify-close, .alert-close');
    closeButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.closest('.notify')) {
                closeNotification(this);
            } else if (this.closest('.alert')) {
                closeAlert(this);
            }
        });
    });
    
    // Close dialog on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (currentDialog) {
                closeDialog();
            } else if (currentErrorPage) {
                closeErrorPage();
            }
        }
    });
});
