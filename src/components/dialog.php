<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Dialog Box</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-2">

        <!-- Basic Dialogs -->
        <div class="section-title">Basic Dialogs</div>
        
        <div class="button-group">
            <button class="btn btn-primary" onclick="showConfirmDialog()">
                Confirm Dialog
            </button>
            <button class="btn btn-info" onclick="showInfoDialog()">
                Info Dialog
            </button>
            <button class="btn btn-warning" onclick="showWarningDialog()">
                Warning Dialog
            </button>
            <button class="btn btn-danger" onclick="showErrorDialog()">
                Error Dialog
            </button>
        </div>

        <!-- Input Dialogs -->
        <div class="section-title">Input Dialogs</div>
        
        <div class="button-group">
            <button class="btn btn-success" onclick="showPromptDialog()">
                Text Input
            </button>
            <button class="btn btn-primary" onclick="showFormDialog()">
                Form Dialog
            </button>
            <button class="btn btn-secondary" onclick="showSelectDialog()">
                Select Dialog
            </button>
        </div>

        <!-- Custom Dialogs -->
        <div class="section-title">Custom Dialogs</div>
        
        <div class="button-group">
            <button class="btn btn-outline-primary" onclick="showCustomDialog()">
                Custom Content
            </button>
            <button class="btn btn-outline-success" onclick="showImageDialog()">
                Image Dialog
            </button>
            <button class="btn btn-outline-warning" onclick="showLoadingDialog()">
                Loading Dialog
            </button>
        </div>

        <!-- Size Variants -->
        <div class="section-title">Size Variants</div>
        
        <div class="button-group">
            <button class="btn btn-light" onclick="showSmallDialog()">
                Small Dialog
            </button>
            <button class="btn btn-light" onclick="showLargeDialog()">
                Large Dialog
            </button>
            <button class="btn btn-light" onclick="showFullScreenDialog()">
                Fullscreen
            </button>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<!-- Dialog Overlay -->
<div id="dialog-overlay" class="dialog-overlay" onclick="closeDialog()"></div>

<!-- Dialog Container -->
<div id="dialog-container" class="dialog-container"></div>

<script>
// Dialog Examples - these are specific to this page and use the global functions from main.js

function showConfirmDialog() {
    showDialog({
        title: 'Confirm Action',
        content: '<p>Are you sure you want to delete this item? This action cannot be undone.</p>',
        type: 'confirm',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Delete',
                class: 'btn-danger',
                action: 'handleConfirm()'
            }
        ]
    });
}

function handleConfirm() {
    closeDialog();
    showToast('success', 'Item has been deleted successfully!', 3000);
}

function showInfoDialog() {
    showDialog({
        title: 'Information',
        content: `
            <div class="dialog-icon dialog-icon-info">
                <i class="bi bi-info-circle"></i>
            </div>
            <p>This is an informational dialog. It provides important details about the current operation or system status.</p>
        `,
        type: 'info',
        buttons: [
            {
                text: 'Got it',
                class: 'btn-primary',
                action: 'closeDialog()'
            }
        ]
    });
}

function showWarningDialog() {
    showDialog({
        title: 'Warning',
        content: `
            <div class="dialog-icon dialog-icon-warning">
                <i class="bi bi-exclamation-triangle"></i>
            </div>
            <p>This action may have unintended consequences. Please review your settings before proceeding.</p>
        `,
        type: 'warning',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Proceed',
                class: 'btn-warning',
                action: 'closeDialog()'
            }
        ]
    });
}

function showErrorDialog() {
    showDialog({
        title: 'Error',
        content: `
            <div class="dialog-icon dialog-icon-error">
                <i class="bi bi-exclamation-circle"></i>
            </div>
            <p><strong>An error occurred:</strong></p>
            <p>Failed to connect to the server. Please check your internet connection and try again.</p>
        `,
        type: 'error',
        buttons: [
            {
                text: 'Try Again',
                class: 'btn-danger',
                action: 'closeDialog()'
            }
        ]
    });
}

function showPromptDialog() {
    showDialog({
        title: 'Enter Your Name',
        content: `
            <div class="form-group">
                <label for="userName">Name:</label>
                <input type="text" id="userName" class="form-control" placeholder="Enter your name">
            </div>
        `,
        type: 'prompt',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Submit',
                class: 'btn-primary',
                action: 'handlePrompt()'
            }
        ]
    });
}

function handlePrompt() {
    const name = document.getElementById('userName').value;
    if (name.trim()) {
        closeDialog();
        showToast('success', `Hello, ${name}!`, 3000);
    } else {
        showToast('error', 'Please enter your name', 2000);
    }
}

function showFormDialog() {
    showDialog({
        title: 'User Information',
        content: `
            <form id="userForm">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" class="form-control">
                </div>
            </form>
        `,
        type: 'form',
        size: 'large',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Save',
                class: 'btn-success',
                action: 'handleFormSubmit()'
            }
        ]
    });
}

function handleFormSubmit() {
    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;
    
    if (fullName.trim() && email.trim()) {
        closeDialog();
        showToast('success', 'User information saved successfully!', 3000);
    } else {
        showToast('error', 'Please fill in all required fields', 2000);
    }
}

function showSelectDialog() {
    showDialog({
        title: 'Choose an Option',
        content: `
            <div class="form-group">
                <label for="colorSelect">Select your favorite color:</label>
                <select id="colorSelect" class="form-control">
                    <option value="">Choose a color...</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="yellow">Yellow</option>
                    <option value="purple">Purple</option>
                </select>
            </div>
        `,
        type: 'select',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Select',
                class: 'btn-primary',
                action: 'handleSelect()'
            }
        ]
    });
}

function handleSelect() {
    const color = document.getElementById('colorSelect').value;
    if (color) {
        closeDialog();
        showToast('info', `You selected: ${color}`, 3000);
    } else {
        showToast('warning', 'Please select a color', 2000);
    }
}

function showCustomDialog() {
    showDialog({
        title: 'Custom Content',
        content: `
            <div class="custom-dialog-content">
                <div class="text-center mb-3">
                    <div class="custom-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>Rate Our App</h4>
                    <p>How would you rate your experience?</p>
                </div>
                <div class="rating-stars">
                    <i class="bi bi-star" onclick="setRating(1)"></i>
                    <i class="bi bi-star" onclick="setRating(2)"></i>
                    <i class="bi bi-star" onclick="setRating(3)"></i>
                    <i class="bi bi-star" onclick="setRating(4)"></i>
                    <i class="bi bi-star" onclick="setRating(5)"></i>
                </div>
            </div>
        `,
        type: 'custom',
        buttons: [
            {
                text: 'Later',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Submit',
                class: 'btn-primary',
                action: 'submitRating()'
            }
        ]
    });
}

let selectedRating = 0;

function setRating(rating) {
    selectedRating = rating;
    const stars = document.querySelectorAll('.rating-stars i');
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.remove('bi-star');
            star.classList.add('bi-star-fill');
        } else {
            star.classList.remove('bi-star-fill');
            star.classList.add('bi-star');
        }
    });
}

function submitRating() {
    if (selectedRating > 0) {
        closeDialog();
        showToast('success', `Thank you for rating us ${selectedRating} stars!`, 3000);
    } else {
        showToast('warning', 'Please select a rating', 2000);
    }
}

function showImageDialog() {
    showDialog({
        title: 'Image Preview',
        content: `
            <div class="text-center">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='150' viewBox='0 0 200 150'%3E%3Crect width='200' height='150' fill='%23f0f0f0'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23999'%3ESample Image%3C/text%3E%3C/svg%3E" alt="Sample" class="img-fluid">
                <p class="mt-3">This is a sample image dialog. You can display any image content here.</p>
            </div>
        `,
        type: 'image',
        size: 'large',
        buttons: [
            {
                text: 'Close',
                class: 'btn-primary',
                action: 'closeDialog()'
            }
        ]
    });
}

function showLoadingDialog() {
    showDialog({
        title: 'Processing',
        content: `
            <div class="text-center">
                <div class="loading-spinner">
                    <div class="spinner"></div>
                </div>
                <p class="mt-3">Please wait while we process your request...</p>
            </div>
        `,
        type: 'loading',
        dismissible: false,
        buttons: []
    });
    
    // Auto close after 3 seconds
    setTimeout(() => {
        closeDialog();
        showToast('success', 'Processing completed!', 2000);
    }, 3000);
}

function showSmallDialog() {
    showDialog({
        title: 'Small Dialog',
        content: '<p>This is a small dialog window.</p>',
        size: 'small',
        buttons: [
            {
                text: 'OK',
                class: 'btn-primary',
                action: 'closeDialog()'
            }
        ]
    });
}

function showLargeDialog() {
    showDialog({
        title: 'Large Dialog',
        content: `
            <p>This is a large dialog with more content space.</p>
            <p>You can put more detailed information, forms, or other content here that requires more space.</p>
            <div class="alert alert-info">
                <i class="bi bi-info-circle"></i>
                This dialog has a larger width to accommodate more content.
            </div>
        `,
        size: 'large',
        buttons: [
            {
                text: 'Close',
                class: 'btn-primary',
                action: 'closeDialog()'
            }
        ]
    });
}

function showFullScreenDialog() {
    showDialog({
        title: 'Fullscreen Dialog',
        content: `
            <div class="fullscreen-content">
                <p>This dialog takes up the full screen on mobile devices.</p>
                <p>It's perfect for forms, detailed views, or any content that needs maximum space.</p>
                
                <div class="form-group">
                    <label>Sample Form Content:</label>
                    <input type="text" class="form-control" placeholder="Enter text">
                </div>
                
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="4" placeholder="Enter description"></textarea>
                </div>
                
                <div class="alert alert-info">
                    <i class="bi bi-phone"></i>
                    On mobile devices, this dialog will use the full screen for better usability.
                </div>
            </div>
        `,
        size: 'fullscreen',
        buttons: [
            {
                text: 'Cancel',
                class: 'btn-secondary',
                action: 'closeDialog()'
            },
            {
                text: 'Save',
                class: 'btn-primary',
                action: 'closeDialog()'
            }
        ]
    });
}
</script>

<?php include __DIR__ . '/../partials/footer.php' ?>