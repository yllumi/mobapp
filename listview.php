<?php include('partials/header.php') ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
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
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        Link item 1
                    </div>
                </a>
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <strong>Link item 2</strong>
                    </div>
                </a>
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <div>
                            <strong>Link item 3</strong>
                            <span>Lorem ipsum dolor sit amet.</span>
                        </div>
                    </div>
                </a>
            </div>
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
            <div class="listview-item">
                <a href="#">
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
            </div>
            <div class="listview-item">
                <a href="#">
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
        </div>
        
        <!-- Icon Listview -->
        <div class="listview icon-listview">
            <div class="listview-title">
                Icon Listview
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <div class="listview-icon">
                            <i class="bi bi-folder"></i>
                        </div>
                        <strong>Iconed item 1</strong>
                    </div>
                </a>
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <div class="listview-icon no-bg text-success">
                            <i class="bi bi-folder-fill"></i>
                        </div>
                        <strong>Iconed item 2</strong>
                    </div>
                </a>
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <div class="listview-icon rounded-circle bg-primary text-white">
                            <i class="bi bi-bell"></i>
                        </div>
                        <div>
                            <small class="text-secondary">Subtitle</small>
                            <strong>Iconed item 3</strong>
                            <span>Lorem ipsum, dolor sit amet.</span>
                        </div>
                    </div>
                    <div class="col">
                    <span class="badge rounded-pill text-bg-danger">99</span>
                    </div>
                </a>
            </div>
            <div class="listview-item">
                <a href="#">
                    <div class="col">
                        <div class="listview-icon rounded-circle bg-warning text-white">
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
    </div>

    <?php include('partials/bottommenu.php') ?>
</div>

<?php include('partials/footer.php') ?>