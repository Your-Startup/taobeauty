<?php
$data = get_fields();
?>

<section class="category page">
    <div class="container">
        <h1 class="category-page__title">Документы</h1>
        <ul class="category__content-block spec">
            <?php if ($data['company_name'] && $data['company_data']) : ?>
                <li class="category__prices">
                    <h3 class="category__docs-heading">Карточка организации</h3>
                    <div class="prices__pricelist">
                        <ul>
                            <li class="prices__priceitem title">
                                <?= $data['company_name'] ?>
                            </li>
                            <?php foreach ($data['company_data'] as $item) : ?>
                                <li class="prices__priceitem">
                                    <span><?= $item['title'] ?></span>
                                    <span><?= $item['value'] ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
            <?php if ($data['docs']) : ?>
                <li class="category__docs">
                    <h3 class="category__docs-heading">Документы</h3>
                    <ul class="category__docs-sublist">
                        <?php foreach ($data['docs'] as $doc) : ?>
                            <li class="category__docs-subitem">
                                <a class="category__docs-link" href="<?= $doc['file']?>" download>
                                    <div class="category__docs-bg">
                                        <div class="file">
                                            <div class="file-extension"><?= pathinfo($doc['file'])['extension'] ?></div>
                                            <img src="<?= get_template_directory_uri() ?>/assets/img/pdf.svg" alt="" >
                                        </div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/pdf-arrow.svg" alt="" class="file-arrow">
                                    </div>
                                    <p class="category__docs-text">
                                        <?= $doc['name']?>
                                    </p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if ($data['controls']) : ?>
                <li class="category__organisations">
                    <h3 class="category__organizations-heading">Контролирующие организации</h3>
                    <ul class="category__organizations-list">
                        <?php foreach ($data['controls'] as $key => $control) : ?>
                            <li>
                                <div class="category__organization-number"><?= $key + 1 ?>.</div>
                                <div class="category__organization-text">
                                    <?= $control['name'] ?>
                                </div>
                                <?php if ($control['data']) : ?>
                                    <dl class="category__organization-contacts">
                                        <?php foreach ($control['data'] as $item) : ?>
                                            <div>
                                                <dt><?= $item['title'] ?>:</dt>
                                                <dd><?= $item['value'] ?></dd>
                                            </div>
                                        <?php endforeach; ?>
                                    </dl>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>
