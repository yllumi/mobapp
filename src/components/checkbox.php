<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Checkbox</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <div id="appCapsule">

            <!-- Block Example -->
            <div class="section-checkbox">
                <div class="p-3 fw-bold">Block Example</div>
                <div class="wide-block">
                    <p class="block-desc">Simple checkbox list in content block.</p>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb1">
                        <label class="form-check-label" for="cb1">Option 1</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb2" checked>
                        <label class="form-check-label" for="cb2">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb3">
                        <label class="form-check-label" for="cb3">Option 3</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb4" checked>
                        <label class="form-check-label" for="cb4">Option 4</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb5">
                        <label class="form-check-label" for="cb5">Option 5</label>
                    </div>
                </div>
            </div>

            <!-- Inline Example -->
            <div class="section-checkbox">
                <div class="p-3 fw-bold">Inline Example</div>
                <div class="wide-block">
                    <div class="inline-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <span class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCb1" checked>
                            <label class="form-check-label" for="inlineCb1"></label>
                        </span>
                        Phasellus velit turpis, convallis at posuere
                        <span class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCb2">
                            <label class="form-check-label" for="inlineCb2"></label>
                        </span>
                        Duis pellentesque, nibh ut auctor imperdiet.
                    </div>
                </div>
            </div>

            <!-- List Example -->
            <div class="section-checkbox">
                <div class="p-3 fw-bold">List Example</div>
                <div class="wide-block p-0">
                    <div class="input-list">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="lc1">
                            <label class="form-check-label" for="lc1">Option 1</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="lc2" checked>
                            <label class="form-check-label" for="lc2">Option 2</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="lc3">
                            <label class="form-check-label" for="lc3">Option 3</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="lc4">
                            <label class="form-check-label" for="lc4">Option 4</label>
                            <span class="chevron">›</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /appCapsule -->


    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>