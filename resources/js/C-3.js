// -----------------------------------------------------------

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 0,
  slidesPerView: 2,
  grid: {
    rows: 5,
    fill: "row"
  },

  breakpoints: {
    760: {
      slidesPerView: 4,
      grid: {
        rows: 3,
        fill: "row"
      },
    },

  },
  // slidesPerColumn: 2,
  // slidesPerGroup: 2,
  // freeMode: true,
  allowSlideNext: false,
  allowSlidePrev: false,
  allowTouchMove: false,
  // cssMode: true,
  // watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 0,

  thumbs: {
    swiper: swiper,
  },
});

// -----------------------------------------------------------
// 彈跳視窗_收藏卡
let btn = document.querySelector("#popup_show");
let infoModal = document.querySelector("#infoModal");
let close = document.querySelector("#popup_close");
btn.addEventListener("click", function () {
  infoModal.showModal();
})
close.addEventListener("click", function () {
  infoModal.close();
})