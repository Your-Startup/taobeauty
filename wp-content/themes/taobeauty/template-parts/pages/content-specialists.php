<?php
$specialists = get_posts(array(
    'numberposts'      => -1,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'specialists',
    'suppress_filters' => true,
));
?>

<section class="category category-spec">
    <div class="container">
        <h1 class="category__heading"><?php the_title(); ?></h1>
    </div>
    <?php if ($specialists) : ?>
        <?php $count = count($specialists); ?>
        <ul class="category__list">
            <?php foreach ($specialists as $key => $specialist) : ?>
                <?php $data = get_fields($specialist->ID); ?>
                <li class="category__item accordion">
                    <div class="container">
                        <div class="category__counter">
                            <div class="category__number"><?= $key + 1 ?></div>
                            <div class="category__number"><?= $count ?></div>
                        </div>
                        <div class="category__img category__img-spec">
                            <img src="<?= $data['img'] ?>" alt="">
                        </div>
                        <div class="category__flex">
                            <h2 class="category__title"><?= $specialist->post_title ?></h2>
                            <h2 class="category__subtitle"><?= $data['post'] ?></h2>
                            <div class="category__text">
                                <?= $data['status'] ?>. <br>
                                <?= $data['experience'] ?>.
                            </div>
                            <div class="category__content accordion__content">
                                <div class="category-spec__wrap">
                                    <h3 class="category__spec-heading">
                                        Образование
                                    </h3>
                                    <div class="category__specialist">
                                        <div class="category__spec-content">
                                            <?php if ($data['basic_education']) : ?>
                                                <div class="category__spec-text">
                                                    <h4>Основное образование:</h4>
                                                    <?= $data['basic_education'] ?> 
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($data['additional_education']) : ?>
                                                <div class="category__spec-text">
                                                    <h4>Дополнительное образование:</h4>
                                                    <?= $data['additional_education'] ?> 
                                                </div>
                                            <?php endif; ?> 
                                            <?php if ($data['professional_development']) : ?>
                                                <div class="category__spec-text">
                                                    <h4>Повышение квалификации:</h4>
                                                    <?= $data['professional_development'] ?> 
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                        <div class="category__spec-imgs">
                                            <?php if ($data['certificates']) : ?>
                                                <?php foreach ($data['certificates'] as $certificate) : ?>
                                                    <img src="<?= $certificate ?>" alt="">
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category__links">
                                <button class="yellow__btn-link category__link">Записаться</button>
                                <button class="border-btn category__link js-more">Подробнее</button>
                            </div>
                            <button class="category__arr accordion__heading">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/acc-prices.svg" alt="">
                            </button>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
