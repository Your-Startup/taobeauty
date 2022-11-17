import Accordions from "./components/accordion.js";

function initServises() {
    const accordionsPrices = document.querySelectorAll('.accordion');
    if (accordionsPrices) {
        const accordions = new Accordions(accordionsPrices);
        accordions.items.forEach(accordion => {
            const more = accordion.selector.querySelector('.js-more');

            accordion.heading.onclick = more.onclick = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                    more.innerHTML = 'Подробнее';
                } else {
                    accordions.closeAll();
                    accordions.items.forEach(accordion => {
                        accordion.selector.parentElement.classList.remove('opend');
                    }); 
                    accordion.open();
                    accordion.selector.parentElement.classList.add('opend');
                    more.innerHTML = 'Свернуть';
                }
            }
        });
    }
}
 
document.addEventListener('DOMContentLoaded', () => {
    initServises();
});