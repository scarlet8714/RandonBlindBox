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

// const minions = document.getElementById('minions');

// window.onload = function(){
//     minions.focus();
// }

const serieslist = document.querySelectorAll('.serieslist');
const seriesbutton = document.querySelectorAll('.seriesbutton');
const seriesintro = document.querySelectorAll('.seriesintro');
const seriesphoto = document.querySelectorAll('.seriesphoto');

seriesbutton.forEach((element, key) => {
    element.addEventListener('click', function(){
        serieslist.forEach(e => {
            e.classList.add('d-none');
        });
        seriesintro.forEach(e => {
            e.classList.add('d-none');
        });
        seriesphoto.forEach(e => {
            e.classList.add('d-none');
        });
        console.log(key);
        serieslist[key].classList.remove('d-none');
        seriesintro[key].classList.remove('d-none');
        seriesphoto[key].classList.remove('d-none');
    })
});