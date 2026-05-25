<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Images</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <!-- App Capsule -->
        <div id="appCapsule" class="container mt-3">

            <!-- Start Using -->
            <div class="mb-4">
                <div class="fw-bold mb-2">Start using</div>
                <div class="border rounded p-3 bg-white">
                    Use Bootstrap image utilities to style and scale your images easily.
                </div>
            </div>

            <!-- Section: Border Radius -->
            <div class="mb-4">
                <div class="fw-bold mb-2">Border radius</div>
                <div class="border rounded p-3 bg-white">
                    <p class="text-muted small">Add border radius utilities and customize the images.</p>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="https://placehold.co/55?text=img" alt="image"
                            style="width: 48px; height: 48px; object-fit: cover;">
                        <span>default (Square)</span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <!-- .rounded-3 memberikan lengkungan border khas modern -->
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded-3"
                            style="width: 48px; height: 48px; object-fit: cover;">
                        <span><code>.rounded-3</code></span>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- .rounded-circle mengubah gambar menjadi bulat sempurna -->
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded-circle"
                            style="width: 48px; height: 48px; object-fit: cover;">
                        <span><code>.rounded-circle</code></span>
                    </div>
                </div>
            </div>

            <!-- Section: Styling (Menggunakan CSS Filter Standard) -->
            <div class="mb-4">
                <div class="fw-bold mb-2">Styling</div>
                <div class="border rounded p-3 bg-white">
                    <p class="text-muted small">Style your images by adding built-in styles or filters.</p>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="https://placehold.co/55?text=img" alt="image"
                            style="width: 48px; height: 48px; object-fit: cover; filter: grayscale(100%);">
                        <span><code>filter: grayscale(100%)</code></span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="https://placehold.co/55?text=img" alt="image"
                            style="width: 48px; height: 48px; object-fit: cover; filter: sepia(100%);">
                        <span><code>filter: sepia(100%)</code></span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="https://placehold.co/55?text=img" alt="image"
                            style="width: 48px; height: 48px; object-fit: cover; filter: blur(2px);">
                        <span><code>filter: blur(2px)</code></span>
                    </div>

                    <div class="d-flex align-items-center gap-2 mb-3">
                        <img src="https://placehold.co/55?text=img" alt="image"
                            style="width: 48px; height: 48px; object-fit: cover; transform: scaleX(-1);">
                        <span><code>transform: scaleX(-1)</code> (Mirrored)</span>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- .shadow-sm memberikan efek bayangan lembut bawaan Bootstrap -->
                        <img src="https://placehold.co/55?text=img" alt="image" class="shadow-sm"
                            style="width: 48px; height: 48px; object-fit: cover;">
                        <span><code>.shadow-sm</code></span>
                    </div>
                </div>
            </div>

            <!-- Section: Sizing -->
            <div class="mb-4">
                <div class="fw-bold mb-2">Sizing</div>
                <div class="border rounded p-3 bg-white">
                    <p class="text-muted small">Easily size the images with fixed width or percentage utilities.</p>

                    <!-- Fixed Sizes (Piksel Tetap) -->
                    <div class="mb-3">
                        <div class="text-muted small">16px</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded"
                            style="width: 16px; height: 16px; object-fit: cover;">
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">36px</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded"
                            style="width: 36px; height: 36px; object-fit: cover;">
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">48px</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded"
                            style="width: 48px; height: 48px; object-fit: cover;">
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">100px</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded"
                            style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                    <div class="mb-4">
                        <div class="text-muted small">160px</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="rounded"
                            style="width: 160px; height: 160px; object-fit: cover;">
                    </div>

                    <hr>

                    <!-- Responsive / Percentage Sizes (Persentase Lebar) -->
                    <div class="mb-3">
                        <div class="text-muted small"><code>.img-fluid</code> (100% width)</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="img-fluid rounded">
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small"><code>.w-75</code> (75% width)</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="w-75 rounded">
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small"><code>.w-50</code> (50% width)</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="w-50 rounded">
                    </div>
                    <div>
                        <div class="text-muted small"><code>.w-25</code> (25% width)</div>
                        <img src="https://placehold.co/55?text=img" alt="image" class="w-25 rounded">
                    </div>
                </div>
            </div>

        </div>
        <!-- * App Capsule -->
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>