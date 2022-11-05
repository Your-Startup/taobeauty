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

    if (document.querySelector('.main-slider__slider.swiper')) {
        const mainSlider = new Swiper('.main-slider__slider.swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 1000,
            pagination: {
                el: '.main-slider__pagination',
                clickable: true,
                renderBullet: function(index, className) {
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

    if (document.querySelector('.accordion__block')) {
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

                if (this.classList.contains('block-1')) {
                    img1.style.left = 0;
                    img1.style.top = 0;

                    img2.style.left = 0;
                    img2.style.top = `45%`;

                    img3.style.top = 0;
                    img3.style.right = 0;
                }

                if (this.classList.contains('block-2')) {
                    img1.style.left = 0;
                    img1.style.top = `60%`;

                    img2.style.left = `100%`;
                    img2.style.top = `45%`;

                    img3.style.top = 0;
                    img3.style.right = 0;
                }

                if (this.classList.contains('block-3')) {
                    img1.style.left = 0;
                    img1.style.top = `10%`;

                    img2.style.left = `100%`;
                    img2.style.top = `45%`;

                    img3.style.top = 0;
                    img3.style.right = 0;
                }

                if (this.classList.contains('block-4')) {
                    img1.style.left = 0;
                    img1.style.top = `20%`;

                    img2.style.left = 0;
                    img2.style.top = `80%`;

                    img3.style.top = `90%`;
                    img3.style.right = 0;
                }

                if (this.classList.contains('block-5')) {
                    img1.style.left = 0;
                    img1.style.top = `40%`;

                    img2.style.left = `100%`;
                    img2.style.top = `80%`;

                    img3.style.top = `50%`;
                    img3.style.right = 0;
                }
            });

            document.querySelector('.services__list').addEventListener('mouseleave', () => {
                decorImgs.forEach(img => {
                    img.style.display = 'none';
                });
            });
        });
    }

    if (document.querySelector('.accordion')) {
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

    if (document.querySelector('.prices__btn')) {
        let btns = document.querySelectorAll('.prices__btn');
        btns.forEach(btn => {
            btn.addEventListener('click', ClosedAcc);
        })
    }

    if (document.querySelector('.area__slider.swiper')) {
        const areaSlider = new Swiper('.area__slider.swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 1000,
            spaceBetween: 70,
            pagination: {
                el: '.area__pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.area-next',
                prevEl: '.area-prev',
            },
            autoplay: {
                delay: 2000,
            },
        });
    }

    if (document.querySelector('.specialists__slider')) {
        // swiper.on('slideChange', function (index) {
        // 
        // });

        const content = document.querySelector('.specialists__content');
        const heading = document.querySelector('.specialists__heading');

        function setLeft(setElem, example) {
            setElem.style.left = `${example.getBoundingClientRect().left}px`;
        }

        setLeft(content, heading);

        window.addEventListener('resize', setLeft(content, heading));
    }

    if (document.querySelector('.swiper.blog__slider')) {
        const mainSlider = new Swiper('.swiper.blog__slider', {
            direction: 'horizontal',
            loop: false,
            speed: 1000,
            spaceBetween: 170,
            navigation: {
                nextEl: '.blog-next',
                prevEl: '.blog-prev',
            },
            autoplay: {
                delay: 2000,
            },
        });
    }

    if (document.querySelector('#contacts-map')) {
        ymaps.ready(init);

        function init() {
            let myMap = new ymaps.Map("contacts-map", {
                center: [55.76, 37.64],
                zoom: 7,
                controls: []
            });
        }

        const bg = document.querySelector('.contacts__bg');
        const btn = document.querySelector('.contacts__btn');
        const map = document.querySelector('#contacts-map');

        bg.addEventListener('click', () => {
            map.classList.toggle('active');
            if (map.classList.contains('active')) {
                map.style.transform = 'translateX(0)';
            } else {
                map.removeAttribute('style');
            }
        });
    }
});