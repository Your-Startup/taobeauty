document.addEventListener('DOMContentLoaded', () => {

    class Accordion {
      constructor(element, state = false) {
        if(typeof element === 'object') {
          this.element = element
        } else if(typeof element === 'string' && element.startsWith('#' || '.')) {
          this.element = document.querySelector(element);
        } else {
          throw new TypeError('Некорректный селектор');
        }
        this.heading = this.element.querySelector('.accordion__heading');
        this.content = this.element.querySelector('.accordion__content');
        this.state = state;
        this.addListeners = this.addListeners.bind(this);
        this.init();
      }
    
      open() {
        this.element.classList.add('opend');
        this.content.style.maxHeight = `${this.content.scrollHeight}px`;
        this.state = true;
      }
    
      close() {
        this.element.classList.remove('opend');
        this.content.style.maxHeight = `0`;
        this.state = false;
      }
    
      addListeners() {
        this.heading.addEventListener('click', () => {
          if(this.state === true) {
            this.close();
          } else {
            this.open();
          }
        });
      }
    
      init() {
        this.addListeners();
      }
    };
  
    if(document.querySelector('.main-slider__slider.swiper')) {
      const mainSlider = new Swiper('.main-slider__slider.swiper', {
          direction: 'horizontal',
          loop: true,
          speed: 2000,
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
            delay: 5000,
          },
      });
    }
  
    if(document.querySelector('.accordion__block')) {
      const accList = document.querySelectorAll('.accordion__block');
      accList.forEach(item => new Accordion(item));
    }
  });