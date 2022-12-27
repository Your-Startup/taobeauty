function initMenu() {
    const menu_item_services = document.querySelector('.menu-item-services'),
          sub_menu           = document.querySelector('.fixed-menu');

    if (menu_item_services && sub_menu) {
        menu_item_services.addEventListener('click', () => {
            sub_menu.classList.toggle('active');
            menu_item_services.classList.toggle('active');
        });

        sub_menu.querySelector('.fixed-menu__bg').addEventListener('click', () => {
            sub_menu.classList.remove('active');
            menu_item_services.classList.remove('active');
        });

        sub_menu.querySelector('.js-close-link').addEventListener('click', () => {
            sub_menu.classList.remove('active');
            menu_item_services.classList.remove('active');
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initMenu();
});