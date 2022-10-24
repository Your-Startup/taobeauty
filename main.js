document.addEventListener('DOMContentLoaded', () => {
   if(document.querySelector('.main-slider__slider.swiper')) {
    const mainSlider = new Swiper('.main-slider__slider.swiper', {
        direction: 'horizontal',
        loop: true,
        pagination: {
          el: '.main-slider__pagination',
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        navigation: {
          nextEl: '.main-slider__next',
        },
    });
   }
});