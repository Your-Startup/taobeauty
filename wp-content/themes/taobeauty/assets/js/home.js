import {mainSlider, areaSlider, specialistsSlider, blogSlider} from './components/swiper.js';
import initServices from './home/services.js';
import initPrices from './home/prices.js';
import initMap from './home/map.js';
import yourAnimationInit from './home/your.js';
import smoothScroll from './libs/smooth-scroll.js';

document.addEventListener('DOMContentLoaded', () => {
    mainSlider();
    areaSlider();
    specialistsSlider();
    blogSlider();
    initServices();
    initPrices();
    initMap();
    yourAnimationInit();
    smoothScroll();

    var scroll = new SmoothScroll('a[href*="/#"]', {
        speed: 500,
        offset: 75
    });
});