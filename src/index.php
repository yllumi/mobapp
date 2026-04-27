<?php include __DIR__ . '/partials/header.php' ?>

<style>
    .app-header {
            padding: 1rem;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .app-header .icon {
            font-size: 1.5rem;
            color: #333;
        }
        .page-content {
            padding: 1rem;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .toggle-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .dark-mode-text {
            font-size: 1rem;
            font-weight: bold;
        }
        .discover-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 1rem;
        }
</style>

<?php include __DIR__ . '/partials/sidebar.php' ?>

<div id="homepage">

    <!-- Header -->
    <div class="app-header">
        <i class="bi bi-list icon" id="sidebarToggle" style="cursor:pointer"></i>
        <i class="bi bi-search icon"></i>
    </div>

    <!-- Page Content -->
    <div class="app-container px-3">
        <h1 class="section-title">Discover</h1>
        <p>Welcome to Mobilekit</p>

        <!-- Feature Cards -->
        <div class="row g-2">
            <div class="col-6">
                <div class="card p-2 text-center">
                    <img src="https://mobilekit.bragherstudio.com/view29/assets/img/sample/photo/wide3.jpg" class="img-fluid mx-auto d-block">
                    <p class="mb-0 fw-bold">Progressive web app ready</p>
                </div>
            </div>
            <div class="col-6">
                <div class="card p-2 text-center">
                    <img src="https://mobilekit.bragherstudio.com/view29/assets/img/sample/photo/wide4.jpg" class="img-fluid mx-auto d-block">
                    <p class="mb-0 fw-bold">Reusable components</p>
                </div>
            </div>
        </div>

        <!-- Dark Mode Toggle -->
        <div class="toggle-container mt-3">
            <div>
                <small class="text-muted">DISCOVER</small>
                <p class="dark-mode-text mb-0">Dark Mode</p>
            </div>
            <div>
                <input type="checkbox" class="form-check-input" id="darkModeToggle">
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/partials/bottommenu.php' ?>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const toggleBtn = document.getElementById('sidebarToggle');
    const closeBtn = document.getElementById('sidebarClose');

    function openSidebar() {
        sidebar.classList.add('show');
        overlay.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
        document.body.style.overflow = '';
    }

    toggleBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>

<?php include __DIR__ . '/partials/footer.php' ?>