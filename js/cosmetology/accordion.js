import Accordions from "../components/accordion.js";

export default function initCosmetology() {
    const accordionsPrices = document.querySelectorAll('.accordion');

    if (accordionsPrices) {
        const accordions = new Accordions(accordionsPrices);
        accordions.items.forEach(accordion => {
            accordion.heading.onclick = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.selector.querySelector('.border-btn.cosmetology__link').textContent = 'Подробнее';
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                } else {
                    accordions.closeAll();
                    accordions.items.forEach(accordion => {
                        accordion.selector.parentElement.classList.remove('opend');
                    });
                    accordion.selector.querySelector('.border-btn.cosmetology__link').textContent = 'Скрыть';
                    accordion.open();
                    accordion.selector.parentElement.classList.add('opend');
                }
            };
            accordion.selector.querySelector('.border-btn.cosmetology__link').onclick = function(e) {
                e.preventDefault();
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    this.textContent = 'Скрыть';
                    accordion.open();
                } else {
                    this.textContent = 'Подробнее';
                    accordion.close();
                }
            }
        });
    }
}