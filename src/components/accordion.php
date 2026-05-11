<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Accordion</div>
        <div class="right">
        </div>
    </div>

    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Full Accordion -->
        <div class="listview-title mt-2">Full Accordion</div>
        <div class="accordion listview" id="accordionExample1">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc1">
                        <div class="col">
                            <div>About</div>
                        </div>
                    </button>
                </h2>
                <div id="acc1" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc2">
                        <div class="col">Details</div>
                    </button>
                </h2>
                <div id="acc2" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus, corrupti sequi accusamus perferendis a?
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc3">
                        <div class="col">Comments</div>
                    </button>
                </h2>
                <div id="acc3" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus, corrupti sequi accusamus perferendis a?
                    </div>
                </div>
            </div>
        </div>

        <!-- Inset Accordion -->
        <div class="listview-title mt-2">Inset Accordion</div>
        <div class="accordion listview px-4 py-3" id="accordionExample2">

            <div class="border-inset">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIn1">
                        <div class="col">
                            <div>About</div>
                        </div>
                    </button>
                </h2>
                <div id="accIn1" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend.
                    </div>
                </div>
            </div>

            <div class="border-inset">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIn2">
                        <div class="col">Details</div>
                    </button>
                </h2>
                <div id="accIn2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus, corrupti sequi accusamus perferendis a?
                    </div>
                </div>
            </div>

            <div class="border-inset">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIn3">
                        <div class="col">Comments</div>
                    </button>
                </h2>
                <div id="accIn3" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore temporibus, corrupti sequi accusamus perferendis a?
                    </div>
                </div>
            </div>
        </div>

        <!-- Iconed Accordion -->
        <div class="listview-title mt-2">Iconed Accordion</div>
        <div class="accordion listview" id="accordionExample3">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIcon1">
                        <div class="col">
                            <div class="listview-icon text-dark">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <div>About</div>
                        </div>
                    </button>
                </h2>
                <div id="accIcon1" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                    <div class="accordion-body iconed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maxime sint vitae. Earum, iusto reprehenderit.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIcon2">
                        <div class="col">
                            <div class="listview-icon text-dark">
                                <i class="bi bi-file-earmark"></i>
                            </div>
                            <div>Details</div>
                        </div>
                    </button>
                </h2>
                <div id="accIcon2" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                    <div class="accordion-body iconed">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima, modi delectus reiciendis neque reprehenderit dolores?
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accIcon3">
                        <div class="col">
                            <div class="listview-icon text-dark">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <div>Comments</div>
                        </div>
                    </button>
                </h2>
                <div id="accIcon3" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                    <div class="accordion-body iconed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, architecto necessitatibus explicabo natus quisquam doloribus.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>