<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Sticky Listview</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <!-- Group A -->
        <div class="listview-title sticky-title">
            <strong>A</strong>
        </div>
        <div class="listview mb-2">
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Aberdeen</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Abiko</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Alberto</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Akane</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Areka</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Azuhito</div>
                </div>
            </a>
        </div>

        <!-- Group B -->
        <div class="listview-title sticky-title d-flex justify-content-between align-items-center">
            <strong>B</strong>
            <a href="#" class="text-primary" style="font-size: 12px; text-decoration: none;">Change</a>
        </div>
        <div class="listview mb-2">
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Barrie</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Belfast</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Bella</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Betrand</div>
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div>Belliano</div>
                </div>
            </a>
        </div>

        <!-- Group C -->
        <div class="listview-title sticky-title d-flex justify-content-between align-items-center">
            <strong>C</strong>
            <span class="text-muted" style="font-size: 12px;">2 Items</span>
        </div>
        <div class="listview mb-2">
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="bg-primary rounded me-2" style="width:32px; height:32px"></div>
                    Caen
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <div class="bg-primary rounded me-2" style="width:32px; height:32px"></div>
                    Cairns
                </div>
            </a>
        </div>

        <!-- Group D -->
        <div class="listview-title sticky-title d-flex justify-content-between align-items-center">
            <strong>D</strong>
            <span class="badge badge-primary">New</span>
        </div>
        <div class="listview mb-2">
            <a href="#" class="listview-item">
                <div class="col">
                    <img src="https://placehold.co/32" class="rounded-circle me-2" alt="Fuji">
                    Drian
                </div>
            </a>
            <a href="#" class="listview-item">
                <div class="col">
                    <img src="https://placehold.co/32" class="rounded-circle me-2" alt="Frankfurt">
                    Derry
                </div>
            </a>
        </div>

        <!-- Group Select (Checkbox) -->
        <div class="listview-title sticky-title d-flex justify-content-between align-items-center">
            <strong>Select (Multiple)</strong>
        </div>
        <div class="listview mb-2">
            <label class="listview-item">
                <div class="col">
                    <div class="bg-info rounded me-2 d-flex align-items-center justify-content-center" style="width:32px; height:32px">
                        <i class="bi bi-camera text-white"></i>
                    </div>
                    Photography
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check1">
                </div>
            </label>
            <label class="listview-item">
                <div class="col">
                    <div class="bg-info rounded me-2 d-flex align-items-center justify-content-center" style="width:32px; height:32px">
                        <i class="bi bi-bicycle text-white"></i>
                    </div>
                    Cycling
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check2" checked>
                </div>
            </label>
        </div>

        <!-- Group Radio (Single Select) -->
        <div class="listview-title sticky-title">
            <strong>Choose One (Radio)</strong>
        </div>
        <div class="listview mb-2">
            <label class="listview-item">
                <div class="col">
                    <div class="bg-warning rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:32px; height:32px">
                        <i class="bi bi-credit-card text-white"></i>
                    </div>
                    Bank Transfer
                </div>
                <div class="form-check">
                    <input type="radio" name="payment" class="form-check-input" id="radio1" checked>
                </div>
            </label>
            <label class="listview-item">
                <div class="col">
                    <div class="bg-warning rounded-circle me-2 d-flex align-items-center justify-content-center" style="width:32px; height:32px">
                        <i class="bi bi-wallet2 text-white"></i>
                    </div>
                    E-Wallet
                </div>
                <div class="form-check">
                    <input type="radio" name="payment" class="form-check-input" id="radio2">
                </div>
            </label>
        </div>

        <!-- Group Content Example -->
        <div class="listview-title sticky-title d-flex justify-content-between align-items-center">
            <strong>Content Example</strong>
            <span class="badge badge-primary">New</span>
        </div>
        <div class="listview mb-2">
            <div class="p-3 text-start text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae ratione veniam minus cum recusandae voluptatum consequatur dolor tempora sequi, possimus blanditiis omnis aspernatur harum natus quaerat aliquid quos iure, nisi accusantium maxime inventore. Ipsam, inventore. Eaque voluptatibus quo iure molestias ea excepturi laudantium magnam? Architecto dicta at praesentium maiores commodi deserunt eos corrupti temporibus vero, culpa vel sed aut saepe.
                <br><br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae placeat adipisci quae. Omnis ab adipisci illo cum nostrum doloribus inventore suscipit, provident eum numquam culpa fuga? Hic nihil exercitationem maxime repellat cum, aliquam aut esse et dolorem fugit! Optio perferendis error magnam itaque hic veniam deserunt aliquam quis alias culpa!
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>