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
                prevEl: '.main-slider__prev'
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

        let ex, ey, EX, EY;

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
            acc.addEventListener('mouseenter', function(e) {

                ex = e.clientX;
                ey = e.clientY;

                decorImgs.forEach(img => {
                    img.style.opacity = 0;
                    img.style.transform = `scale(0)`
                });

                setTimeout(() => {
                    img1.querySelector('img').src = this.dataset.imgone;
                    img2.querySelector('img').src = this.dataset.imgtwo;
                    img3.querySelector('img').src = this.dataset.imgthree;

                    decorImgs.forEach(img => {
                        img.style.opacity = 1;
                        img.style.transform = `scale(1)`
                    });
                }, 200);

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

            accordionsServices.forEach(acc => {
                acc.addEventListener('mousemove', function(e) {
                    EX = e.x;
                    EY = e.y;

                    img1.querySelector('img').style.left = `${ex - EX}px`;
                    img1.querySelector('img').style.top = `${ey - EY}px`;

                    img2.querySelector('img').style.left = `${ex - EX}px`;
                    img2.querySelector('img').style.top = `${ey - EY}px`;

                    img3.querySelector('img').style.left = `${ex - EX}px`;
                    img3.querySelector('img').style.top = `${ey - EY}px`;
                })
            });

            document.querySelector('.services__list').addEventListener('mouseleave', () => {
                decorImgs.forEach(img => {
                    setTimeout(() => {
                        img.style.opacity = 0;
                        img.style.transform = null
                        img.querySelector('img').removeAttribute('style');
                    }, 200);
                });
            });
        });
    }

    const accordionsPrices = document.querySelectorAll('.accordion');
    if (accordionsPrices) {
        const accordions = new Accordions(accordionsPrices);
        accordions.items.forEach(accordion => {
            accordion.heading.onclick = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                } else {
                    accordions.closeAll();
                    accordions.items.forEach(accordion => {
                        accordion.selector.parentElement.classList.remove('opend');
                    });
                    accordion.open();
                    accordion.selector.parentElement.classList.add('opend');
                }
            };

            const close_btn = accordion.selector.querySelector('.accordion__close-btn');
            if (close_btn) {
                close_btn.addEventListener('click', () => {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                });
            }
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
            speed: 1000,
            loop: true,
            centeredSlides: true,
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
        const content = document.querySelector('.specialists__content');
        const heading = document.querySelector('.specialists__heading');

        const swiperSpec = new Swiper('.swiper.specialists__slider', {
            direction: 'horizontal',
            loop: false,
            slidesPerView: 1,
            speed: 400,
            spaceBetween: 150,
            grabCursor: true,
            pagination: {
                el: '.specialists__pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2000,
            },
            navigation: {
                nextEl: '.specialists__right',
                prevEl: '.specialists__left',
            },
            on: {
                init: function() {
                    document.querySelector('.specialists__pagination .swiper-pagination-bullet').textContent = 1;
                }
            },
            breakpoints: {
                1441: {
                    spaceBetween: 200,
                },
                1700: {
                    spaceBetween: 300
                }
            }
        });

        swiperSpec.on('slideChange', function(slider) {
            if (slider.snapIndex > 0) {
                content.style.opacity = 0;
            } else {
                content.style.opacity = 1;
            }

            const paginationItems = document.querySelectorAll('.specialists__pagination .swiper-pagination-bullet');

            paginationItems.forEach(item => {
                if (item.classList.contains('swiper-pagination-bullet-active')) {
                    item.textContent = slider.snapIndex + 1;
                } else {
                    item.textContent = '';
                }
            });
        });

        function setLeft(setElem, example) {
            setElem.style.left = `${example.getBoundingClientRect().left}px`;
        }

        setLeft(content, heading);

        window.addEventListener('resize', () => {
            setLeft(content, heading);
        });
    }

    if (document.querySelector('.swiper.blog__slider')) {
        const mainSlider = new Swiper('.swiper.blog__slider', {
            direction: 'horizontal',
            loop: false,
            speed: 1000,
            grabCursor: true,
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

        btn.style.width = `${bg.getBoundingClientRect().height}px`;

        bg.addEventListener('click', () => {
            map.classList.toggle('active');
            bg.classList.toggle('active');

            if (map.classList.contains('active')) {
                map.style.transform = 'translateX(0)';
                btn.textContent = btn.dataset.show;
            } else {
                map.removeAttribute('style');
                btn.textContent = btn.dataset.hide;
            }
        });
    }
});