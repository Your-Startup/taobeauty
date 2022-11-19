<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__procedure">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="procedure__flex">
        <div class="first">
            <?= $data['text'] ?>
        </div>
        <ul class="procedure__stages">
            <?php foreach ($data['stage'] as $stage) :  ?>
                <li>
                    <span><?= $stage['title'] ?></span>
                    <span><?= $stage['text'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="second">
            <?= $data['text_2'] ?>
        </div>
        <ul>
            <?php foreach ($data['table'] as $item) :  ?>
                <li>
                    <span><?= $item['title'] ?></span>
                    <span><?= $item['text'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</li>