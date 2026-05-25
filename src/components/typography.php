<?php include __DIR__ . '/../partials/header.php' ?>

<div id="components">

    <div class="app-header">
        <div class="left">
            <a href="javascript:void()" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="page-title">Typography</div>
        <div class="right">
        </div>
    </div>

    <div class="app-container px-3 pt-3">

        <div class="mb-4">
            <div class="typo-wide-block p-0 overflow-hidden">
                <div class="table-responsive">
                    <table class="table typo-table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="ps-3">Sass Variable</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-3"><code>$fontFamily</code></td>
                                <td class="text-secondary">Default font family</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSizeHeadingXLarge</code></td>
                                <td class="text-secondary">Heading XLarge Size</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSizeHeadingLarge</code></td>
                                <td class="text-secondary">Heading Large Size</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSizeHeading</code></td>
                                <td class="text-secondary">Heading Size</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSize</code></td>
                                <td class="text-secondary">Default body size</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSizeSub</code></td>
                                <td class="text-secondary">Sub size</td>
                            </tr>
                            <tr>
                                <td class="ps-3"><code>$fontSizeCaption</code></td>
                                <td class="text-secondary">Caption size</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <div class="typo-section-title">Headings</div>
            <div class="typo-wide-block py-3">
                <h1 class="mb-2">h1. heading</h1>
                <h2 class="mb-2">h2. heading</h2>
                <h3 class="mb-2">h3. heading</h3>
                <h4 class="mb-2">h4. heading</h4>
                <h5 class="mb-2">h5. heading</h5>
                <h6 class="m-0">h6. heading</h6>
            </div>
        </div>

        <div class="mb-4">
            <div class="typo-section-title">Lead</div>
            <div class="typo-wide-block">
                <p class="lead m-0 fs-5 text-secondary">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus.
                </p>
            </div>
        </div>

        <div class="mb-4">
            <div class="typo-section-title">Customizing headings</div>
            <div class="typo-wide-block d-grid gap-3">
                <h2 class="m-0">
                    Title
                    <small class="text-muted fw-normal fs-5">with text</small>
                </h2>
                <h2 class="d-flex justify-content-between align-items-center m-0">
                    <span>Title</span>
                    <span class="badge bg-primary rounded-pill fs-6 px-3">509</span>
                </h2>
            </div>
        </div>

        <div class="mb-4">
            <div class="typo-section-title">Inline text elements</div>
            <div class="typo-wide-block d-grid gap-2 text-secondary small">
                <p class="m-0">You can use the mark tag to <mark class="px-1 rounded-1">highlight</mark> text.</p>
                <p class="m-0"><del>This line of text is meant to be treated as deleted text.</del></p>
                <p class="m-0"><s>This line of text is meant to be treated as no longer accurate.</s></p>
                <p class="m-0"><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                <p class="m-0"><u>This line of text will render as underlined</u></p>
                <p class="m-0"><small>This line of text is meant to be treated as fine print.</small></p>
                <p class="m-0"><strong class="text-dark">This line rendered as bold text.</strong></p>
                <p class="m-0"><em class="text-dark">This line rendered as italicized text.</em></p>
            </div>
        </div>

    </div>

    <?php include __DIR__ . '/../partials/bottommenu.php' ?>
</div>

<?php include __DIR__ . '/../partials/footer.php' ?>