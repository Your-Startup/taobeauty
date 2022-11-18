export default function initHeader() {
    const headerItems = document.querySelectorAll('.header__item');

    headerItems.forEach((item) => {

        item.addEventListener('mouseenter', () => {
            headerItems.forEach(hitem => {
                hitem.classList.remove('active');
            });
            item.classList.add('active');
            document.querySelector('body').style.overflow = 'hidden';
        });

        item.addEventListener('mouseleave', () => {
            item.classList.remove('active');
            document.querySelector('body').style = null;
        });

    });
};