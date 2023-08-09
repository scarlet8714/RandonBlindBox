// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';
// -----------------------------------------------------------
// 商品首圖 x 款式圖

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

// -----------------------------------------------------------
// 猜你喜歡_滾動圖

var swiper3 = new Swiper('.swiper_like', {
    spaceBetween: 10,
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

const minus = document.querySelector('.minus');
const plus = document.querySelector('.plus');
const quantity = document.querySelector('.quantity');

plus.addEventListener('click', ()=>{
    quantity.value = Number(quantity.value) + 1;
})
minus.addEventListener('click', ()=>{
    quantity.value = Number(quantity.value) - 1;
})

const addCart = document.querySelector('.addcart');

addCart.addEventListener('click', () => {
    // let senddata = [document.getElementsByName('pid')[0].value, document.getElementsByName('type')[0].value, document.getElementsByName('quantity')[0].value]
    let senddata = {
        pid: document.getElementsByName('pid')[0].value,
        sid: document.getElementsByName('sid')[0].value,
        quantity: document.getElementsByName('quantity')[0].value
    }
    console.log(senddata);
    console.log(document.getElementsByName('_token')[0].value);
    $.ajax({
        contentType: 'application/json',
        headers: {
            'X-CSRF-TOKEN': document.getElementsByName('_token')[0].value
        },
        type: "POST",
        url: "/addcart",
        // dataType: 'text',
        data: JSON.stringify(senddata),
        success: function (res) {
            console.log(res);
        },
        error: function(res){
            console.log('failed');
        }
    });
});

// $('.button_favorite').click(function (e) { 
//     e.preventDefault();
//     let senddata = {
//         pid: $(this).attr('pid')
//     }
//     $.ajax({
//         contentType: 'application/json',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         type: "post",
//         url: '/likeitem',
//         data: JSON.stringify(senddata),
//         success: function (response) {
//             console.log(response);
//         }
//     });
    
// });





