<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__result">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="category__result-flex">
        <div class="category__result-title">
            <div class="category__subtitle">
                <span><?= $data['right-title']['big_text'] ?></span>
                <span><?= $data['right-title']['middle_text'] ?></span>
            </div>
            <div class="category__subtitle-line">
                <?= $data['right-title']['small_text'] ?>
            </div>
        </div>
        <div class="category__result-text">
            <?= $data['text'] ?>
        </div>
    </div>
</li>