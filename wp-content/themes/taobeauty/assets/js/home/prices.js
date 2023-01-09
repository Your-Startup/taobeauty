import Accordions from "../components/accordion.js";

export default function initPrices() {
   const accordionsPrices = document.querySelectorAll('.accordion');
    if (accordionsPrices) {
        const accordions = new Accordions(accordionsPrices, {
            duration: 0.5,
            scroll: false
        });
        accordions.items.forEach(accordion => {
            accordion.heading.onclick = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                } else {
                    accordion.open();
                    accordion.selector.parentElement.classList.add('opend');
                }
            };

            if (accordion.is_children) {
                accordion.content.addEventListener('click', (e) => {
                    if (e.target.closest('.no-close') ) {
                        return;
                    }
                    accordion.close();
                });
            } else {
                accordion.content.addEventListener('click', (e) => {
                    if (e.target.closest('.no-close') || e.target.closest('.accordion-children')) {
                        return;
                    }

                    accordion.close();
                    accordion.selector.parentElement.classList.remove('opend');
                });
            }
        });
    }
}
