// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';
// -----------------------------------------------------------


// 下方待修 無法同步切換
var allSwiper = document.querySelectorAll("[class*=showSwiper]");

// swiper陣列
var swiper = [];
var swiper2 = [];

allSwiper.forEach(function(typeSwiper) {
  let test = typeSwiper.getAttribute('class').replace('swiper-wrapper showSwiper', '');
  // console.log(test);

  // 建立swiper物件
  swiper[test] = new Swiper((".mySwiper" + test), {
    spaceBetween: 0,
    slidesPerView: 2,
    grid: {
      rows: 4,
      fill: "row"
    },

    breakpoints: {
      760: {
        // 一行有多少
        slidesPerView: 4,
        grid: {
          rows: 3,
          fill: "row"
        },
      },

    },
    allowSlideNext: false,
    allowSlidePrev: false,
    allowTouchMove: false,
  });
  // 去除空陣列
  swiper = swiper.filter(el => el);
});
// console.log(swiper);
console.log('----------------');

for(var i = 0 ; i < swiper.length ; i ++) {
  let test = swiper[i];
  swiper2[i] = new Swiper((".mySwiper2" + i), {
    spaceBetween: 0,

    // 讓滑動可以同步
    thumbs: {
      swiper: swiper[0],
    },
  });
  if (swiper[0] == swiper[i])
  console.log('???');
  console.log(swiper[0]);
  console.log(i);
  console.log(swiper[i]);
}
// swiper2 = swiper2.filter(el => el);

console.log('------');
// console.log(swiper2);

// let testArray = [];
// testArray[1] = 1;
// testArray[3] = 3;
// console.log(testArray);

// var swiper = new Swiper(".mySwiper", {
//   spaceBetween: 0,
//   slidesPerView: 2,
//   grid: {
//     rows: 5,
//     fill: "row"
//   },

//   breakpoints: {
//     760: {
//       // 一行有多少
//       slidesPerView: 4,
//       grid: {
//         rows: 4,
//         fill: "row"
//       },
//     },

//   },
//   allowSlideNext: false,
//   allowSlidePrev: false,
//   allowTouchMove: false,
// });

// var swiper2 = new Swiper(".mySwiper2", {
//   spaceBetween: 0,

//   // 讓滑動可以同步
//   thumbs: {
//     swiper: swiper,
//   },
// });

// -----------------------------------------------------------
// 彈跳視窗_收藏卡
// let btn = document.querySelector("#popup_show");
let collectBtn = document.querySelectorAll(".popup_show");
let closes = document.querySelectorAll(".popup_close");
var pid = 0;
collectBtn.forEach( function(collect) {
    collect.addEventListener("click", function () {
      pid = this.getAttribute('id').replace("popup_show", "");
      console.log("infoModal"+pid);
      if(document.getElementById("infoModal"+pid) != null) {
        document.getElementById("infoModal"+pid).showModal();
      }

       this.getAttribute('id');
    })
});

closes.forEach(function(close){
  close.addEventListener("click", function () {
    // let pid = this.getAttribute('id').replace("popup_show", "");
    // console.log(pid);
    document.getElementById("infoModal"+pid).close();
  })
});


// 彈跳視窗_名稱
var collectNames = document.querySelectorAll(".swiper-slide");
collectNames.forEach( function(name) {
  // alert('aa');
  name.addEventListener("click", function () {
    console.log(this.getAttribute('name'));
    document.getElementById("showName"+pid).innerHTML = this.getAttribute('name');
  })
} )
// console.log(collectNames);