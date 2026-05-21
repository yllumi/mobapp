<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">App Header</div>
        <div class="right">
        </div>
    </div>

    <div class="header-with-tab">
        <ul class="nav nav-tabs tabs-lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#photosTab" role="tab">
                    Photos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#videosTab" role="tab">
                    Videos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#soundsTab" role="tab">
                    Sounds
                </a>
            </li>
        </ul>
    </div>

    <div class="app-container px-3 has-header-with-tab">

        <!-- Konten Tab Tab Masing-Masing -->
        <div class="tab-content">

            <!-- Panel Tab: Photos -->
            <div class="tab-pane fade show active" id="photosTab" role="tabpanel">
                <div class="card border-0 shadow-sm rounded-3 mb-3">
                    <div class="card-body shadow-sm">
                        <h6 class="fw-bold mb-2 px-1">Photos Section</h6>
                        <img src="<?= $basePath ?>assets/wide2.jpg" class="img-fluid rounded-2 py-2" alt="">
                        <p class="text-secondary small mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet leo eget maximus
                            ultricies. Nunc vitae enim facilisis tortor aliquet ullamcorper nec at tortor. Vivamus
                            lobortis, orci et commodo pulvinar, eros nibh volutpat ipsum, in rhoncus risus dolor sed
                            ipsum.<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore et architecto
                            placeat voluptates voluptatem tempora, maxime nisi, ut eos eligendi aspernatur tenetur,
                            possimus perferendis! Odit quod temporibus delectus! Ratione nam ea harum quas quam debitis
                            quibusdam asperiores magnam delectus animi voluptas officiis iure magni voluptatum suscipit,
                            minima, eum itaque sequi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Panel Tab: Videos -->
            <div class="tab-pane fade" id="videosTab" role="tabpanel">
                <div class="card border-0 shadow-sm rounded-3 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">Videos Section</h6>
                        <img src="<?= $basePath ?>assets/wide2.jpg" class="img-fluid rounded-2 py-2" alt="">
                        <p class="text-secondary small mb-0">
                            Pellentesque eget ipsum vel enim ultricies gravida id non ex. Nunc felis neque, vulputate
                            sed faucibus sed, hendrerit at ante. Pellentesque rutrum dui quis metus pulvinar vehicula.
                            Nulla congue hendrerit ex, ut facilisis lorem facilisis et.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Panel Tab: Sounds -->
            <div class="tab-pane fade" id="soundsTab" role="tabpanel">
                <div class="card border-0 shadow-sm rounded-3 mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">Sounds Section</h6>
                        <img src="<?= $basePath ?>assets/wide2.jpg" class="img-fluid rounded-2 py-2" alt="">
                        <p class="text-secondary small mb-0">
                            Nam blandit consectetur enim at finibus. Donec eget felis mi. Sed dictum rhoncus nibh, eu
                            venenatis est sagittis non. Vivamus pellentesque massa sit amet interdum pellentesque. In
                            feugiat lobortis magna, at aliquam neque dapibus quis.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>