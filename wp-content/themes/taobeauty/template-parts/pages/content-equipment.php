<?php
$equipments = get_field('equipments'); 
?>

<section class="category page equipments">
    <div class="container">
        <h2 class="category-page__title"><?php the_title(); ?></h2>
        <?php if ($equipments) : ?>
            <?php $count = count($equipments); ?>
            <ul class="category__content-block">
                <?php foreach ($equipments as $key => $equipment) : ?>
                    <li class="category__equipment-item">
                        <div class="category__counter">
                            <div class="category__number"><?= $key + 1 ?></div>
                            <div class="category__number"><?= $count ?></div>
                        </div>
                        <div class="category__equipment-text">
                            <h3>
                                <?= $equipment['title'] ?>
                            </h3>
                            <a class="category__docs-link" href="<?= $equipment['file']?>" target="_blank">
                                <div class="category__docs-bg">
                                    <div class="file">
                                        <div class="file-extension"><?= pathinfo($equipment['file'])['extension'] ?></div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/pdf.svg" alt="" >
                                    </div>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/pdf-arrow.svg" alt="" class="file-arrow">
                                </div>
                                <p class="category__docs-text">
                                    <?= $equipment['file_name']?>
                                </p>
                            </a>
                        </div>
                        <div class="category__equipment-img">
                            <img src="<?= $equipment['img'] ?>" alt="">
                        </div>
                        <div class="category__equipment-name">
                            <?= $equipment['name'] ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>