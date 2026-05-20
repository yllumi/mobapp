<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()" class="text-dark">
                <i class="bi bi-arrow-left fs-5"></i>
            </a>
        </div>
        <div class="page-title fw-bold">Pagination</div>
        <div class="right"></div>
    </div>

    <div class="app-container px-2">
        <!-- App Capsule -->
        <div id="appCapsule" class="container mt-3 pb-4">

            <!-- 1. Default Pagination -->
            <div class="mb-4">
                <div class="fw-bold py-2 text-primary">Default</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Pagination standar dengan penambahan ikon dan status disabled.</p>
                    <nav aria-label="Default page navigation">
                        <ul class="pagination mb-0 flex-wrap">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="bi bi-chevron-left small me-1"></i>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    Next<i class="bi bi-chevron-right small ms-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- 2. Secondary Pagination -->
            <div class="mb-4">
                <div class="fw-bold mb-2 text-primary">Secondary</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Menggunakan warna tema sekunder untuk nuansa lebih kalem.</p>
                    <nav aria-label="Secondary page navigation">
                        <ul class="pagination mb-0 flex-wrap">
                            <li class="page-item">
                                <a class="page-link text-secondary" href="#" aria-label="Previous">
                                    <i class="bi bi-chevron-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link text-secondary" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link bg-secondary border-secondary text-white">2</span>
                            </li>
                            <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link text-secondary" href="#" aria-label="Next">
                                    <i class="bi bi-chevron-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- 3. Mixed Colors Pagination -->
            <div class="mb-4">
                <div class="fw-bold mb-2 text-primary">Colors</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Kombinasi utilitas warna background (<code>.bg-*</code>) untuk
                        setiap item.</p>
                    <nav aria-label="Colored page navigation">
                        <ul class="pagination gap-1 mb-0 flex-wrap">
                            <li class="page-item">
                                <a class="page-link bg-danger text-white border-danger rounded" href="#">
                                    <i class="bi bi-arrow-left-short"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link bg-secondary text-white border-secondary rounded"
                                    href="#">1</a></li>
                            <li class="page-item"><a class="page-link bg-success text-white border-success rounded"
                                    href="#">2</a></li>
                            <li class="page-item"><a class="page-link bg-warning text-dark border-warning rounded"
                                    href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link bg-dark text-white border-dark rounded" href="#">
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- 4. Rounded Pagination -->
            <div class="mb-4">
                <div class="fw-bold mb-2 text-primary">Rounded</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Menggunakan <code>.rounded-circle</code> dan <code>.gap-2</code>
                        agar bentuk lingkaran sempurna terpisah.</p>
                    <nav aria-label="Rounded page navigation">
                        <ul class="pagination gap-2 mb-0 flex-wrap">
                            <li class="page-item">
                                <a class="page-link rounded-pill px-3 shadow-sm border-0" href="#">Prev</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link rounded-circle d-flex align-items-center justify-content-center shadow-sm border-0"
                                    style="width:40px; height:40px;" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-circle d-flex align-items-center justify-content-center shadow-sm border-0 text-dark"
                                    style="width:40px; height:40px;" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-circle d-flex align-items-center justify-content-center shadow-sm border-0 text-dark"
                                    style="width:40px; height:40px;" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill px-3 shadow-sm border-0" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- 5. Square Pagination -->
            <div class="mb-4">
                <div class="fw-bold mb-2 text-primary">Square</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Menggunakan <code>.rounded-0</code> untuk desain kotak bersudut
                        tajam.</p>
                    <nav aria-label="Square page navigation">
                        <ul class="pagination mb-0 flex-wrap shadow-sm w-auto d-inline-flex">
                            <li class="page-item">
                                <a class="page-link rounded-0 text-dark" href="#" aria-label="Previous">
                                    <i class="bi bi-caret-left-fill"></i>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a
                                    class="page-link rounded-0 bg-dark border-dark" href="#">1</a></li>
                            <li class="page-item"><a class="page-link rounded-0 text-dark" href="#">2</a></li>
                            <li class="page-item"><a class="page-link rounded-0 text-dark" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0 text-dark" href="#" aria-label="Next">
                                    <i class="bi bi-caret-right-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- 6. iOS Style Pagination -->
            <div class="mb-4">
                <div class="fw-bold mb-2 text-primary">iOS Style (Minimalist)</div>
                <div class="card border-0 shadow-sm rounded-3 p-3 bg-white">
                    <p class="text-muted small mb-3">Gaya tanpa border dengan indikator halaman aktif yang kontras
                        lembut.</p>
                    <nav aria-label="iOS Page navigation">
                        <ul class="pagination gap-2 mb-0 justify-content-center align-items-center">
                            <li class="page-item">
                                <a class="page-link border-0 bg-transparent text-primary p-2" href="#"
                                    aria-label="Previous">
                                    <i class="bi bi-chevron-left fs-5"></i>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link border-0 d-flex align-items-center justify-content-center rounded-3 bg-light text-dark fw-bold shadow-sm"
                                    style="width: 38px; height: 38px;" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 d-flex align-items-center justify-content-center rounded-3 text-primary fw-semibold"
                                    style="width: 38px; height: 38px; background: transparent;" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 d-flex align-items-center justify-content-center rounded-3 text-primary fw-semibold"
                                    style="width: 38px; height: 38px; background: transparent;" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border-0 bg-transparent text-primary p-2" href="#"
                                    aria-label="Next">
                                    <i class="bi bi-chevron-right fs-5"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
        <!-- * App Capsule -->
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>