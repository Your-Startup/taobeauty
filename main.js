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

  function ClosedAcc() {
    this.parentElement.style.maxHeight = null;
    this.parentElement.parentElement.parentElement.classList.remove("opend");
  }

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
    const img1 = document.querySelector('.img-1');
    const img2 = document.querySelector('.img-2');
    const img3 = document.querySelector('.img-3');
    const decorImgs = document.querySelectorAll('.services__decor-img');

    accordionsServices.forEach((accordion) => {
      const heading = accordion.querySelector(".accordion__heading");
      const content = accordion.querySelector(".accordion__content");
    
      accordion.onmouseenter = () => {
        if (content.style.maxHeight) {
          closeAccordion(accordion);
        } else {
          accordionsServices.forEach((accordion) => closeAccordion(accordion));
          openAccordion(accordion);
        }
      };

      accordion.onmouseleave = () => {
        closeAccordion(accordion);
      }
    });

    accordionsServices.forEach(acc => {
      acc.addEventListener('mouseenter', function() {

        decorImgs.forEach(img => {
          img.style.display = 'block';
        });

        img1.src = this.dataset.imgone;
        img2.src = this.dataset.imgtwo;
        img3.src = this.dataset.imgthree;

        if(this.classList.contains('block-1')) {
          img1.style.left = 0;
          img1.style.top = 0;

          img2.style.left = 0;
          img2.style.top = `45%`;

          img3.style.top = 0;
          img3.style.right = 0;
        }

        if(this.classList.contains('block-2')) {
          img1.style.left = 0;
          img1.style.top = `60%`;

          img2.style.left = `100%`;
          img2.style.top = `45%`;

          img3.style.top = 0;
          img3.style.right = 0;
        }

        if(this.classList.contains('block-3')) {
          img1.style.left = 0;
          img1.style.top = `10%`;

          img2.style.left = `100%`;
          img2.style.top = `45%`;

          img3.style.top = 0;
          img3.style.right = 0;
        }

        if(this.classList.contains('block-4')) {
          img1.style.left = 0;
          img1.style.top = `20%`;

          img2.style.left = 0;
          img2.style.top = `80%`;

          img3.style.top = `90%`;
          img3.style.right = 0;
        }

        if(this.classList.contains('block-5')) {
          img1.style.left = 0;
          img1.style.top = `40%`;

          img2.style.left = `100%`;
          img2.style.top = `80%`;

          img3.style.top = `50%`;
          img3.style.right = 0;
        }
      });

        document.querySelector('.services__wrap').addEventListener('mouseleave', () => {
          decorImgs.forEach(img => {
            img.style.display = 'none';
          });
        });
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

  if(document.querySelector('.prices__btn')) {
    let btns = document.querySelectorAll('.prices__btn');
    btns.forEach(btn => {
      btn.addEventListener('click', ClosedAcc);
    })
  }
});