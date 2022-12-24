<?php 
/**
 * @var $data;
 */

if ($data && $data['success']) : ?>
    <div class="popup__answer">
        <h4><?=  $data['name']?>, спасибо за вашу заявку!</h4>
        <p>Мы свяжемся с вами в ближайшее время.</p>
    </div>
<?php else: ?> 
    <div class="popup__answer">
        <h4>Произошла ошибка при отправке заявки.</h4>
        <p>Пожалуйста, попробуйте позже или обратитесь на почту <a href="mailto:<?= get_field('email', 'options')?>"><?= get_field('email', 'options')?></a></p>
    </div>
<?php endif; ?>