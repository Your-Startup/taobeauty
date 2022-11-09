import { mainSlider, areaSlider, specialistsSlider, blogSlider } from './components/swiper.js';
import initServices from './home/services.js';
import initPrices from './home/prices.js';
import initMap from './home/map.js';

document.addEventListener('DOMContentLoaded', () => {
    mainSlider();
    areaSlider();
    specialistsSlider();
    blogSlider();
    initServices();
    initPrices();
    initMap();
});