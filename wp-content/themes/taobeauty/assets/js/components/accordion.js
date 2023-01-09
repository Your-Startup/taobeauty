import initSmoothScroll from '../libs/smooth-scroll.js';
initSmoothScroll();
let scroll = new SmoothScroll();

const default_params = {
    duration : null,
    scroll: false,
}

export class Accordion {
    constructor (selector, params) {
        this.selector = selector;
        this.heading  = selector.querySelector(".accordion__heading");
        this.content  = selector.querySelector(".accordion__content");

        this.params = params;
        
        this.params.duration = params.duration ? params.duration : this.content.scrollHeight / 2000;

        this.content.style.transition = 'max-height ' + this.params.duration + 's linear';

        this.parent_content = this.selector.closest('.accordion__content');

        this.is_children = this.selector.closest('.accordion-children') ? true : false;
    }

    open(accordion = this.selector) {
        accordion.classList.add("opend");
        this.content.style.maxHeight = this.content.scrollHeight + "px";
        this.content.style.transition = 'max-height ' + this.params.duration + 's linear';

        if (this.parent_content) {
            this.parent_content.style.maxHeight = this.parent_content.scrollHeight + this.content.scrollHeight + "px";
        }

        if (this.params.scroll) {
            setTimeout(() => {
                scroll.animateScroll(this.selector, null, {
                    speed: 1000,
                    offset: 100
                });
            }, this.params.duration * 1000)
        }
    }
    
    close(accordion = this.selector) {
        accordion.classList.remove("opend");
        this.content.style.maxHeight = null;
        this.content.style.transition = null;

        if (this.parent_content) {
            this.parent_content.style.maxHeight = this.parent_content.style.maxHeight - this.content.scrollHeight + "px";
        }
    }
}

export default class Accordions {
    constructor (selectors, params = default_params) {
        this.items = [];
        if (selectors.length > 0) {
            selectors.forEach(selector => {
                let accordion = new Accordion(selector, params);
                this.items.push(accordion);
            });
        }
    }

    closeAll() {
        if (this.items.length > 0) {
            this.items.forEach(accordion => {
                accordion.close();
            })
        }
    }
}