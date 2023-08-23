 <!-- 滾動圖 -->
 <div class="pt-5 ps-2">
    <h3 class="all_title">新品上市</h3>
  </div>
 <div class="d-flex position-relative">
    <div class="container py-5">
      <div class="container pb-5">
        <div class="swiper ">
          <div class="swiper-wrapper">
            {{$slot}}
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <!-- 灰色色塊 -->
    <div class="position-absolute bottom-0  w-100" style="height: 50%; background-color:rgb(235, 235, 235)"></div>
  </div>