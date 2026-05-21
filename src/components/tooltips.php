<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <!-- App Header -->
    <div class="app-header">
        <div class="left">
            <a href="javascript:void(0)" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Tooltips</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Container -->
    <div class="app-container px-2 py-3">

        <!-- OS Styles (Android & iOS) -->
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3 text-muted">OS Specific Styles</h6>
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-success flex-fill" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-custom-class="tooltip-android" title="Material Design Tooltip">
                        <i class="bi bi-android2 me-1"></i> Android
                    </button>

                    <button type="button" class="btn btn-dark flex-fill" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-custom-class="tooltip-ios" title="Cupertino Style Tooltip">
                        <i class="bi bi-apple me-1"></i> iOS
                    </button>
                </div>
            </div>
        </div>

        <!-- Button Example -->
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3 text-muted">Button Example</h6>
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Tooltip on top">
                    Hover / Tap Me
                </button>
            </div>
        </div>

        <!-- Directions -->
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3 text-muted">Directions</h6>
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Tooltip on Top">
                        Top
                    </button>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip"
                        data-bs-placement="right" title="Tooltip on Right">
                        Right
                    </button>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Tooltip on Bottom">
                        Bottom
                    </button>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Tooltip on Left">
                        Left
                    </button>
                </div>
            </div>
        </div>

        <!-- Custom HTML -->
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3 text-muted">Custom HTML</h6>
                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true"
                    title="<em>Tooltip</em> <u>with</u> <b>HTML</b> <br> <i class='bi bi-emoji-smile'></i> Hello!">
                    Tooltip with HTML
                </button>
            </div>
        </div>

        <!-- Inline Text Tooltips -->
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3 text-muted">Inline Text Tooltips</h6>
                <p class="text-secondary small mb-0" style="line-height: 1.6;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                    fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Cras pulvinar

                    <!-- Inline Tooltip Link -->
                    <a href="javascript:void(0)" class="text-primary fw-bold text-decoration-none"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Informasi tambahan muncul di sini!">
                        vertiolus <i class="bi bi-info-circle-fill"></i>
                    </a>

                    purus sed hendrerit. Praesent et auctor dolor. Ut sed ultrices justo. Phasellus pulvinar lacus nec
                    quam blandit, vel rhoncus risus scelerisque. Morbi diam ex, rhoncus sit amet augue vitae, vestibulum
                    aliquam lorem.
                </p>
            </div>
        </div>

    </div>
    <!-- * App Container -->

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>