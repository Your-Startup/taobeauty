export function mainSlider() {
    if (document.querySelector('.main-slider__slider.swiper')) {
        new Swiper('.main-slider__slider.swiper', {
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
}

export function areaSlider() {
    if (document.querySelector('.area__slider.swiper')) {
        new Swiper('.area__slider.swiper', {
            direction: 'horizontal',
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
}

export function specialistsSlider() {
    if (document.querySelector('.specialists__slider')) {
        const content = document.querySelector('.specialists__content');
        const heading = document.querySelector('.specialists__heading');

        const swiperSpec = new Swiper('.swiper.specialists__slider', {
            direction: 'horizontal',
            loop: false,
            slidesPerView: 1,
            speed: 400,
            spaceBetween: 250,
            grabCursor: true,
            pagination: {
                el: '.specialists__pagination',
                clickable: true,
            },
            // autoplay: {
            //     delay: 2000,
            // },
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
                    slidesPerView: 1,
                    spaceBetween: 350,
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
}

export function blogSlider() {
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
}