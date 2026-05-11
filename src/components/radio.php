<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Radios</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <div id="appCapsule">

            <!-- Block Example -->
            <div class="section-checkbox">
                <div class="p-3 fw-bold">Block Example</div>
                <div class="wide-block">
                    <p class="block-desc">Simple Radio list in content block.</p>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radioDefault" id="RD1">
                        <label class="form-check-label" for="RD1">Option 1</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radioDefault" id="RD2">
                        <label class="form-check-label" for="RD2">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radioDefault" id="RD3">
                        <label class="form-check-label" for="RD3">Option 3</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radioDefault" id="RD4">
                        <label class="form-check-label" for="RD4">Option 4</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radioDefault" id="RD5">
                        <label class="form-check-label" for="RD5">Option 5</label>
                    </div>
                </div>
            </div>

            <div class="section-checkbox">
                <div class="p-3 fw-bold">Inline Example</div>
                <div class="wide-block">
                    <div class="inline-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                        <label class="radio-inline">
                            <input type="radio" name="radioDefault2">
                        </label>

                        Phasellus velit turpis, convallis at posuere

                        <label class="radio-inline">
                            <input type="radio" name="radioDefault2">
                        </label>

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
                            <input type="radio" class="form-check-input" name="radioDefault3" id="lc1">
                            <label class="form-check-label" for="lc1">Option 1</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="radioDefault3" id="lc2">
                            <label class="form-check-label" for="lc2">Option 2</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="radioDefault3" id="lc3">
                            <label class="form-check-label" for="lc3">Option 3</label>
                            <span class="chevron">›</span>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="radioDefault3" id="lc4">
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