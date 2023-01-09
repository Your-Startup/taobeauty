import initSelects from '../js/components/select.js'

function initMenu() {
    const menu_item_services = document.querySelector('.menu-item-services'),
          sub_menu           = document.querySelector('.fixed-menu'),
          otter_menu_item    = document.querySelectorAll('header .menu-item:not(.menu-item-services), .custom-logo-link');

    if (menu_item_services && sub_menu) {
        menu_item_services.addEventListener('mouseenter', () => {
            sub_menu.classList.add('active');
            menu_item_services.classList.add('active');
        });

        sub_menu.querySelector('.fixed-menu__bg').addEventListener('mouseenter', () => {
            sub_menu.classList.remove('active');
            menu_item_services.classList.remove('active');
        });

        if (otter_menu_item.length > 0) {
            otter_menu_item.forEach((menu_item) => {
                menu_item.addEventListener('mouseenter', () => {
                    sub_menu.classList.remove('active');
                    menu_item_services.classList.remove('active');
                });
            });
        }

        sub_menu.querySelector('.js-close-link').addEventListener('click', () => {
            sub_menu.classList.remove('active');
            menu_item_services.classList.remove('active');
        });
    }
}

function initZoomPopup() {
    const popup_bg = document.querySelector('.popup-bg');

    // Open
    document.addEventListener('click', (e) => {
        const open_btn = e.target.closest('.js-open-zoom');
              
        if (!open_btn) {
            return;
        }

        closeAllPopup(false);

        const popup = popup_bg.querySelector('#zoom');

        if (popup) {
            popup_bg.classList.add('open');
            popup.classList.add('active');

            popup.querySelector('.zoom-img').src = open_btn.src ? open_btn.src : '';
        }
    });

    // Close
    document.addEventListener('click', (e) => {
        const close_btn = e.target.closest('.popup-close');

        if (!close_btn) {
            return;
        }

        closeAllPopup();
    });
}

function closeAllPopup(full_close = true) {
    const popup_bg = document.querySelector('.popup-bg');

    if (!popup_bg) {
        return;
    }

    if (full_close) {
        popup_bg.classList.remove('open');
    }

    if (popup_bg.children.length > 0) {
        for (const popup of popup_bg.children) {
            popup.classList.remove('active');
        }
    }
}

function initWidget() {
    document.addEventListener('scroll', (e) => {
        const contacts = document.querySelector("#contacts"),
              footer   = document.querySelector('.footer'),
              widget   = document.querySelector('.social__list.widget');

        let position;

        if (contacts) {
            position = contacts.getBoundingClientRect();
        } else {
            position = footer.getBoundingClientRect();
        }

        if (position.y - window.innerHeight <= 0) {
            widget.classList.add('hide');
        } else {
            widget.classList.remove('hide');
        } 
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initMenu();
    initZoomPopup();
    initSelects();
    initWidget();
});