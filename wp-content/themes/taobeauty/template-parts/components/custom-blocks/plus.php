<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__plus-list fourth">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="category__plus-flex">
        <?php foreach ($data['items'] as $item) : ?>
            <div class="category__plus">
                <img src="<?= get_template_directory_uri() ?>/assets/img/plus.svg" alt="">
                <div class="category__plus-text">
                    <?= $item['text'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</li>