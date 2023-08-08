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
  allowSlideNext: false,
  allowSlidePrev: false,
  allowTouchMove: false,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 0,

  thumbs: {
    swiper: swiper,
  },
});

// -----------------------------------------------------------
// 彈跳視窗_收藏卡
var csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
var max = document.getElementById("max").value;
let cards = document.querySelectorAll(".popup_show");
let infoModal = document.querySelector("#infoModal");
let close = document.querySelector("#popup_close");
cards.forEach( function(card) {
  let product = card.id.replace('popup_show', '');
  card.addEventListener("click", function () {
    fetch('/collection/product', {
      method: 'POST',
      body: JSON.stringify({
        pid: product
      }),
      headers: {
				'Content-Type': 'application/json',
				"X-CSRF-Token": csrfToken
      }
    }).then(function(response) {
      return response.json();
    }).then(function(types) {
      // console.log(0 == null);
      for (let i = 0 ; i < max ; i++) {
        if(typeof(types[i]) == 0 || typeof(types[i]) == 'undefined') {
          console.log('這裡只有一隻小貓');
          // document.getElementById('type' + i).style = 'display:none';
          // document.getElementById('down' + i).style = 'display:none';
        }
        else {
        console.log(types[i]);
          // 設定
          document.getElementById('name' + i).innerHTML = types[i].name;
          document.getElementById('downName' + i).innerHTML = types[i].name;
          document.getElementById('img' + i).setAttribute('src', '/' + types[i].photo_bg);
          document.getElementById('downImg' + i).setAttribute('src', '/' + types[i].photo_bg);
        }
      }
    })
    infoModal.showModal();
  })
})

close.addEventListener("click", function () {
  infoModal.close();
})

