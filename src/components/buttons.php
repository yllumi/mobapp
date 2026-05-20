<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Buttons</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container">
        <div class="phone-col">
            <div class="phone-frame android">
                <div class="phone-body">
                    <!-- Filled -->
                    <div class="sec-title">Filled Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap">
                            <button class="btn btn-primary">PRIMARY</button>
                            <button class="btn btn-secondary">SECONDARY</button>
                            <button class="btn btn-success">SUCCESS</button>
                            <button class="btn btn-danger">DANGER</button>
                            <button class="btn btn-warning">WARNING</button>
                            <button class="btn btn-info">INFO</button>
                            <button class="btn btn-light">LIGHT</button>
                            <button class="btn btn-dark">DARK</button>
                            <button class="btn btn-link text-decoration-none fw-semibold">LINK</button>
                        </div>
                    </div>

                    <!-- Border Radius -->
                    <div class="sec-title">Border Radius</div>
                    <div class="sec-body">
                        <div class="gap-wrap col">
                            <div><button class="btn btn-primary">DEFAULT</button> <span class="sec-note">default
                                    style</span></div>
                            <div><button class="btn btn-primary rounded">ROUNDED</button> <code>.rounded</code></div>
                            <div><button class="btn btn-primary square">SQUARE</button> <code>.square</code></div>
                        </div>
                    </div>

                    <!-- Shadowed -->
                    <div class="sec-title">Shadowed Buttons</div>
                    <div class="sec-body">
                        <p class="sec-note">Add <code>.shadowed</code> to raise button</p>
                        <div class="gap-wrap">
                            <button class="btn btn-primary shadowed">BUTTON</button>
                            <button class="btn btn-outline-primary shadowed">BUTTON</button>
                            <button class="btn btn-text-primary shadowed">BUTTON</button>
                            <button class="btn btn-primary rounded shadowed">BUTTON</button>
                            <button class="btn btn-outline-primary rounded shadowed">BUTTON</button>
                            <button class="btn btn-text-primary rounded shadowed">BUTTON</button>
                        </div>
                    </div>

                    <!-- Sizes -->
                    <div class="sec-title">Sizes</div>
                    <div class="sec-body">
                        <div class="gap-wrap col">
                            <div><button class="btn btn-primary btn-sm">BUTTON</button> <code>.btn-sm</code></div>
                            <div><button class="btn btn-primary">BUTTON</button> <span class="sec-note">Default</span>
                            </div>
                            <div><button class="btn btn-primary btn-lg">BUTTON</button> <code>.btn-lg</code></div>
                        </div>
                        <div class="spacer"></div>
                        <p class="sec-note">Full width <code>.btn-block</code></p>
                        <button class="btn btn-primary btn-sm btn-block my-3">BUTTON SM</button>
                        <div class="spacer"></div>
                        <button class="btn btn-primary btn-block my-3">BUTTON DEFAULT</button>
                        <div class="spacer"></div>
                        <button class="btn btn-primary btn-lg btn-block my-3">BUTTON LG</button>
                    </div>

                    <!-- Icon Buttons -->
                    <div class="sec-title">Icon Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap">
                            <button class="btn btn-icon btn-primary"><i class="bi bi-file-text"></i></button>
                            <button class="btn btn-icon btn-danger"><i class="bi bi-alarm"></i></button>
                            <button class="btn btn-icon btn-success"><i class="bi bi-telephone"></i></button>
                            <button class="btn btn-icon btn-warning"><i class="bi bi-lightning"></i></button>
                            <button class="btn btn-icon btn-info"><i class="bi bi-send"></i></button>
                        </div>
                        <p class="sec-note" style="margin-top:10px">Sizes</p>
                        <div class="gap-wrap" style="align-items:center">
                            <button class="btn btn-icon btn-sm btn-primary"><i class="bi bi-plus"></i></button>
                            <button class="btn btn-icon btn-primary"><i class="bi bi-plus"></i></button>
                            <button class="btn btn-icon btn-lg btn-primary"><i class="bi bi-plus"></i></button>
                        </div>
                    </div>

                    <!-- Outline -->
                    <div class="sec-title">Outline Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap">
                            <button class="btn btn-outline-primary">PRIMARY</button>
                            <button class="btn btn-outline-secondary">SECONDARY</button>
                            <button class="btn btn-outline-success">SUCCESS</button>
                            <button class="btn btn-outline-danger">DANGER</button>
                            <button class="btn btn-outline-warning">WARNING</button>
                            <button class="btn btn-outline-info">INFO</button>
                            <button class="btn btn-outline-dark">DARK</button>
                            <button class="btn btn-outline-light">LIGHT</button>
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="sec-title">Text Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap">
                            <button class="btn fw-semibold text-primary">PRIMARY</button>
                            <button class="btn fw-semibold text-secondary">SECONDARY</button>
                            <button class="btn fw-semibold text-success">SUCCESS</button>
                            <button class="btn fw-semibold text-danger">DANGER</button>
                            <button class="btn fw-semibold text-warning">WARNING</button>
                            <button class="btn fw-semibold text-info">INFO</button>
                            <button class="btn fw-semibold text-dark">DARK</button>
                            <button class="btn fw-semibold text-light">LIGHT</button>
                        </div>
                    </div>

                    <!-- Iconed Buttons -->
                    <div class="sec-title">Iconed Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap col">
                            <button class="btn btn-primary btn-sm"><i class="bi bi-file-text me-1"></i>SMALL</button>
                            <button class="btn btn-primary"><i class="bi bi-file-text me-1"></i>DEFAULT</button>
                            <button class="btn btn-primary btn-lg"><i class="bi bi-file-text me-1"></i>LARGE</button>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="sec-title">Social Buttons</div>
                    <div class="sec-body">
                        <div class="gap-wrap col">
                            <div class="gap-wrap"><button class="btn btn-facebook"><i
                                        class="bi bi-facebook me-1"></i>Facebook</button><button
                                    class="btn btn-icon btn-facebook"><i class="bi bi-facebook"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-twitter"><i
                                        class="bi bi-twitter-x me-1"></i>Twitter</button><button
                                    class="btn btn-icon btn-twitter"><i class="bi bi-twitter-x"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-instagram"><i
                                        class="bi bi-instagram me-1"></i>Instagram</button><button
                                    class="btn btn-icon btn-instagram"><i class="bi bi-instagram"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-linkedin"><i
                                        class="bi bi-linkedin me-1"></i>Linkedin</button><button
                                    class="btn btn-icon btn-linkedin"><i class="bi bi-linkedin"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-twitch"><i
                                        class="bi bi-twitch me-1"></i>Twitch</button><button
                                    class="btn btn-icon btn-twitch"><i class="bi bi-twitch"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-whatsapp"><i
                                        class="bi bi-whatsapp me-1"></i>Whatsapp</button><button
                                    class="btn btn-icon btn-whatsapp"><i class="bi bi-whatsapp"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-youtube"><i
                                        class="bi bi-youtube me-1"></i>Youtube</button><button
                                    class="btn btn-icon btn-youtube"><i class="bi bi-youtube"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-amazon"><i
                                        class="bi bi-bag me-1"></i>Amazon</button><button
                                    class="btn btn-icon btn-amazon"><i class="bi bi-bag"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-android-s"><i
                                        class="bi bi-android2 me-1"></i>Android</button><button
                                    class="btn btn-icon btn-android-s"><i class="bi bi-android2"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-apple-s"><i
                                        class="bi bi-apple me-1"></i>Apple</button><button
                                    class="btn btn-icon btn-apple-s"><i class="bi bi-apple"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-dribbble"><i
                                        class="bi bi-dribbble me-1"></i>Dribbble</button><button
                                    class="btn btn-icon btn-dribbble"><i class="bi bi-dribbble"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-skype"><i
                                        class="bi bi-skype me-1"></i>Skype</button><button
                                    class="btn btn-icon btn-skype"><i class="bi bi-skype"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-pinterest"><i
                                        class="bi bi-pinterest me-1"></i>Pinterest</button><button
                                    class="btn btn-icon btn-pinterest"><i class="bi bi-pinterest"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-dropbox"><i
                                        class="bi bi-dropbox me-1"></i>Dropbox</button><button
                                    class="btn btn-icon btn-dropbox"><i class="bi bi-dropbox"></i></button></div>
                            <div class="gap-wrap"><button class="btn btn-bitcoin"><i
                                        class="bi bi-currency-bitcoin me-1"></i>Bitcoin</button><button
                                    class="btn btn-icon btn-bitcoin"><i class="bi bi-currency-bitcoin"></i></button>
                            </div>
                            <div class="gap-wrap"><button class="btn btn-github"><i
                                        class="bi bi-github me-1"></i>Github</button><button
                                    class="btn btn-icon btn-github"><i class="bi bi-github"></i></button></div>
                        </div>
                    </div>

                    <!-- Checkbox/Radio -->
                    <div class="sec-title">Checkbox & Radio Buttons</div>
                    <div class="sec-body">
                        <p class="sec-note">Basic</p>
                        <div class="btn-group mb-2">
                            <input type="radio" class="btn-check" name="a-r1" id="a-r1a" checked>
                            <label class="btn btn-outline-primary" for="a-r1a">Apple</label>
                            <input type="radio" class="btn-check" name="a-r1" id="a-r1b">
                            <label class="btn btn-outline-primary" for="a-r1b">Banana</label>
                            <input type="radio" class="btn-check" name="a-r1" id="a-r1c">
                            <label class="btn btn-outline-primary" for="a-r1c">Orange</label>
                        </div>

                        <p class="sec-note">With icon</p>
                        <div class="btn-group mb-2">
                            <input type="radio" class="btn-check" name="a-r2" id="a-r2a" checked>
                            <label class="btn btn-outline-primary" for="a-r2a"><i
                                    class="bi bi-twitter-x me-1"></i>Twitter</label>
                            <input type="radio" class="btn-check" name="a-r2" id="a-r2b">
                            <label class="btn btn-outline-primary" for="a-r2b"><i
                                    class="bi bi-google me-1"></i>Google</label>
                        </div>

                        <p class="sec-note">Only icons</p>
                        <div class="btn-group mb-1">
                            <input type="radio" class="btn-check" name="a-r3" id="a-r3a">
                            <label class="btn btn-icon btn-outline-primary" for="a-r3a"><i
                                    class="bi bi-emoji-smile"></i></label>
                            <input type="radio" class="btn-check" name="a-r3" id="a-r3b">
                            <label class="btn btn-icon btn-outline-primary" for="a-r3b"><i
                                    class="bi bi-emoji-frown"></i></label>
                        </div>
                        <div class="btn-group mb-2">
                            <input type="radio" class="btn-check" name="a-r4" id="a-r4a">
                            <label class="btn btn-icon btn-outline-primary" for="a-r4a"><i
                                    class="bi bi-hand-thumbs-up"></i></label>
                            <input type="radio" class="btn-check" name="a-r4" id="a-r4b">
                            <label class="btn btn-icon btn-outline-primary" for="a-r4b"><i
                                    class="bi bi-hand-thumbs-down"></i></label>
                        </div>

                        <p class="sec-note">Colored</p>
                        <div class="gap-wrap col">
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c1" id="a-c1a" checked><label
                                    class="btn btn-outline-primary" for="a-c1a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c1" id="a-c1b"><label
                                    class="btn btn-outline-primary" for="a-c1b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c1" id="a-c1c"><label
                                    class="btn btn-outline-primary" for="a-c1c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c2" id="a-c2a" checked><label
                                    class="btn btn-outline-secondary" for="a-c2a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c2" id="a-c2b"><label
                                    class="btn btn-outline-secondary" for="a-c2b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c2" id="a-c2c"><label
                                    class="btn btn-outline-secondary" for="a-c2c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c3" id="a-c3a" checked><label
                                    class="btn btn-outline-danger" for="a-c3a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c3" id="a-c3b"><label
                                    class="btn btn-outline-danger" for="a-c3b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c3" id="a-c3c"><label
                                    class="btn btn-outline-danger" for="a-c3c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c4" id="a-c4a" checked><label
                                    class="btn btn-outline-success" for="a-c4a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c4" id="a-c4b"><label
                                    class="btn btn-outline-success" for="a-c4b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c4" id="a-c4c"><label
                                    class="btn btn-outline-success" for="a-c4c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c5" id="a-c5a" checked><label
                                    class="btn btn-outline-warning" for="a-c5a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c5" id="a-c5b"><label
                                    class="btn btn-outline-warning" for="a-c5b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c5" id="a-c5c"><label
                                    class="btn btn-outline-warning" for="a-c5c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c6" id="a-c6a" checked><label
                                    class="btn btn-outline-info" for="a-c6a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c6" id="a-c6b"><label
                                    class="btn btn-outline-info" for="a-c6b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c6" id="a-c6c"><label
                                    class="btn btn-outline-info" for="a-c6c">Orange</label>
                            </div>
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="a-c7" id="a-c7a" checked><label
                                    class="btn btn-outline-dark" for="a-c7a">Apple</label>
                                <input type="radio" class="btn-check" name="a-c7" id="a-c7b"><label
                                    class="btn btn-outline-dark" for="a-c7b">Banana</label>
                                <input type="radio" class="btn-check" name="a-c7" id="a-c7c"><label
                                    class="btn btn-outline-dark" for="a-c7c">Orange</label>
                            </div>
                        </div>
                    </div>

                    <div class="spacer"></div>
                </div><!-- /phone-body -->
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>