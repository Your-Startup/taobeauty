<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__plus-list category__time tripple">
    <div class="category__plus-flex">
        <?php foreach ($data as $item) : ?>
            <div class="category__result-title category__plus">
                <div class="category__subtitle">
                    <?php if ($item['big-text']) : ?>
                        <span><?= $item['big-text'] ?></span>
                    <?php endif; ?>
                    <?php if ($item['small-text']) : ?>
                        <span><?= $item['small-text'] ?></span>
                    <?php endif; ?>
                </div>
                <?php if ($item['sub-title']) : ?>
                    <div class="category__subtitle-line">
                        <?= $item['sub-title'] ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</li>