<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__effect">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <ul class="category__effect-images">
        <?php foreach ($data['imgs'] as $img) : ?>
            <li>
                <div class="category__effect-title"><?= $img['title'] ?></div>
                <div class="category__effect-img">
                    <img src="<?= $img['img'] ?>" alt="">
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</li>