<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">
    <div class="app-container px-2">
        <div id="components">

            <div class="app-header">
                <div class="left">
                    <a href="javascript:void()" onclick="history.back()">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                </div>
                <div class="page-title">Placeholders</div>
                <div class="right">
                </div>
            </div>

            <div class="app-container px-2">
                <!-- ===== Card Skeleton Example ===== -->
                <div class="section-header">
                    <h5>Card Skeleton Loaders</h5>
                    <p>Animasi loading untuk kartu konten</p>
                </div>

                <div class="row g-3 mb-4">
                    <!-- Loading Card -->
                    <div class="col-md-6">
                        <div class="position-relative">
                            <div class="skeleton-card">
                                <div class="skeleton-image placeholder-glow"></div>
                                <div class="skeleton-body placeholder-glow">
                                    <div class="skeleton-line text" style="width: 45%;"></div>
                                    <div class="skeleton-line title"></div>
                                    <div class="skeleton-line text"></div>
                                    <div class="skeleton-line text" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Loaded Card -->
                    <div class="col-md-6">
                        <div class="card skeleton-card">
                            <img src="https://placehold.co/400x200?text=Loaded" class="card-img-top" alt="loaded"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <small class="text-muted">Subtitle</small>
                                <h5 class="card-title mt-1">Card Title</h5>
                                <p class="card-text text-muted">Konten sudah termuat dengan sempurna. Informasi lengkap
                                    ditampilkan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Demo Controls ===== -->
                <div class="demo-controls">
                    <button class="btn btn-primary btn-sm" onclick="simulateLoading()">Simulasi Loading</button>
                    <button class="btn btn-outline-secondary btn-sm" onclick="clearLoading()">Selesai Loading</button>
                </div>

                <!-- ===== List Skeleton Example ===== -->
                <div class="section-header mt-4">
                    <h5>List Skeleton Loaders</h5>
                    <p>Placeholder untuk daftar item dengan avatar</p>
                </div>

                <div class="row g-3 mb-4">
                    <!-- Loading List -->
                    <div class="col-md-6">
                        <div class="card skeleton-card p-3">
                            <h6 class="mb-3">Loading...</h6>
                            <div class="placeholder-glow">
                                <div class="skeleton-list-item">
                                    <div class="skeleton-avatar"></div>
                                    <div class="skeleton-list-content">
                                        <div class="skeleton-list-text title"></div>
                                        <div class="skeleton-list-text"></div>
                                    </div>
                                </div>
                                <div class="skeleton-list-item">
                                    <div class="skeleton-avatar"></div>
                                    <div class="skeleton-list-content">
                                        <div class="skeleton-list-text title"></div>
                                        <div class="skeleton-list-text"></div>
                                    </div>
                                </div>
                                <div class="skeleton-list-item">
                                    <div class="skeleton-avatar"></div>
                                    <div class="skeleton-list-content">
                                        <div class="skeleton-list-text title"></div>
                                        <div class="skeleton-list-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Loaded List -->
                    <div class="col-md-6">
                        <div class="card skeleton-card p-3">
                            <h6 class="mb-3">Loaded</h6>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center px-0">
                                    <img src="https://placehold.co/48x48?text=User" class="rounded"
                                        style="width: 48px; height: 48px; object-fit: cover; margin-right: 12px;">
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold" style="font-size: 14px;">John Doe</div>
                                        <small class="text-muted">@johndoe</small>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0">
                                    <img src="https://placehold.co/48x48?text=User" class="rounded"
                                        style="width: 48px; height: 48px; object-fit: cover; margin-right: 12px;">
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold" style="font-size: 14px;">Jane Smith</div>
                                        <small class="text-muted">@janesmith</small>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center px-0">
                                    <img src="https://placehold.co/48x48?text=User" class="rounded"
                                        style="width: 48px; height: 48px; object-fit: cover; margin-right: 12px;">
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold" style="font-size: 14px;">Mike Johnson</div>
                                        <small class="text-muted">@mikej</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Animation Types ===== -->
                <div class="section-header mt-4">
                    <h5>Jenis Animasi</h5>
                    <p>Pilihan animasi untuk placeholder</p>
                </div>

                <div class="card skeleton-card p-3 mb-4">
                    <div class="mb-3">
                        <small class="text-muted">Glow Animation (.placeholder-glow)</small>
                        <div class="mt-2 placeholder-glow">
                            <span class="placeholder col-12 mb-2" style="height: 40px; border-radius: 8px;"></span>
                            <span class="placeholder col-8 mb-2" style="height: 16px; border-radius: 4px;"></span>
                            <span class="placeholder col-10" style="height: 16px; border-radius: 4px;"></span>
                        </div>
                    </div>

                    <hr>

                    <div class="mb-3">
                        <small class="text-muted">Wave Animation (.placeholder-wave)</small>
                        <div class="mt-2 placeholder-wave">
                            <span class="placeholder col-12 mb-2"
                                style="height: 40px; border-radius: 8px; background-color: transparent;"></span>
                            <span class="placeholder col-8 mb-2"
                                style="height: 16px; border-radius: 4px; background-color: transparent;"></span>
                            <span class="placeholder col-10"
                                style="height: 16px; border-radius: 4px; background-color: transparent;"></span>
                        </div>
                    </div>

                    <hr>

                    <div>
                        <small class="text-muted">Bootstrap Default (.placeholder)</small>
                        <div class="mt-2">
                            <span class="placeholder col-12 mb-2" style="height: 40px; border-radius: 8px;"></span>
                            <span class="placeholder col-8 mb-2" style="height: 16px; border-radius: 4px;"></span>
                            <span class="placeholder col-10" style="height: 16px; border-radius: 4px;"></span>
                        </div>
                    </div>
                </div>

                <!-- ===== Color Variations ===== -->
                <div class="section-header mt-4">
                    <h5>Variasi Warna</h5>
                    <p>Placeholder dengan berbagai warna background</p>
                </div>

                <div class="card skeleton-card p-3 mb-4">
                    <div class="placeholder-glow">
                        <div class="color-grid">
                            <div class="color-item">
                                <div class="color-sample" style="background-color: #e0e0e0;"></div>
                                <span class="color-label">Default</span>
                            </div>
                            <div class="color-item">
                                <div class="color-sample"
                                    style="background: linear-gradient(90deg, #e3f2fd 25%, #bbdefb 50%, #e3f2fd 75%); background-size: 200% 100%; animation: shimmer 2s infinite;">
                                </div>
                                <span class="color-label">Primary</span>
                            </div>
                            <div class="color-item">
                                <div class="color-sample"
                                    style="background: linear-gradient(90deg, #f3e5f5 25%, #e1bee7 50%, #f3e5f5 75%); background-size: 200% 100%; animation: shimmer 2s infinite;">
                                </div>
                                <span class="color-label">Purple</span>
                            </div>
                            <div class="color-item">
                                <div class="color-sample"
                                    style="background: linear-gradient(90deg, #fce4ec 25%, #f8bbd0 50%, #fce4ec 75%); background-size: 200% 100%; animation: shimmer 2s infinite;">
                                </div>
                                <span class="color-label">Pink</span>
                            </div>
                            <div class="color-item">
                                <div class="color-sample"
                                    style="background: linear-gradient(90deg, #c8e6c9 25%, #a5d6a7 50%, #c8e6c9 75%); background-size: 200% 100%; animation: shimmer 2s infinite;">
                                </div>
                                <span class="color-label">Green</span>
                            </div>
                            <div class="color-item">
                                <div class="color-sample"
                                    style="background: linear-gradient(90deg, #ffecb3 25%, #ffe082 50%, #ffecb3 75%); background-size: 200% 100%; animation: shimmer 2s infinite;">
                                </div>
                                <span class="color-label">Amber</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Size Variations ===== -->
                <div class="section-header mt-4">
                    <h5>Variasi Ukuran</h5>
                    <p>Placeholder dengan berbagai ukuran</p>
                </div>

                <div class="card skeleton-card p-3 mb-4">
                    <div class="placeholder-glow">
                        <div class="size-item">
                            <div class="size-label">Extra Large (.placeholder-lg)</div>
                            <span class="placeholder col-12 placeholder-lg" style="border-radius: 8px;"></span>
                        </div>

                        <div class="size-item">
                            <div class="size-label">Large (default)</div>
                            <span class="placeholder col-12" style="height: 40px; border-radius: 8px;"></span>
                        </div>

                        <div class="size-item">
                            <div class="size-label">Small (.placeholder-sm)</div>
                            <span class="placeholder col-12 placeholder-sm" style="border-radius: 6px;"></span>
                        </div>

                        <div class="size-item">
                            <div class="size-label">Extra Small (.placeholder-xs)</div>
                            <span class="placeholder col-12" style="height: 8px; border-radius: 4px;"></span>
                        </div>
                    </div>
                </div>

                <!-- ===== Width Utilities ===== -->
                <div class="section-header mt-4">
                    <h5>Utility Width</h5>
                    <p>Kontrol lebar dengan Bootstrap utilities</p>
                </div>

                <div class="card skeleton-card p-3 mb-4">
                    <div class="placeholder-glow">
                        <span class="placeholder col-12 mb-2" style="height: 20px;"></span>
                        <span class="placeholder col-11 mb-2" style="height: 16px;"></span>
                        <span class="placeholder col-10 mb-2" style="height: 16px;"></span>
                        <span class="placeholder col-9 mb-2" style="height: 16px;"></span>
                        <span class="placeholder col-8 mb-2" style="height: 16px;"></span>
                        <span class="placeholder col-6" style="height: 16px;"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Demo functionality
        function simulateLoading() {
            const allCards = document.querySelectorAll('.skeleton-card');
            allCards.forEach(card => {
                card.style.opacity = '0.5';
                card.style.pointerEvents = 'none';
            });

            showToast('info', 'Simulasi loading dimulai...', 2000);

            setTimeout(() => {
                clearLoading();
            }, 3000);
        }

        function clearLoading() {
            const allCards = document.querySelectorAll('.skeleton-card');
            allCards.forEach(card => {
                card.style.opacity = '1';
                card.style.pointerEvents = 'auto';
            });

            showToast('success', 'Loading selesai!', 2000);
        }

        // Initialize toast containers
        document.addEventListener('DOMContentLoaded', function() {
            createToastContainers();
        });
    </script>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>