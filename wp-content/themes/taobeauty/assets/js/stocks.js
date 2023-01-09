let is_sending      = false,
    is_form_sending = false;

function initPopup() {
    const popup_bg = document.querySelector('.popup-bg');

    // Open
    document.addEventListener('click', (e) => {
        const open_btn = e.target.closest('.js-open-popup');
              
        if (!open_btn) {
            return;
        }

        //closeAllPopup(false);

        const type = open_btn.dataset.popup,
              popup = popup_bg.querySelector('#' + type);


        if (popup) {
            popup_bg.classList.add('open');

            if (type == 'info') {
                loadPopup(open_btn.dataset.id);
            } else {
                popup.classList.add('active');
            }
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

function loadPopup(id) {
    const popup_bg    = document.querySelector('.popup-bg'),
          popup_info  = popup_bg.querySelector('#info'),
          popup_order = popup_bg.querySelector('#order');

    if (!is_sending) {
        is_sending = true;

        popup_info.innerHTML = '';
        popup_order.innerHTML = '';

        popup_info.classList.remove('hide');
        popup_order.classList.remove('active');

        popup_order.style.height = null;

        const data = new FormData();
        data.append('action', 'stock_info');
        data.append('id', id);

        let xhr = new XMLHttpRequest();
        xhr.open('POST', myajax.url);
        xhr.send(data);
    
        xhr.onload = function() {
            if (xhr.status != 200) {
                console.log(`Ошибка ${xhr.status}: ${xhr.statusText}`);
                closeAllPopup();
            } else {
                const result = JSON.parse(xhr.response);
                console.log(result);
                if (result.success) {
                    if (result.templates.info) {
                        popup_info.innerHTML = result.templates.info;
                        popup_order.innerHTML = result.templates.order;
                        popup_order.style.height = popup_info.clientHeight + 'px';
                        popup_info.classList.add('active');
                    } else {
                        popup_order.innerHTML = result.templates.order;
                        popup_info.classList.add('hide');
                        popup_order.classList.add('active');
                    }

                    initForm();
                } else {
                    console.log(result.message);
                    closeAllPopup();
                }
            }
            is_sending = false;
        }
    
        xhr.onerror = function() {
            console.error("Запрос не удался");
            is_sending = false;
            closeAllPopup();
        }
    } else {
        console.log('Запрос еще отправляется...');
    }
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

function initForm() {
    const form = document.querySelector('.popup__form');
    
    if (!form) {
        return;
    }
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        if (!is_form_sending) {
            is_form_sending = true;
            const data = new FormData(form);
            data.append('action', 'stock_create_request');
    
            let xhr = new XMLHttpRequest();
            xhr.open('POST', myajax.url);
            xhr.send(data);
        
            xhr.onload = function() {
                if (xhr.status != 200) {
                    console.log(`Ошибка ${xhr.status}: ${xhr.statusText}`);
                    closeAllPopup();
                } else {
                    const result = JSON.parse(xhr.response);
    
                    form.innerHTML = result.template;
                }
                is_form_sending = false;
            }
        
            xhr.onerror = function() {
                console.error("Запрос не удался");
                is_form_sending = false;
                closeAllPopup();
            }
        } else {
            console.log('Запрос еще отправляется...');
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initPopup();
});