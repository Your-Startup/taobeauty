import Accordions from "./components/accordion.js";
import {customBlockSliders} from "./components/swiper.js";

function initServises() {
    if (document.querySelector('body.home')) {
        return;
    }

    const accordionsPrices = document.querySelectorAll('.accordion');
    if (accordionsPrices.length > 0) {
        const accordions = new Accordions(accordionsPrices, {
            scroll: true
        });
        accordions.items.forEach(accordion => {
            const more = accordion.selector.querySelector('.js-more');
            if (more) {
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
            }

            accordion.content.addEventListener('click', (e) => {
                if (e.target.closest('.no-close')) {
                    return;
                }
                accordions.closeAll();
                accordion.selector.parentElement.classList.remove('opend');
                if (more) {
                    more.innerHTML = 'Подробнее';
                }
            });
        });
    }
}
 
function isDescendant(parent, child) {
    var node = child.parentNode;
    while (node != null) {
        if (node == parent) {
            return true;
        }
        node = node.parentNode;
    }
    return false;
}

document.addEventListener('DOMContentLoaded', () => {
    initServises();
    customBlockSliders();
});