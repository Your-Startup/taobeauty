<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__tech">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="category__tech-flex">
        <?= $data['text'] ?>
        <div class="category__effect-img">
            <img src="<?= $data['img'] ?>" alt="">
        </div>
    </div>
</li>