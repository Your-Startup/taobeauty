export default function initMap() {
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
}