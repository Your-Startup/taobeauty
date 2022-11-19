<?php
/**
 * @var $this->data
 */
$data = $this->data;
?>
<li class="category__procedure">
    <h3 class="category__plus-heading"><?= $data['title'] ?></h3>
    <div class="procedure__flex">
        <?= $data['text'] ?>
        <ul>
            <?php foreach ($data['table'] as $row) : ?>
                <li>
                    <span><?= $row['title'] ?></span>
                    <span><?= $row['text'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</li>