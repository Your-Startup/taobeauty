import { mainSlider, areaSlider, specialistsSlider, blogSlider } from './components/swiper.js';
import initServices from './home/services.js';
import initPrices from './home/prices.js';
import initMap from './home/map.js';
import initCosmetology from './cosmetology/accordion.js';
import initHeader from './components/header.js';
import initSales from './sale/sale.js';
import initCertificates from './certificates/certificates.js';

document.addEventListener('DOMContentLoaded', () => {
    mainSlider();
    areaSlider();
    specialistsSlider();
    blogSlider();
    initServices();
    initPrices();
    initMap();
    initCosmetology();
    initHeader();
    initSales();
    initCertificates();
});