export default function initSales() {
    const ajaxLinks = document.querySelectorAll('.js-ajax-link');

    function closePopup() {
        document.querySelector('.popup-bg').remove();
        document.body.style = null;
    };

    ajaxLinks.forEach(link => {
        link.addEventListener('click', async(e) => {
            e.preventDefault();

            fetch(link.href)
                .then((response) => response.text())
                .then((data) => {

                    const wrap = document.createElement('div');

                    wrap.classList.add('popup-bg');
                    wrap.innerHTML = data;
                    document.body.append(wrap);
                    document.body.style.overflow = 'hidden';

                    wrap.addEventListener('click', (e) => {
                        if (e.target === e.currentTarget) {
                            closePopup();
                        }
                    });

                });
        });
    });

    document.addEventListener('click', (e) => {

        if (e.target.classList.contains('js-ajax-link-sec')) {

            e.preventDefault();

            fetch(document.querySelector('.js-ajax-link-sec').href)
                .then((response) => response.text())
                .then(data => {
                    document.querySelector('.popup-bg').innerHTML = data;
                });
        }

        if (e.target.classList.contains('popup-img-close')) {
            closePopup();
        }

    });
};