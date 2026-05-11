<?php include __DIR__ . '/../partials/header.php' ?>

<!-- Ionicons -->
<script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Search</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container py-1">
        <div class="screen">

            <!-- Extra Header – Search Box -->
            <div class="extra-header mb-3 shadow-sm">
                <div class="searchbox">
                    <i class="bi bi-search text-secondary"></i>
                    <input type="text" placeholder="Search..." />
                    <i class="bi bi-x-circle" style="cursor: pointer;" id="clearBtn1"></i>
                </div>
            </div>

            <!-- Content Area -->
            <div class="content-area">

                <!-- Text Results -->
                <div class="p-3 pb-2" style="font-size: 13px;"><span class="fw-semibold">Search Results for </span> <span class="text-primary">"mobile app"<span></div>
                <div class="result-list">

                    <a href="#" class="result-item">
                        <div class="result-info">
                            <div class="result-title">Heading over Title 1</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.google.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                    <a href="#" class="result-item">
                        <div class="result-info">
                            <div class="result-title">Heading over Title 2</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.figma.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                    <a href="#" class="result-item">
                        <div class="result-info">
                            <div class="result-title">Heading over Title 3</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.dribbble.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                </div>

                <!-- Image Results -->
                <div class="p-3 pb-2" style="font-size: 13px;"><span class="fw-semibold">Imaged Search Results for </span> <span class="text-primary">"mobile app"<span></div>
                <div class="result-list">

                    <a href="#" class="result-item">
                        <div class="result-thumb">
                            <img src="https://placehold.co/50" alt="">
                        </div>
                        <div class="result-info">
                            <div class="result-title">Heading over Title 1</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.google.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                    <a href="#" class="result-item">
                        <div class="result-thumb">
                            <img src="https://placehold.co/50" alt="">
                        </div>
                        <div class="result-info">
                            <div class="result-title">Heading over Title 2</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.figma.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                    <a href="#" class="result-item">
                        <div class="result-thumb">
                            <img src="https://placehold.co/50" alt="">
                        </div>
                        <div class="result-info">
                            <div class="result-title">Heading over Title 3</div>
                            <div class="result-desc">This is example of search result</div>
                            <div class="result-source">www.dribbble.com</div>
                        </div>
                        <div class="result-arrow">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </a>

                </div>

            </div><!-- /.content-area -->

        </div><!-- /.screen -->
    </div>

    <script>
        // Clear input
        document.getElementById('clearBtn1').addEventListener('click', () => {
            document.querySelector('.searchbox input').value = '';
        });
    </script>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>