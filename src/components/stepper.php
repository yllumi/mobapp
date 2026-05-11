<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Stepper</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <!-- ═══════════ ANDROID PANEL ═══════════ -->
        <div id="panel-android" class="panel active">
            <div class="phone-frame">
                <div class="screen android-screen">

                    <!-- Content -->
                    <div class="a-content">

                        <!-- Sizing -->
                        <div class="fw-semibold p-3">Sizing</div>
                        <div class="a-block">
                            <div class="a-row">
                                <span class="a-label">Small</span>
                                <div class="stepper-a sm sa-primary" data-val="1">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">1</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                            </div>
                            <div class="a-row">
                                <span class="a-label">Default</span>
                                <div class="stepper-a sa-primary" data-val="1">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">1</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                            </div>
                            <div class="a-row">
                                <span class="a-label">Large</span>
                                <div class="stepper-a lg sa-primary" data-val="1">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">1</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                            </div>
                        </div>

                        <!-- Colors Solid -->
                        <div class="fw-semibold p-3">Colors</div>
                        <div class="a-grid">
                            <div class="a-grid-item">
                                <div class="stepper-a sa-primary" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Primary</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-secondary" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Secondary</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-success" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Success</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-danger" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Danger</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-warning" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Warning</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-info" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Info</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-dark" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Dark</small>
                            </div>
                        </div>

                        <!-- Colors Outline -->
                        <div class="fw-semibold p-3">Outline</div>
                        <div class="a-grid" style="margin-bottom: 8px;">
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-primary" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Primary</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-secondary" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Secondary</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-success" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Success</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-danger" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Danger</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-warning" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Warning</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-info" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Info</small>
                            </div>
                            <div class="a-grid-item">
                                <div class="stepper-a sa-outline-dark" data-val="0">
                                    <div class="s-btn" onclick="step(this,-1)">−</div>
                                    <div class="s-val">0</div>
                                    <div class="s-btn" onclick="step(this,1)">+</div>
                                </div>
                                <small>Dark</small>
                            </div>
                        </div>

                    </div><!-- /.a-content -->

                </div><!-- /.screen -->
            </div><!-- /.phone-frame -->
        </div><!-- /#panel-android -->
    </div>

    <script>
        /* ── Universal Stepper ── */
        function step(btn, dir) {
            const parent = btn.closest('[data-val]');
            const val = parseInt(parent.dataset.val) + dir;
            parent.dataset.val = val;
            parent.querySelector('.s-val').textContent = val;
        }
    </script>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>