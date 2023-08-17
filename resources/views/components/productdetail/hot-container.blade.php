<!-- 猜你喜歡 -->
  <!-- 標題 -->
  <div class="pt-5 ps-2">
    <h3 class="all_title">熱銷推薦</h3>
  </div>

  <!-- 滾動圖 -->
  <div class="container mb-5">
    <div class="row position-relative">
      <div class="container py-5">
        <div class="container pb-5">
          <div class="swiper_like">
            <div class="swiper-wrapper">
                {{$slot}}
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </div>