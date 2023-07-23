// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// -----------------------------------------------------------
// 新品上市
var swiper = new Swiper('.swiper', {
    slidesPerView: 2,
    direction: 'horizontal',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1200: {
            slidesPerView: 3,
        },
        1300: {
            slidesPerView: 4,
        }
    },
});

