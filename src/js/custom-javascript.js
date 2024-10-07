// Add your custom JS here.

import Swiper from 'swiper';
import { Autoplay, EffectFade, Pagination } from 'swiper/modules';

// on page load, initialize testimonial Swiper if present on page
document.addEventListener('DOMContentLoaded', function() {

    var homeSlider = document.getElementById('homeSlider');
    if(homeSlider) {
        var swiper = new Swiper(homeSlider, {
            modules: [Autoplay, EffectFade],
            spaceBetween: 0,
            draggable: false,
            allowTouchMove: false,
            simulateTouch: false,
            touchStartPreventDefault: false,
            noSwiping: true,
            loop: true,
            autoplay: {
              delay: 5000,
              disableOnInteraction: false,
            },
            slidesPerView: 1,
            effect: 'fade',
            fadeEffect: {
              crossFade: true,

            },
            speed: 1000
        });
    }

    var gallerySlider = document.getElementById('gallerySlider');
    if(gallerySlider) {
        var swiper = new Swiper(gallerySlider, {
            modules: [Autoplay, EffectFade, Pagination],
            spaceBetween: 0,
            draggable: true,
            allowTouchMove: true,
            simulateTouch: true,
            touchStartPreventDefault: false,
            noSwiping: false,
            loop: true,
            autoplay: {
              delay: 5000,
            },
            slidesPerView: 1,
            effect: 'fade',
            fadeEffect: {
              crossFade: true,

            },
            speed: 1000,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
        });
    }
});
