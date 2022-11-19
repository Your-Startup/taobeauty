<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__prices">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="prices__pricelist">
        <ul>
            <?php foreach ($data['table'] as $row) : ?>
                <li class="prices__priceitem">
                    <span><?= $row['title'] ?></span>
                    <span><?= $row['text'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</li>