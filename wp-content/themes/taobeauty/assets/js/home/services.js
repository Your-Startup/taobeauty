import Accordions from "../components/accordion.js";

export default function initServices() {
    initAccordions();
    initAnimation(); 
    document.addEventListener('resize', initImgs());
}


function initAccordions () {
    const accordionsServices = document.querySelectorAll(".accordion__block");
    if (accordionsServices) { 
        const accordions = new Accordions(accordionsServices, {
            duration: 0.5,
        });

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
    
    const section  = document.querySelector('section.services'),
          services = document.querySelectorAll('.accordion__block'),
          last_category = document.querySelector('.services__list .last_categogy');

    let prev_service = false,
        relation = 0.1;

    document.addEventListener('mousemove', (e) => {
        let is_service = false,
            current_service;

        services.forEach(service => {
            if (isDescendant(service, e.target)) {
                is_service = true;
                current_service = service;
                return;
            }
        });

        if (prev_service != current_service) {
            document.querySelectorAll('.services__decor-img').forEach(img => {
                img.classList.remove('active');
            });
        }
        prev_service = current_service;

        if (!is_service) {
            section.classList.remove('more');
            return;
        } 

        const category    = current_service.dataset.category,
              imgs        = document.querySelectorAll('.services__decor-img.img-group-' + category),
              wrapper     = document.querySelector('.services__imgs-wrapper'),
              center_top  = wrapper.clientHeight / 2,
              center_left = wrapper.clientWidth / 2;

        let top = 0;

        if (current_service.classList.contains('bottom') ) {
            top = 600;
            section.classList.add('more');
        } else {
            section.classList.remove('more');
        }

        imgs.forEach(img => {
            img.classList.add('active');
            const start_top  = Number(img.dataset.top) + Number(top),
                  start_left = img.dataset.left,
                  delta_top  = -(e.clientY - center_top) * relation,
                  delta_left = -(e.clientX - center_left) * relation;

            img.style.top = (Number(start_top) + Number(delta_top)) + 'px';
            img.style.left = (Number(start_left) + Number(delta_left)) + 'px';
        });
    });

    document.addEventListener('scroll', () => {
        const position = last_category.getBoundingClientRect();

        if (position.top < window.innerHeight / 2 && !last_category.classList.contains('opend')) {
            last_category.classList.add('bottom');
        } else if (!last_category.classList.contains('opend')) {
            last_category.classList.remove('bottom');
        }
    });
}


function initImgs() { 
    const imgs = document.querySelectorAll('.services__decor-img'),
          wrapper = document.querySelector('.services__imgs-wrapper');

    imgs.forEach(img => {
        const top = (wrapper.clientHeight / 100 * img.dataset.top);
        img.style.top = top  + 'px';
        img.dataset.top = top;
        if (img.dataset.left != undefined) {
            const left = (wrapper.clientWidth / 100 * img.dataset.left);
            img.style.left =  left  + 'px';
            img.dataset.left = left;
        } else if (img.dataset.right != undefined) {
            const img_wight = img.querySelector('img').width;
            const left = (wrapper.clientWidth / 100 * Math.abs(img.dataset.right - 100) - img_wight);
            img.style.left = left + 'px';
            img.setAttribute('data-left', left);
        }
    });
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