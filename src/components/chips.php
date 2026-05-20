<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Chips</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <div class="section full mt-1">
            <div class="chip-title pt-3">Default</div>
            <div class="wide-block">
                <div class="chip"><span class="chip-label">London</span></div>
                <div class="chip"><span class="chip-label">Paris</span></div>
                <div class="chip"><span class="chip-label">Rome</span></div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="chip-title">Outline</div>
            <div class="wide-block">
                <div class="chip chip-outline"><span class="chip-label">London</span></div>
                <div class="chip chip-outline"><span class="chip-label">Paris</span></div>
                <div class="chip chip-outline"><span class="chip-label">Rome</span></div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="chip-title">with Icon</div>
            <div class="wide-block">
                <div class="chip">
                    <i class="chip-icon bg-primary"><i class="bi bi-person-fill"></i></i>
                    <span class="chip-label">John Doe</span>
                </div>
                <div class="chip">
                    <i class="chip-icon bg-danger"><i class="bi bi-geo-alt-fill"></i></i>
                    <span class="chip-label">London</span>
                </div>
                <div class="chip">
                    <i class="chip-icon bg-warning text-dark"><i class="bi bi-alarm-fill"></i></i>
                    <span class="chip-label">5:22 AM</span>
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="chip-title">with Image</div>
            <div class="wide-block">
                <div class="chip">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">John Doe</span>
                </div>
                <div class="chip">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Jane Doe</span>
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="chip-title">with Action Button</div>
            <div class="wide-block">
                <div class="chip">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">John Doe</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>
                <div class="chip">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Jane Doe</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>
            </div>
        </div>

        <div class="section full mt-2 mb-4">
            <div class="chip-title">Colors</div>
            <div class="wide-block">
                <div class="chip chip-primary">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Primary</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>
                <div class="chip chip-danger">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Danger</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>
                <div class="chip chip-success">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Success</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>
                <div class="chip chip-warning">
                    <img src="<?= $basePath ?>assets/wide2.jpg" alt="">
                    <span class="chip-label">Warning</span>
                    <span class="chip-delete" onclick="this.parentElement.remove()"><i
                            class="bi bi-x-circle-fill"></i></span>
                </div>

                <hr class="my-2 opacity-25">

                <div class="chip chip-primary"><span class="chip-label">Primary</span></div>
                <div class="chip chip-danger"><span class="chip-label">Danger</span></div>
                <div class="chip chip-warning"><span class="chip-label">Warning</span></div>
                <div class="chip chip-success"><span class="chip-label">Success</span></div>
                <div class="chip chip-info"><span class="chip-label">Info</span></div>
                <div class="chip chip-light"><span class="chip-label">Light</span></div>
                <div class="chip chip-dark"><span class="chip-label">Dark</span></div>

                <hr class="my-2 opacity-25">

                <div class="chip chip-outline chip-primary"><span class="chip-label">Primary</span></div>
                <div class="chip chip-outline chip-success"><span class="chip-label">Success</span></div>
                <div class="chip chip-outline chip-warning"><span class="chip-label">Warning</span></div>
                <div class="chip chip-outline chip-danger"><span class="chip-label">Danger</span></div>
                <div class="chip chip-outline chip-info"><span class="chip-label">Info</span></div>
                <div class="chip chip-outline chip-dark"><span class="chip-label">Dark</span></div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>