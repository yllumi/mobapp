<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Alert Box</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Dynamic Alert Container -->
        <div id="alert-container" class="pt-3"></div>

        <!-- Dynamic Alert Demo -->
        <div class="section-title">Dynamic Alert Demo</div>

        <div class="button-group">
            <button class="btn btn-success" onclick="showAlert('success', 'Success!', 'Operation completed successfully.')">
                Show Success Alert
            </button>
            <button class="btn btn-danger" onclick="showAlert('error', 'Error!', 'Something went wrong.')">
                Show Error Alert
            </button>
            <button class="btn btn-warning" onclick="showAlert('warning', 'Warning!', 'Please be careful.')">
                Show Warning Alert
            </button>
            <button class="btn btn-info" onclick="showAlert('info', 'Info', 'Here is some information.')">
                Show Info Alert
            </button>
        </div>

        <!-- Alert Variants -->
        <div class="section-title">Alert Variants</div>

        <div class="button-group">
            <button class="btn btn-outline-primary" onclick="showSimpleAlert('This is a simple alert message.')">
                Simple Alert
            </button>
            <button class="btn btn-outline-success" onclick="showActionAlert()">
                Alert with Action
            </button>
            <button class="btn btn-outline-warning" onclick="showPersistentAlert()">
                Persistent Alert
            </button>
            <button class="btn btn-outline-danger" onclick="showMultipleAlerts()">
                Multiple Alerts
            </button>
        </div>

        <!-- Alert Positions -->
        <div class="section-title">Alert Positions</div>

        <div class="button-group">
            <button class="btn btn-light" onclick="showPositionedAlert('top')">
                Top Alert
            </button>
            <button class="btn btn-light" onclick="showPositionedAlert('bottom')">
                Bottom Alert
            </button>
            <button class="btn btn-light" onclick="showPositionedAlert('center')">
                Center Alert
            </button>
        </div>

        <!-- Clear All Alerts -->
        <div class="section-title">Actions</div>

        <div class="button-group">
            <button class="btn btn-danger" onclick="clearAllAlerts()">
                Clear All Alerts
            </button>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<script>
    // Alert Examples - these are specific to this page and use the global functions from main.js

    function showSimpleAlert(message, type = 'info') {
        alertCounter++;
        const alertId = `alert-${alertCounter}`;

        const alert = document.createElement('div');
        alert.className = `alert alert-${type} alert-simple alert-dynamic`;
        alert.id = alertId;
        alert.setAttribute('role', 'alert');

        alert.innerHTML = `
        <div class="alert-content">
            <div class="alert-message">${message}</div>
        </div>
        <button class="alert-close" onclick="closeAlert(this)">
            <i class="bi bi-x"></i>
        </button>
    `;

        const container = getAlertContainer('inline');
        container.appendChild(alert);

        setTimeout(() => {
            alert.classList.add('alert-show');
        }, 100);

        setTimeout(() => {
            closeAlert(alert);
        }, 5000);
    }

    function showActionAlert() {
        const actions = [{
                text: 'Accept',
                class: 'alert-btn-primary',
                action: 'handleAccept()'
            },
            {
                text: 'Decline',
                class: 'alert-btn-secondary',
                action: 'handleDecline()'
            }
        ];

        showAlert('info', 'Terms Updated', 'Our terms of service have been updated. Please review and accept the new terms.', {
            actions: actions,
            persistent: true
        });
    }

    function handleAccept() {
        clearAllAlerts();
        showToast('success', 'Terms accepted successfully!', 3000);
    }

    function handleDecline() {
        clearAllAlerts();
        showToast('info', 'Terms declined', 2000);
    }

    function showPersistentAlert() {
        showAlert('warning', 'Persistent Alert', 'This alert will not auto-dismiss. You need to close it manually.', {
            persistent: true
        });
    }

    function showMultipleAlerts() {
        const alerts = [{
                type: 'info',
                title: 'First Alert',
                message: 'This is the first alert message.'
            },
            {
                type: 'success',
                title: 'Second Alert',
                message: 'This is the second alert message.'
            },
            {
                type: 'warning',
                title: 'Third Alert',
                message: 'This is the third alert message.'
            }
        ];

        alerts.forEach((alert, index) => {
            setTimeout(() => {
                showAlert(alert.type, alert.title, alert.message);
            }, index * 1000);
        });
    }

    function showPositionedAlert(position) {
        const alert = document.createElement('div');
        alert.className = `alert alert-info alert-positioned alert-${position}`;
        alert.setAttribute('role', 'alert');

        alert.innerHTML = `
        <div class="alert-icon">
            <i class="bi bi-info-circle"></i>
        </div>
        <div class="alert-content">
            <div class="alert-title">Positioned Alert</div>
            <div class="alert-message">This alert is positioned at the ${position} of the screen.</div>
        </div>
        <button class="alert-close" onclick="closeAlert(this)">
            <i class="bi bi-x"></i>
        </button>
    `;

        // Add to body for positioning
        document.body.appendChild(alert);

        setTimeout(() => {
            alert.classList.add('alert-show');
        }, 100);

        setTimeout(() => {
            closeAlert(alert);
        }, 5000);
    }

    function handleUpdate() {
        const alert = event.target.closest('.alert');
        closeAlert(alert);
        showToast('info', 'Update process started...', 3000);
    }
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>