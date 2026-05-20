<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <!-- HEADER -->
    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">
            Progress Bar
        </div>
        <div class="right">
        </div>
    </div>

    <!-- CONTENT -->
    <div class="app-container px-0">

        <!-- =========================
             CIRCLE PROGRESS
        ========================== -->
        <div class="section mt-3">
            <div class="progressbar-title px-3">
                Circle Progress
            </div>
            <div class="card demo-card">
                <div class="card-body">
                    <p class="description">
                        Progress berbentuk lingkaran dengan animasi saat halaman dibuka.
                    </p>
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="progress-circle" data-progress="78">
                                <div class="progress-circle-value">
                                    78%
                                </div>
                                <div class="progress-circle-label">
                                    Orders
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="progress-circle progress-circle-success" data-progress="60">
                                <div class="progress-circle-value">
                                    60%
                                </div>
                                <div class="progress-circle-label">
                                    Success
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="progress-circle progress-circle-danger" data-progress="35">
                                <div class="progress-circle-value">
                                    35%
                                </div>
                                <div class="progress-circle-label">
                                    Pending
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================
             DEFAULT PROGRESS
        ========================== -->
        <div class="section mt-3">
            <div class="progressbar-title px-3">
                Default Progress
            </div>
            <div class="card demo-card">
                <div class="card-body">
                    <p class="description">
                        Progress bar standar Bootstrap.
                    </p>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 25%">
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 50%">
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar" style="width: 75%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================
             LABEL PROGRESS
        ========================== -->
        <div class="section mt-3">
            <div class="progressbar-title px-3">Progress With Label</div>
            <div class="card demo-card">
                <div class="card-body">
                    <p class="description">Progress dengan label persentase.</p>
                    <div class="progress progress-lg">
                        <div class="progress-bar fw-semibold" style="width: 65%">65%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================
             COLORED PROGRESS
        ========================== -->
        <div class="section mt-3">
            <div class="progressbar-title px-3">
                Colored Progress
            </div>
            <div class="card demo-card">
                <div class="card-body">
                    <p class="description">
                        Progress bar dengan berbagai warna Bootstrap.
                    </p>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" style="width: 25%">
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" style="width: 50%">
                        </div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width: 75%">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========================
             MULTIPLE PROGRESS
        ========================== -->
        <div class="section mt-3 mb-5">
            <div class="progressbar-title px-3">
                Multiple Progress
            </div>
            <div class="card demo-card">
                <div class="card-body">
                    <p class="description">
                        Beberapa progress dalam satu bar.
                    </p>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: 20%">
                            20%
                        </div>
                        <div class="progress-bar bg-success" style="width: 35%">
                            35%
                        </div>
                        <div class="progress-bar bg-info" style="width: 25%">
                            25%
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-circle-fill text-primary me-2"></i>
                            Primary Data
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>
                            Success Data
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-circle-fill text-info me-2"></i>
                            Info Data
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>

</div>

<?php include __DIR__ . '/../partials/footer.php' ?>