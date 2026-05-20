<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Fab Button</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <!-- CONTENT -->
        <div class="container py-4 text-secondary">
            <div class="card border-0 shadow-sm p-3 mb-3">
                <p class="m-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quidem reprehenderit facere, ex,
                    voluptate pariatur corrupti labore optio, aspernatur totam autem earum? Necessitatibus nemo
                    voluptate
                    magnam, asperiores fugiat rem eligendi!
                </p>
            </div>
            <div class="card border-0 shadow-sm p-3 mb-3">
                <p class="m-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, iusto reprehenderit placeat aperiam
                    deserunt animi ab ad repellat magni dignissimos unde at facilis rem? Tenetur esse culpa facilis quas
                    magnam saepe minima repellendus incidunt nemo recusandae odio ullam, sequi exercitationem!
                </p>
            </div>
            <div class="card border-0 shadow-sm p-3 mb-3">
                <p class="m-0">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea eligendi amet suscipit tempore, magnam
                    veniam ducimus quis quaerat deserunt. Repudiandae molestiae ut consectetur sequi officiis eligendi
                    ratione pariatur illum accusantium neque quis corporis ipsa omnis dolor reprehenderit impedit
                    consequatur officia perferendis veniam obcaecati, enim quos.
                </p>
            </div>
        </div>

        <!-- TOP LEFT -->

        <div class="fab-button top-left dropdown">
            <button class="fab btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center"
                type="button" data-bs-toggle="dropdown">
                <i class="bi bi-plus-lg"></i>
            </button>

            <div class="dropdown-menu">
                <a class="dropdown-item bg-primary text-white rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-music-note-beamed"></i>
                    <span class="fab-label">
                        Music
                    </span>
                </a>
                <a class="dropdown-item bg-danger text-white rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-image"></i>
                    <span class="fab-label">
                        Image
                    </span>
                </a>
                <a class="dropdown-item bg-success text-white rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-camera-video"></i>
                    <span class="fab-label">
                        Video
                    </span>
                </a>
            </div>
        </div>

        <!-- TOP CENTER -->

        <div class="fab-button top-center dropdown">
            <button
                class="fab btn btn-warning text-dark rounded-circle border-0 d-flex align-items-center justify-content-center"
                type="button" data-bs-toggle="dropdown">
                <i class="bi bi-plus-lg"></i>
            </button>

            <div class="dropdown-menu">
                <a class="dropdown-item bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-music-note-beamed"></i>
                    <span class="fab-label">
                        Music
                    </span>
                </a>
                <a class="dropdown-item bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-image"></i>
                    <span class="fab-label">
                        Image
                    </span>
                </a>
            </div>
        </div>

        <!-- TOP RIGHT -->

        <div class="fab-button top-right dropdown">
            <button class="fab btn btn-dark rounded-circle border-0 d-flex align-items-center justify-content-center"
                type="button" data-bs-toggle="dropdown">
                <i class="bi bi-plus-lg"></i>
            </button>

            <div class="dropdown-menu">
                <a class="dropdown-item bg-white text-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-music-note-beamed"></i>
                    <span class="fab-label">
                        Music
                    </span>
                </a>
                <a class="dropdown-item bg-white text-danger rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-image"></i>
                    <span class="fab-label">
                        Image
                    </span>
                </a>
            </div>
        </div>

        <!-- BOTTOM LEFT -->

        <div class="fab-button bottom-left dropdown mb-5">
            <button class="fab btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center"
                type="button" data-bs-toggle="dropdown">
                <i class="bi bi-plus-lg"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item bg-white text-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-music-note-beamed"></i>
                    <span class="fab-label">
                        Music
                    </span>
                </a>
                <a class="dropdown-item bg-white text-danger rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-image"></i>
                    <span class="fab-label">
                        Image
                    </span>
                </a>
            </div>
        </div>

        <!-- BOTTOM RIGHT -->
        <div class="fab-button bottom-right dropdown mb-5">
            <button class="fab btn btn-primary rounded-circle border-0 d-flex align-items-center justify-content-center"
                type="button" data-bs-toggle="dropdown">
                <i class="bi bi-plus-lg"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item bg-white text-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-music-note-beamed"></i>
                    <span class="fab-label">
                        Music
                    </span>
                </a>
                <a class="dropdown-item bg-white text-danger rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-image"></i>
                    <span class="fab-label">
                        Image
                    </span>
                </a>
                <a class="dropdown-item bg-white text-success rounded-circle shadow-sm d-flex align-items-center justify-content-center position-relative p-0"
                    href="#">
                    <i class="bi bi-camera-video"></i>
                    <span class="fab-label">
                        Video
                    </span>
                </a>
            </div>
        </div>

        <!-- EXTENDED FAB -->

        <div class="fab-button text bottom-center mb-5">
            <button class="fab btn btn-info text-dark rounded-4 border-0 fw-semibold d-flex align-items-center gap-2">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>