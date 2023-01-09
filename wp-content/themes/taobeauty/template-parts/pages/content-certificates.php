<?php 
$data = get_fields();
?>

<section class="certificates-page__title">
    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
    <img src="<?= $data['background'] ?>" alt="">
</section>
<section class="certificates-page__text">
    <div class="container">
        <div class="certificates-page__wrap">
            <img src="<?= $data['img'] ?>" alt="">
            <div class="certificates-page__content">
                <?= $data['text'] ?>
            </div>
        </div>
    </div>
</section>
<section class="certificates-page__steps">
    <div class="container">
        <form action="#" class="certificates-page__form">
            <div class="certificates-page__step step-1">
                <div class="step-1__title">
                    <div>Шаг 1</div>
                    <div>Выбор изображения</div>
                </div>
                <div class="step-1__wrap">
                    <?php if ($data['imgs']) : ?>
                        <?php foreach ($data['imgs'] as $key => $img) : ?>
                            <label class="step-1__label" for="img-<?= $key ?>">
                                <img src="<?= $img ?>" alt="">
                                <input type="radio" name="image" id="img-<?= $key ?>" value="<?= $key ?>">
                                <div class="step-1__borders"></div>
                            </label>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="certificates-page__step step-2">
                <div class="step-2__title">
                    <div>Шаг 2</div>
                    <div>Информация</div>
                </div>
                <div class="step-2__wrap">
                    <div class="step-2__item">
                        <label class="step-2__label" for="select">
                            <span>Номинал</span>
                            <?php if ($data['denominations']) : ?>
                                <div class="select">
                                    <input type="hidden" name="price" value="<?= $data['denominations'][0]['value'] ?>">
                                    <div class="select-value"><?= $data['denominations'][0]['value'] ?></div>
                                    <div class="select-options">
                                        <?php foreach ($data['denominations'] as $denomination) : ?>
                                            <div class="select-option" data-value="<?= $denomination['value'] ?>"><?= $denomination['value'] ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="select">
                                    <input type="hidden" name="price" value="">
                                    <div class="select-value"></div>
                                    <div class="select-options">
                                    </div>
                                </div>
                            <?php endif; ?>
                        </label>
                        <label class="step-2__label" for="name">
                            <span>Имя</span>
                            <input type="text" id="name" name="name" placeholder="Для кого предназначен сертификат">
                        </label>
                        <label class="step-2__label" for="phone">
                            <span>Телефон</span>
                            <input type="text" id="phone" name="phone" placeholder="Номер телефона">
                        </label>
                    </div>
                    <div class="step-2__item">
                        <label class="step-2__label" for="area">
                            <span>Ваше сообщение</span>
                            <textarea name="text" id="area" cols="30" rows="10" placeholder="Напишите здесь что-нибудь."></textarea>
                        </label>
                        <label class="step-2__label" for="email">
                            <span>Email</span>
                            <input type="email" name="email" id="email" placeholder="e-mail, на который будет отправлен сертификат">
                        </label>
                    </div>
                    <a href="#" class="certificates-form-submit yellow__btn-link">
                        Купить
                    </a>
                </div>
            </div>
        </form>
    </div>
</section>