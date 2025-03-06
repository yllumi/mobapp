<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <i class="bi bi-arrow-left"></i>
        </div>
        <div class="page-title">Listview</div>
        <div class="right">
        </div>
    </div>

<div class="app-container">

    <!-- Simple Listview -->
    <div class="listview">
        <div class="listview-title">
            Simple Listview
        </div>
        <div class="listview-item">
            <div class="col">
                Item 1
            </div>
        </div>
        <div class="listview-item">
            <div class="col">
                Item 2
            </div>
        </div>
        <div class="listview-item">
            <div class="col">
                <strong>Item 3</strong>
            </div>
        </div>
    </div>

    <!-- Link Listview -->
    <div class="listview link-listview">
        <div class="listview-title">
            Link Listview
        </div>
        <a href="#" class="listview-item">
            <div class="col">
                Link item 1
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <strong>Link item 2</strong>
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <div>
                    <strong>Link item 3</strong>
                    <span>Lorem ipsum dolor sit amet.</span>
                </div>
            </div>
        </a>
    </div>

    <!-- Image Listview -->
    <div class="listview image-listview">
        <div class="listview-title">
            Image Listview
        </div>
        <div class="listview-item">
            <div class="col">
                <img src="https://placehold.co/48" alt="">
                Image item 1
            </div>
        </div>
        <a href="#" class="listview-item">
            <div class="col">
                <img src="https://placehold.co/48" alt="" class="w48">
                <div>
                    Image item 2
                    <span>Description</span>
                </div>
            </div>
            <div class="col">
                <span class="badge rounded-pill text-bg-primary">1</span>
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <img src="https://placehold.co/48" alt="" class="w64">
                <div>
                    <small class="text-secondary">Subtitle</small>
                    <strong>Image item 3</strong>
                    <span>Lorem ipsum, dolor sit amet.</span>
                </div>
            </div>
            <div class="col">
                <span>Edit</span>
            </div>
        </a>
    </div>

    <!-- Icon Listview -->
    <div class="listview icon-listview">
        <div class="listview-title">
            Icon Listview
        </div>
        <a href="#" class="listview-item">
            <div class="col">
                <div class="listview-icon">
                    <i class="bi bi-pencil"></i>
                </div>
                <strong>Iconed item</strong>
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <div class="listview-icon listview-icon-bordered">
                    <i class="bi bi-list"></i>
                </div>
                <strong>Iconed item with border 1</strong>
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <div class="listview-icon listview-icon-bordered rounded-circle bg-primary text-white">
                    <i class="bi bi-bell"></i>
                </div>
                <div>
                    <strong>Iconed item 3</strong>
                    <span>Lorem ipsum, dolor sit amet.</span>
                </div>
            </div>
            <div class="col">
                <span class="badge rounded-pill text-bg-danger">99</span>
            </div>
        </a>
        <a href="#" class="listview-item">
            <div class="col">
                <div class="listview-icon listview-icon-bordered rounded-circle bg-warning text-white">
                    <i class="bi bi-door-open"></i>
                </div>
                <div>
                    <small class="text-secondary">Subtitle</small>
                    <strong>Iconed item 4</strong>
                    <span>Lorem ipsum, dolor sit amet.</span>
                </div>
            </div>
            <div class="col">
                <span>Edit</span>
            </div>
        </a>

    </div>
</div>

<?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>