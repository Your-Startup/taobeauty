import Accordions from "../components/accordion.js";

export default function initServices() {
    initAccordions();
    initAnimation(); 
}


function initAccordions () {
    const accordionsServices = document.querySelectorAll(".accordion__block");
    if (accordionsServices) { 
        const accordions = new Accordions(accordionsServices);

        accordions.items.forEach(accordion => {
            accordion.selector.onmouseenter = () => {
                if (accordion.content.style.maxHeight) {
                    accordion.close();
                } else {
                    accordions.closeAll();
                    accordion.open();
                }
            };

            accordion.selector.onmouseleave = () => {
                accordion.close();
            }
        });
    }
}

function initAnimation() {
    
    const services = document.querySelectorAll(".accordion__block");

    if (services.length > 0) {
        services.forEach(service => {
            const category = service.dataset.category,
                  imgs = document.querySelectorAll('.services__decor-img.img-group-' + category);

            // TODO : Реализовать анимацию.
        });
    }
}