import Accordions from "../components/accordion.js";

export default function initPrices() {
   const accordionsPrices = document.querySelectorAll('.accordion');
    if (accordionsPrices) {
        const accordions = new Accordions(accordionsPrices);
        accordions.items.forEach(accordion => {
            accordion.heading.onclick = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                } else {
                    accordions.closeAll();
                    accordions.items.forEach(accordion => {
                        accordion.selector.parentElement.classList.remove('opend');
                    }); 
                    accordion.open();
                    accordion.selector.parentElement.classList.add('opend');
                }
            };

            const close_btn = accordion.selector.querySelector('.accordion__close-btn');
            if (close_btn) {
                close_btn.addEventListener('click', () => {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                });
            }
        });
    }
}
