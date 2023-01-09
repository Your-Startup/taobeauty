<?php 
$stocks = get_posts([
    'numberposts'      => -1,
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'stocks',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
]);
?>

<section class="sale">
    <div class="container">
        <h1 class="sale__heading">
            события <span>и</span> спецпредложения
        </h1>
        <?php if ($stocks) : ?>
            <ul class="sale__list">
                <?php foreach ($stocks as $stock) : ?>
                    <?php $stock->data = get_fields($stock->ID); ?>
                    <li class="sale__item">
                        <img src="<?= $stock->data['img'] ?>" alt="">
                        <div class="sale__date"><?= $stock->data['date'] ?></div>
                        <h3 class="sale__title"><?= $stock->post_title ?></h3>
                        <div class="sale__text">
                            <?= $stock->data['text'] ?>
                        </div>
                        <button class="sale__link yellow__btn-link js-open-popup" data-id="<?= $stock->ID ?>" data-popup="info">Получить скидку</button>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>