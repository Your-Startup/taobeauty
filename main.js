document.addEventListener('DOMContentLoaded', () => {

  const openAccordion = (accordion) => {
    const content = accordion.querySelector(".accordion__content");
    accordion.classList.add("opend");
    content.style.maxHeight = content.scrollHeight + "px";
  };
  
  const closeAccordion = (accordion) => {
    const content = accordion.querySelector(".accordion__content");
    accordion.classList.remove("opend");
    content.style.maxHeight = null;
  };

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
        autoplay: {
          delay: 3000,
        },
    });
  }

  if(document.querySelector('.accordion__block')) {
    const accordionsServices = document.querySelectorAll(".accordion__block");

    accordionsServices.forEach((accordion) => {
      const heading = accordion.querySelector(".accordion__heading");
      const content = accordion.querySelector(".accordion__content");
    
      heading.onclick = () => {
        if (content.style.maxHeight) {
          closeAccordion(accordion);
        } else {
          accordionsServices.forEach((accordion) => closeAccordion(accordion));
          openAccordion(accordion);
        }
      };
    });
  }

  if(document.querySelector('.accordion')) {
    const accordionsPrices = document.querySelectorAll('.accordion');

    accordionsPrices.forEach(accordion => {
      const heading = accordion.querySelector(".accordion__heading");
      const content = accordion.querySelector(".accordion__content");
    
      heading.onclick = () => {
        if (content.style.maxHeight) {
          closeAccordion(accordion);
          accordion.parentElement.classList.remove('opend')
        } else {
          accordionsPrices.forEach((accordion) => {
            closeAccordion(accordion);
            accordion.parentElement.classList.remove('opend');
          });
          openAccordion(accordion);
          accordion.parentElement.classList.add('opend')
        }
      };
    });
  }
});