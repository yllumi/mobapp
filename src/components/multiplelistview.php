<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Multi Listview</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <!-- 1. SIMPLE MULTI LISTVIEW -->
        <div class="listview mb-4">
            <div class="listview-title">Simple Multi Listview</div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s1-link">
                <div class="col"><strong>Link List</strong></div>
            </a>
            <div class="nested-wrapper" id="s1-link">
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 1</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 2</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 3</div>
                </a>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s1-simple">
                <div class="col"><strong>Simple List</strong></div>
            </a>
            <div class="nested-wrapper" id="s1-simple">
                <div class="listview-item border-0 ps-4">Simple Item A</div>
                <div class="listview-item border-0 ps-4">Simple Item B</div>
                <div class="listview-item border-0 ps-4">Simple Item C</div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s1-imaged">
                <div class="col"><strong>Imaged List</strong></div>
            </a>
            <div class="nested-wrapper" id="s1-imaged">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 1</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 2</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 3</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s1-iconed">
                <div class="col"><strong>Iconed List</strong></div>
            </a>
            <div class="nested-wrapper" id="s1-iconed">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-star-fill text-warning me-2"></i> Favorit</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-heart-fill text-danger me-2"></i> Like</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-bookmark-fill text-primary me-2"></i> Simpan</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s1-media">
                <div class="col"><strong>Media List</strong></div>
            </a>
            <div class="nested-wrapper" id="s1-media">
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col mt-2">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 1</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 2</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 3</strong><span>Desc</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. IMAGED MULTI LISTVIEW -->
        <div class="listview mb-4">
            <div class="listview-title">Imaged Multi Listview</div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s2-link">
                <div class="col"><img src="https://placehold.co/36" class="rounded-circle"> <strong>Link List</strong></div>
            </a>
            <div class="nested-wrapper" id="s2-link">
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 1</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 2</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 3</div>
                </a>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s2-simple">
                <div class="col"><img src="https://placehold.co/36" class="rounded-circle"> <strong>Simple List</strong></div>
            </a>
            <div class="nested-wrapper" id="s2-simple">
                <div class="listview-item border-0 ps-4">Simple Item A</div>
                <div class="listview-item border-0 ps-4">Simple Item B</div>
                <div class="listview-item border-0 ps-4">Simple Item C</div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s2-imaged">
                <div class="col"><img src="https://placehold.co/36" class="rounded-circle"> <strong>Imaged List</strong></div>
            </a>
            <div class="nested-wrapper" id="s2-imaged">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 1</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 2</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 3</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s2-iconed">
                <div class="col"><img src="https://placehold.co/36" class="rounded-circle"> <strong>Iconed List</strong></div>
            </a>
            <div class="nested-wrapper" id="s2-iconed">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-star-fill text-warning me-2"></i> Favorit</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-heart-fill text-danger me-2"></i> Like</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-bookmark-fill text-primary me-2"></i> Simpan</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s2-media">
                <div class="col"><img src="https://placehold.co/36" class="rounded-circle"> <strong>Media List</strong></div>
            </a>
            <div class="nested-wrapper" id="s2-media">
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col mt-2">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 1</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 2</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 3</strong><span>Desc</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. ICONED MULTI LISTVIEW -->
        <div class="listview mb-4">
            <div class="listview-title">Iconed Multi Listview</div>

            <a href="javascript:void(0);" class="listview-item nested-trigger px-3" data-target="s3-link">
                <div class="col">
                    <div class="bg-primary px-2 py-1 rounded-circle"><i class="bi bi-share text-white"></i></div> <strong>Link List</strong>
                </div>
            </a>
            <div class="nested-wrapper" id="s3-link">
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 1</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 2</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 3</div>
                </a>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger px-3" data-target="s3-simple">
                <div class="col">
                    <div class="bg-danger px-2 py-1 rounded-circle"><i class="bi bi-broadcast text-white"></i></div> <strong>Simple List</strong>
                </div>
            </a>
            <div class="nested-wrapper" id="s3-simple">
                <div class="listview-item border-0 ps-4">Simple Item A</div>
                <div class="listview-item border-0 ps-4">Simple Item B</div>
                <div class="listview-item border-0 ps-4">Simple Item C</div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger px-3" data-target="s3-imaged">
                <div class="col">
                    <div class="bg-success px-2 py-1 rounded-circle"><i class="bi bi-card-image text-white icon"></i></div> <strong>Imaged List</strong>
                </div>
            </a>
            <div class="nested-wrapper" id="s3-imaged">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 1</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 2</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 3</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger px-3" data-target="s3-iconed">
                <div class="col">
                    <div class="bg-warning px-2 py-1 rounded-circle"><i class="bi bi-emoji-smile text-white"></i></div> <strong>Iconed List</strong>
                </div>
            </a>
            <div class="nested-wrapper" id="s3-iconed">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-star-fill text-warning me-2"></i> Favorit</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-heart-fill text-danger me-2"></i> Like</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-bookmark-fill text-primary me-2"></i> Simpan</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger px-3" data-target="s3-media">
                <div class="col">
                    <div class="bg-info px-2 py-1 rounded-circle"><i class="bi bi-collection text-white"></i></div> <strong>Media List</strong>
                </div>
            </a>
            <div class="nested-wrapper" id="s3-media">
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 1</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 2</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 3</strong><span>Desc</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. MEDIA MULTI LISTVIEW -->
        <div class="listview mb-4">
            <div class="listview-title">Media Multi Listview</div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s4-link">
                <div class="col"><img src="https://placehold.co/64" class="rounded"> <strong>Link List</strong></div>
            </a>
            <div class="nested-wrapper" id="s4-link">
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 1</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 2</div>
                </a>
                <a href="#" class="listview-item border-0 ps-4">
                    <div class="col text-primary">Item Link 3</div>
                </a>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s4-simple">
                <div class="col"><img src="https://placehold.co/64" class="rounded"> <strong>Simple List</strong></div>
            </a>
            <div class="nested-wrapper" id="s4-simple">
                <div class="listview-item border-0 ps-4">Simple Item A</div>
                <div class="listview-item border-0 ps-4">Simple Item B</div>
                <div class="listview-item border-0 ps-4">Simple Item C</div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s4-imaged">
                <div class="col"><img src="https://placehold.co/64" class="rounded"> <strong>Imaged List</strong></div>
            </a>
            <div class="nested-wrapper" id="s4-imaged">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 1</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 2</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><img src="https://placehold.co/32" class="rounded-circle me-2"> User 3</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s4-iconed">
                <div class="col"><img src="https://placehold.co/64" class="rounded"> <strong>Iconed List</strong></div>
            </a>
            <div class="nested-wrapper" id="s4-iconed">
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-star-fill text-warning me-2"></i> Favorit</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-heart-fill text-danger me-2"></i> Like</div>
                </div>
                <div class="listview-item border-0 ps-4">
                    <div class="col"><i class="bi bi-bookmark-fill text-primary me-2"></i> Simpan</div>
                </div>
            </div>

            <a href="javascript:void(0);" class="listview-item nested-trigger" data-target="s4-media">
                <div class="col"><img src="https://placehold.co/64" class="rounded"> <strong>Media List</strong></div>
            </a>
            <div class="nested-wrapper" id="s4-media">
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 1</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 2</strong><span>Desc</span></div>
                    </div>
                </div>
                <div class="listview-item border-0 ps-4 py-2">
                    <div class="col">
                        <img src="https://placehold.co/64" class="rounded me-2">
                        <div><strong>Media 3</strong><span>Desc</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>