<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Components</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <!-- Alerts -->
        <div class="listview image-listview">
            <div class="listview-title">Alerts</div>
            <a href="<?= $basePath ?>components/notification.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-bell"></i></div> <strong>Notifications</strong>
                </div>
            </a>
            <a href="<?= $basePath ?>components/toast.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-chat-square-dots"></i></div> <strong>Toast</strong>
                </div>
            </a>
            <a href="<?= $basePath ?>components/dialog.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-chat-square"></i></div> <strong>Dialog Box</strong>
                </div>
            </a>
            <a href="<?= $basePath ?>components/alert.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-exclamation-triangle"></i></div> <strong>Alert Box</strong>
                </div>
            </a>
            <a href="<?= $basePath ?>components/error-page.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-bug"></i></div> <strong>Error Page</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-wifi-off"></i></div> <strong>Online / Offline Detection</strong>
                </div>
            </a>
        </div>

        <!-- Action Modals -->
        <div class="listview image-listview">
            <div class="listview-title">Action Modals</div>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-ui-checks"></i></div> <strong>Action Sheet</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-house-add"></i></div> <strong>Add to Home</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-window"></i></div> <strong>Modal</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-layout-sidebar"></i></div> <strong>Offcanvas</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-collection-play"></i></div> <strong>Stories</strong>
                </div>
            </a>
        </div>

        <!-- List Groups -->
        <div class="listview image-listview">
            <div class="listview-title">List Groups</div>
            <a href="<?= $basePath ?>components/listview.php" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-list-ul"></i></div> <strong>Listview</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-card-list"></i></div> <strong>Multiple Listview</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-pin-angle"></i></div> <strong>Sticky Listview</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-sort-numeric-up"></i></div> <strong>Accordion</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-chat-left-text"></i></div> <strong>Comment Boxes</strong>
                </div>
            </a>
        </div>

        <!-- Form Elements -->
        <div class="listview image-listview">
            <div class="listview-title">Form Elements</div>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-cursor-text"></i></div> <strong>Inputs</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-check-square"></i></div> <strong>Checkbox</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-toggle-off"></i></div> <strong>Toggle</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-search"></i></div> <strong>Search</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-ui-radios"></i></div> <strong>Radio</strong>
                </div>
            </a>

            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-plus-circle"></i></div> <strong>Stepper</strong>
                </div>
            </a>

            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-exclamation-diamond"></i></div> <strong>Form Validation</strong>
                </div>
            </a>

            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-segmented-nav"></i></div> <strong>Form Wizard</strong>
                </div>
            </a>

        </div>

        <!-- UI Elements -->
        <div class="listview image-listview">
            <div class="listview-title">UI Elements</div>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-patch-exclamation"></i></div> <strong>Badges</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-hand-index-thumb"></i></div> <strong>Buttons</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-card-text"></i></div> <strong>Cards</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-sliders"></i></div> <strong>Carousel</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-dash-circle"></i></div> <strong>Chips</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-caret-down-square"></i></div> <strong>Dropdown</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-plus-circle"></i></div> <strong>Fab Button</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-grid-3x3-gap"></i></div> <strong>Icons</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-image"></i></div> <strong>Images</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-arrow-right-short"></i></div> <strong>Pagination</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-card-heading"></i></div> <strong>Placeholders</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-arrow-clockwise"></i></div> <strong>Preloader</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-bar-chart"></i></div> <strong>Progress bar</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-table"></i></div> <strong>Table</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-layout-split"></i></div> <strong>Tabs</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-lightbulb"></i></div> <strong>Tooltips</strong>
                </div>
            </a>
        </div>


        <!-- Navigation -->
        <div class="listview image-listview">
            <div class="listview-title">Navigation</div>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-menu-app"></i></div> <strong>Bottom Menu</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-layout-text-sidebar"></i></div> <strong>Header</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-stars"></i></div> <strong>Animated Header</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-layout-three-columns"></i></div> <strong>Header with Tab</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-columns"></i></div> <strong>Sidebar</strong>
                </div>
            </a>
        </div>

        <!-- Others -->
        <div class="listview image-listview">
            <div class="listview-title">Others</div>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-phone"></i></div> <strong>OS Detection</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-type"></i></div> <strong>Typography</strong>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="listview-icon"><i class="bi bi-arrow-up-circle"></i></div> <strong>Go to Top</strong>
                </div>
            </a>
        </div>


    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>