<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">
    <!-- HEADER -->
    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Table</div>
        <div class="right"></div>
    </div>
    <!-- CONTENT -->
    <div class="app-container px-0">
        <!-- =========================
             DEFAULT TABLE
        ========================== -->
        <div class="section mt-3">
            <div class="table-title px-3">Default Table</div>
            <div class="px-3">
                <p class="table-description">
                    Table standar Bootstrap dengan <code>.table-responsive</code> agar tetap responsive di layar mobile.
                </p>
            </div>
            <div class="card table-demo-card">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>#01</th>
                                <td>Eren</td>
                                <td>Eren@mail.com</td>
                                <td><span class="badge bg-success badge-status">Active</span></td>
                            </tr>
                            <tr>
                                <th>#02</th>
                                <td>Mikasa</td>
                                <td>Mikasa@mail.com</td>
                                <td><span class="badge bg-warning badge-status">Pending</span></td>
                            </tr>
                            <tr>
                                <th>#03</th>
                                <td>Armin</td>
                                <td>Armin@mail.com</td>
                                <td><span class="badge bg-danger badge-status">Blocked</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- =========================
             COLORED TABLE
        ========================== -->
        <div class="section mt-4">
            <div class="table-title px-3">Colored Table</div>
            <div class="px-3">
                <p class="table-description">Menggunakan warna Bootstrap untuk membuat tampilan table lebih menarik.</p>
            </div>
            <div class="card table-demo-card">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>iPhone 15</td>
                                <td>$999</td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>MacBook Air</td>
                                <td>$1299</td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>AirPods Pro</td>
                                <td>$249</td>
                                <td>Limited</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- =========================
             STRIPED TABLE
        ========================== -->
        <div class="section mt-4">
            <div class="table-title px-3">Striped Table</div>
            <div class="px-3">
                <p class="table-description"><code>.table-striped</code> memberikan warna selang-seling pada baris
                    table.</p>
            </div>
            <div class="card table-demo-card">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>@Eren</td>
                                <td>Admin</td>
                                <td>Online</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>@Armin</td>
                                <td>Editor</td>
                                <td>Offline</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>@Mikasa</td>
                                <td>User</td>
                                <td>Online</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- =========================
             TABLE WITH ICON
        ========================== -->
        <div class="section mt-4 mb-5">
            <div class="table-title px-3">Table With Icons</div>
            <div class="px-3">
                <p class="table-description">Kombinasi Bootstrap Table dengan Bootstrap Icons.</p>
            </div>
            <div class="card table-demo-card">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>App</th>
                                <th>Name</th>
                                <th>Download</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-icon">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                </td>
                                <td>Instagram</td>
                                <td>12M+</td>
                                <td>
                                    <button class="btn btn-sm btn-primary rounded-pill">
                                        <i class="bi bi-download me-1"></i> Install
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-icon">
                                        <i class="bi bi-spotify"></i>
                                    </div>
                                </td>
                                <td>Spotify</td>
                                <td>8M+</td>
                                <td>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="bi bi-check-circle me-1"></i> Installed
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-icon">
                                        <i class="bi bi-youtube"></i>
                                    </div>
                                </td>
                                <td>YouTube</td>
                                <td>20M+</td>
                                <td>
                                    <button class="btn btn-sm btn-danger rounded-pill">
                                        <i class="bi bi-trash me-1"></i> Remove
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>