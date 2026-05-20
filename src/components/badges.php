<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Badges</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <!-- ═══════════ ANDROID ═══════════ -->
        <div class="phone-col">
            <div class="android">

                <!-- Body -->
                <div class="phone-body">

                    <div class="sec-title my-3">Example</div>
                    <div class="list-card">
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Frank Boehm</span>
                            <span class="bdg bdg-primary rounded-circle">6</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Sophie Asveld</span>
                            <span class="bdg bdg-dark rounded-circle">0</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Rickie Baroch</span>
                            <span class="bdg bdg-success rounded-circle">86</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class=" item-name">Carmelita M.</span>
                            <span class="bdg bdg-danger rounded-circle">61</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Isaac Hunt</span>
                            <span class="bdg bdg-warning rounded-circle">53</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Gabriel Moreira</span>
                            <span class="bdg bdg-info rounded-circle">509</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class="item-name">Nicolina L.</span>
                            <span class="bdg bdg-light rounded-circle">15</span>
                        </div>
                        <div class="list-item">
                            <img src="https://placehold.co/40" class="rounded-circle" alt="">
                            <span class=" item-name">Emmalynn M.</span>
                            <span class="bdg bdg-dark rounded-circle">53</span>
                        </div>
                    </div>

                    <div class="sec-title">Dot Example</div>
                    <div class="list-card">
                        <div class="media-item">
                            <img src="https://placehold.co/64" class="rounded-2" alt="">
                            <div class="media-info">
                                <div class="media-name">Birds</div>
                                <div class="media-sub">592 photos</div>
                            </div>
                            <span class="bdg-dot bg-primary"></span>
                        </div>
                        <div class="media-item">
                            <img src="https://placehold.co/64" class="rounded-2" alt="">
                            <div class="media-info">
                                <div class="media-name">Street Photos</div>
                                <div class="media-sub">75 videos</div>
                            </div>
                            <span class="bdg-dot bg-danger"></span>
                        </div>
                        <div class="media-item">
                            <img src="https://placehold.co/64" class="rounded-2" alt="">
                            <div class="media-info">
                                <div class="media-name">Dogs</div>
                                <div class="media-sub">3 albums</div>
                            </div>
                            <span class="bdg-dot bg-warning"></span>
                        </div>
                    </div>

                    <div class="sec-title">All Variants</div>
                    <div class="list-card badge-grid-section">
                        <div class="grid-row">
                            <span class="bdg bdg-lg bg-primary text-white">Primary</span>
                            <span class="bdg bdg-lg bg-success text-white">Success</span>
                            <span class="bdg bdg-lg bg-danger text-white">Danger</span>
                            <span class="bdg bdg-lg bg-warning text-white">Warning</span>
                            <span class="bdg bdg-lg bg-info text-white">Info</span>
                            <span class="bdg bdg-lg bg-dark text-white">Dark</span>
                            <span class="bdg bdg-lg bg-light text-white">Light</span>
                        </div>
                    </div>
                    <div style="height:12px"></div>

                </div><!-- /phone-body -->

            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>