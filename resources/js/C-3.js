// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';
// import styles bundle
import 'swiper/css/bundle';
// -----------------------------------------------------------
// 彈跳視窗_收藏卡
// let btn = document.querySelector("#popup_show");
let collectBtn = document.querySelectorAll(".popup_show");
const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

// 群體展示款式
collectBtn.forEach( function(collect) {
    collect.addEventListener("click", function () {
      let pid = this.getAttribute('id').replace("popup_show", "");
      console.log(pid);
      fetch('/collectOwn', {
        method: 'POST',
        body: JSON.stringify({
          pid : pid
        }),
        headers: {
          'Content-Type' : 'application/json',
          'X-CSRF-Token' : csrfToken,
        }
      }).then(function(response) {
        return response.text();
      }).then(function(refresh) {
        showDialog.innerHTML = refresh;
        infoModal.showModal();

        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 0,
          slidesPerView: 2,
          grid: {
            rows: 5,
            fill: "row"
          },

          breakpoints: {
            760: {
              // 一行有多少
              slidesPerView: 4,
              grid: {
                rows: 4,
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

          // 讓滑動可以同步
          thumbs: {
            swiper: swiper,
          },
        });

        // 若有撈到就先以第一個來取代名稱
        var firstName = document.querySelectorAll(".swiper-slide");
        console.log(firstName);
        if(firstName != undefined) {
          document.getElementById("showName").innerHTML = firstName[0].getAttribute('name');
        }

        // 彈跳視窗點擊修改名稱
        var collectNames = document.querySelectorAll(".swiper-slide");
        collectNames.forEach( function(name) {
          name.addEventListener("click", function () {
            document.getElementById("showName").innerHTML = this.getAttribute('name');
          })
        });

        let close = document.querySelector("#popup_close");
        // 按鈕關閉
        close.addEventListener("click", function() {
          infoModal.close();
        })
        console.log('success');
      })
    })
});