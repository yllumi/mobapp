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
            Preloader
        </div>

        <div class="right">
        </div>
    </div>

    <!-- CONTENT -->
    <div class="app-container px-0">

        <!-- BORDER SPINNER -->
        <div class="section mt-2">

            <div class="section-title px-3 mb-2 fw-semibold">
                Border Spinner
            </div>

            <div class="card border-0 rounded-0">

                <div class="card-body d-flex flex-wrap gap-3">

                    <div class="spinner-border text-primary" role="status"></div>

                    <div class="spinner-border text-secondary" role="status"></div>

                    <div class="spinner-border text-success" role="status"></div>

                    <div class="spinner-border text-danger" role="status"></div>

                    <div class="spinner-border text-warning" role="status"></div>

                    <div class="spinner-border text-info" role="status"></div>

                    <div class="spinner-border text-dark" role="status"></div>

                </div>

            </div>

        </div>

        <!-- GROWING SPINNER -->
        <div class="section mt-3">

            <div class="section-title px-3 mb-2 fw-semibold">
                Growing Spinner
            </div>

            <div class="card border-0 rounded-0">

                <div class="card-body d-flex flex-wrap gap-3">

                    <div class="spinner-grow text-primary" role="status"></div>

                    <div class="spinner-grow text-secondary" role="status"></div>

                    <div class="spinner-grow text-success" role="status"></div>

                    <div class="spinner-grow text-danger" role="status"></div>

                    <div class="spinner-grow text-warning" role="status"></div>

                    <div class="spinner-grow text-info" role="status"></div>

                    <div class="spinner-grow text-dark" role="status"></div>

                </div>

            </div>

        </div>

        <!-- BUTTON SPINNER -->
        <div class="section mt-3 mb-5">

            <div class="section-title px-3 mb-2 fw-semibold">
                Button Spinner
            </div>

            <div class="card border-0 rounded-0">

                <div class="card-body">

                    <!-- PRIMARY -->
                    <div class="d-flex flex-wrap gap-2 mb-3">

                        <button class="btn btn-primary" disabled>
                            <span class="spinner-border spinner-border-sm"></span>
                        </button>

                        <button class="btn btn-primary" disabled>
                            <span class="spinner-border spinner-border-sm me-1"></span>
                            Loading...
                        </button>

                        <button class="btn btn-outline-primary" disabled>
                            <span class="spinner-border spinner-border-sm me-1"></span>
                            Loading...
                        </button>

                    </div>

                    <!-- ICON BUTTON -->
                    <div class="mb-4">

                        <button class="btn btn-outline-primary" disabled>
                            <span class="spinner-border spinner-border-sm me-1"></span>

                            <i class="bi bi-image me-1"></i>

                            Images are loading...
                        </button>

                    </div>

                    <!-- COLORS -->
                    <div class="d-flex flex-column gap-3">

                        <div>
                            <button class="btn btn-secondary" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-secondary" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                        <div>
                            <button class="btn btn-success" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-success" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                        <div>
                            <button class="btn btn-danger" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-danger" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                        <div>
                            <button class="btn btn-warning text-white" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-warning text-white" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                        <div>
                            <button class="btn btn-info text-white" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-info text-white" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                        <div>
                            <button class="btn btn-dark" disabled>
                                <span class="spinner-border spinner-border-sm"></span>
                            </button>

                            <button class="btn btn-dark" disabled>
                                <span class="spinner-border spinner-border-sm me-1"></span>
                                Loading...
                            </button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>