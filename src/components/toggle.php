<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Toggle</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">

        <div class="px-3 pt-3 fw-bold">Android</div>

        <!-- ════ ANDROID PANEL ════ -->
        <div id="panel-android" class="panel android-body" style="margin-top:12px;">

            <div class="android-list-title">Simple</div>
            <ul class="android-listview">
                <li>
                    <span class="android-list-label">Toggle 1</span>
                    <label class="android-switch">
                        <input type="checkbox">
                        <div class="android-track"></div>
                        <div class="android-thumb"></div>
                    </label>
                </li>
                <li>
                    <span class="android-list-label">Toggle 2</span>
                    <label class="android-switch">
                        <input type="checkbox" checked>
                        <div class="android-track"></div>
                        <div class="android-thumb"></div>
                    </label>
                </li>
                <li>
                    <span class="android-list-label">Toggle 3</span>
                    <label class="android-switch">
                        <input type="checkbox">
                        <div class="android-track"></div>
                        <div class="android-thumb"></div>
                    </label>
                </li>
            </ul>

            <div class="android-list-title" style="margin-top:4px;">With Icon Listview</div>
            <ul class="android-icon-list">
                <li>
                    <div class="item">
                        <div class="android-icon-box rounded-circle" style="background:#1976d2;">
                            <i class="bi bi-alarm text-white mt-1"></i>
                        </div>
                        <div class="android-in">
                            <div class="android-in-row">
                                <div>
                                    <div class="title">Alarm</div>
                                    <div class="subtitle">05:20 AM</div>
                                </div>
                                <label class="android-switch">
                                    <input type="checkbox" checked>
                                    <div class="android-track"></div>
                                    <div class="android-thumb"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="android-icon-box rounded-circle" style="background:#d32f2f;">
                            <i class="bi bi-repeat text-white mt-1"></i>
                        </div>
                        <div class="android-in">
                            <div class="android-in-row">
                                <div class="title">Everyday</div>
                                <label class="android-switch">
                                    <input type="checkbox">
                                    <div class="android-track"></div>
                                    <div class="android-thumb"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <!-- ════ iOS PANEL ════ -->
        <div class="px-3 pt-3 fw-bold">IOS</div>

        <div id="panel-ios" class="panel ios-body" style="margin-top:12px;">

            <div class="ios-list-title">Simple</div>
            <ul class="ios-listview">
                <li>
                    <span class="ios-list-label">Toggle 1</span>
                    <label class="ios-switch">
                        <input type="checkbox">
                        <div class="ios-track"></div>
                        <div class="ios-thumb"></div>
                    </label>
                </li>
                <li>
                    <span class="ios-list-label">Toggle 2</span>
                    <label class="ios-switch">
                        <input type="checkbox" checked>
                        <div class="ios-track"></div>
                        <div class="ios-thumb"></div>
                    </label>
                </li>
                <li>
                    <span class="ios-list-label">Toggle 3</span>
                    <label class="ios-switch">
                        <input type="checkbox">
                        <div class="ios-track"></div>
                        <div class="ios-thumb"></div>
                    </label>
                </li>
            </ul>

            <div class="ios-list-title" style="margin-top:4px;">With Icon Listview</div>
            <ul class="ios-icon-list">
                <li>
                    <div class="item">
                        <div class="ios-icon-box rounded-circle" style="background:#007AFF;">
                            <i class="bi bi-alarm text-white mt-1"></i>
                        </div>
                        <div class="ios-in">
                            <div class="ios-in-row">
                                <div>
                                    <div class="title">Alarm</div>
                                    <div class="subtitle">05:20 AM</div>
                                </div>
                                <label class="ios-switch">
                                    <input type="checkbox" checked>
                                    <div class="ios-track"></div>
                                    <div class="ios-thumb"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="ios-icon-box rounded-circle" style="background:#ff3b30;">
                            <i class="bi bi-repeat text-white mt-1"></i>
                        </div>
                        <div class="ios-in">
                            <div class="ios-in-row">
                                <div class="title">Everyday</div>
                                <label class="ios-switch">
                                    <input type="checkbox">
                                    <div class="ios-track"></div>
                                    <div class="ios-thumb"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>