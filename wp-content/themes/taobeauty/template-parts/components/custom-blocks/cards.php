<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__direction">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <ul class="category__directions-list">
        <?php foreach ($data['items'] as $card) : ?>
            <li class="category__direction-item">
                <div class="category__direction-title">
                    <?= $card['title'] ?>
                </div>
                <div class="category__direction-text">
                    <?= $card['text'] ?>
                </div>
                <div class="category__direction-icon">
                    <img src="<?= $card['icon'] ?>" alt="">
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</li>