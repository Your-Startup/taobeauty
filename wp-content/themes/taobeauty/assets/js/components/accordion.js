export class Accordion {
    constructor (selector) {
        this.selector = selector;
        this.heading  = selector.querySelector(".accordion__heading");
        this.content  = selector.querySelector(".accordion__content");
    }

    open(accordion = this.selector) {
        accordion.classList.add("opend");
        this.content.style.maxHeight = this.content.scrollHeight + "px";
    }
    
    close(accordion = this.selector) {
        accordion.classList.remove("opend");
        this.content.style.maxHeight = null;
    } 
}

export default class Accordions {
    constructor (selectors) {
        this.items = [];
        if (selectors.length > 0) {
            selectors.forEach(selector => {
                let accordion = new Accordion(selector);
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