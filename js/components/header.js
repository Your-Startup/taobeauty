export default function initHeader() {
    const headerItems = document.querySelectorAll('.header__item');

    headerItems.forEach((item) => {

        item.addEventListener('mouseenter', (e) => {
            headerItems.forEach(hitem => {
                hitem.classList.remove('active');
            });
            item.classList.add('active');
            document.querySelector('body').style.overflow = 'hidden';

            // if (e.target.classList.contains('fixed-menu__bg')) {
            //     document.querySelectorAll('header__item').forEach(item => {
            //         item.classList.remove('active');
            //         document.querySelector('body').style = null;
            //     });
            // }
        });

        item.addEventListener('mouseleave', () => {
            item.classList.remove('active');
            document.querySelector('body').style = null;
        });
    });

    const blocks = document.querySelectorAll('.fixed-menu__block');

    blocks.forEach(block => {
        block.addEventListener('mouseleave', () => {
            headerItems.forEach(item => {
                item.classList.remove('active');
            });
            document.querySelector('body').style = null;
        })
    });
};