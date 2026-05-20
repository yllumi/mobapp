<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Dropdown</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <!-- App Capsule -->
        <div id="app-capsule" class="pt-3 pb-2">

            <!-- Basic Example (Menggunakan Card Bootstrap) -->
            <div class="mb-4">
                <div class="text-uppercase fw-bold px-4 mb-2" style="font-size: 0.72rem; letter-spacing: 0.08em;">Basic
                    Example</div>
                <div class="card border-0 shadow-sm mx-3 rounded-4">
                    <div class="card-body p-3">
                        <p class="card-text text-muted small mb-3">Basic dropdown example</p>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle rounded-3 px-3 py-2 fw-semibold small"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Example
                            </button>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-4">
                                <li><a class="dropdown-item py-2" href="#">Copy</a></li>
                                <li><a class="dropdown-item py-2" href="#">Save</a></li>
                                <li>
                                    <hr class="dropdown-divider mx-3">
                                </li>
                                <li><a class="dropdown-item py-2 text-danger" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Alignment -->
            <div class="mb-4">
                <div class="text-uppercase fw-bold px-4 mb-2" style="font-size: 0.72rem; letter-spacing: 0.08em;">Right
                    Alignment</div>
                <div class="card border-0 shadow-sm mx-3 rounded-4">
                    <div class="card-body p-3">
                        <p class="card-text text-muted small mb-3">Align to right with <code>.dropdown-menu-end</code>
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle rounded-3 px-3 py-2 fw-semibold small"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Aligned to Right
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4">
                                <li><a class="dropdown-item py-2" href="#">Copy</a></li>
                                <li><a class="dropdown-item py-2" href="#">Save</a></li>
                                <li>
                                    <hr class="dropdown-divider mx-3">
                                </li>
                                <li><a class="dropdown-item py-2" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- With Icons -->
            <div class="mb-4">
                <div class="text-uppercase fw-bold px-4 mb-2" style="font-size: 0.72rem; letter-spacing: 0.08em;">With
                    Icons</div>
                <div class="card border-0 shadow-sm mx-3 rounded-4">
                    <div class="card-body p-3">
                        <p class="card-text text-muted small mb-3">Use icons with dropdown</p>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle rounded-3 px-3 py-2 fw-semibold small"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Example
                            </button>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-4">
                                <li><a class="dropdown-item py-2" href="#"><i class="bi bi-facebook fs-5"></i>
                                        Facebook</a></li>
                                <li><a class="dropdown-item py-2" href="#"><i class="bi bi-twitter-x fs-5"></i> Twitter
                                        / X</a></li>
                                <li>
                                    <hr class="dropdown-divider mx-3">
                                </li>
                                <li><a class="dropdown-item py-2" href="#"><i class="bi bi-envelope fs-5"></i> Email</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Headers -->
            <div class="mb-4">
                <div class="text-uppercase fw-bold px-4 mb-2" style="font-size: 0.72rem; letter-spacing: 0.08em;">
                    Headers</div>
                <div class="card border-0 shadow-sm mx-3 rounded-4">
                    <div class="card-body p-3">
                        <p class="card-text text-muted small mb-3">Add header with <code>.dropdown-header</code></p>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle rounded-3 px-3 py-2 fw-semibold small"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Example
                            </button>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-4">
                                <li>
                                    <h6 class="dropdown-header text-uppercase fw-bold pt-2 pb-1 px-3"
                                        style="font-size: 0.72rem; letter-spacing: 0.07em;">Dropdown header</h6>
                                </li>
                                <li><a class="dropdown-item py-2" href="#">Copy</a></li>
                                <li><a class="dropdown-item py-2" href="#">Save</a></li>
                                <li>
                                    <hr class="dropdown-divider mx-3">
                                </li>
                                <li><a class="dropdown-item py-2" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Texts -->
            <div class="mb-4">
                <div class="text-uppercase fw-bold px-4 mb-2" style="font-size: 0.72rem; letter-spacing: 0.08em;">Texts
                </div>
                <div class="card border-0 shadow-sm mx-3 rounded-4">
                    <div class="card-body p-3">
                        <p class="card-text text-muted small mb-3">Add free text with <code>.dropdown-text</code></p>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle rounded-3 px-3 py-2 fw-semibold small"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Example
                            </button>
                            <ul class="dropdown-menu border-0 shadow-lg rounded-4">
                                <li>
                                    <div class="px-3 py-2 text-muted small border-bottom mb-1"
                                        style="line-height: 1.55;">
                                        Some example text that's free-flowing within the dropdown menu.
                                    </div>
                                </li>
                                <li><a class="dropdown-item py-2" href="#">Copy</a></li>
                                <li><a class="dropdown-item py-2" href="#">Save</a></li>
                                <li>
                                    <hr class="dropdown-divider mx-3">
                                </li>
                                <li><a class="dropdown-item py-2" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- App Bottom Nav (Menggunakan Posisi Fixed & Flexbox Bootstrap) -->
        <nav class="fixed-bottom bg-white border-top d-flex align-items-center justify-content-around shadow-lg"
            style="height: 64px; z-index: 1000;">
            <a href="#" class="nav-link text-center position-relative py-2">
                <i class="bi bi-house-door-fill fs-3"></i>
            </a>
            <a href="#" class="nav-link text-center position-relative py-2 text-secondary opacity-75">
                <i class="bi bi-grid fs-3"></i>
            </a>
            <a href="#" class="nav-link text-center position-relative py-2 text-secondary opacity-75">
                <i class="bi bi-chat-dots fs-3"></i>
                <span class="badge rounded-pill bg-danger position-absolute top-0 start-50 translate-middle-x ms-3 mt-1"
                    style="font-size: 0.62rem;">5</span>
            </a>
            <a href="#" class="nav-link text-center position-relative py-2 text-secondary opacity-75">
                <i class="bi bi-layers fs-3"></i>
            </a>
            <a href="#" class="nav-link text-center position-relative py-2 text-secondary opacity-75">
                <i class="bi bi-list fs-3"></i>
            </a>
        </nav>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>