@props(['product'])
<!-- 彈跳視窗_商品收集卡 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <dialog id="infoModal">
    <!-- 關閉按鈕 -->
    <a href="#" id="popup_close" class="position-absolute top-0 end-0">
      <svg width="35" height="35" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
        id="cross-circle" class="icon glyph">
        <path
          d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z">
        </path>
      </svg>
    </a>

    <div class="position-relative d-flex justify-content-center">
      <div class="">
        {{-- {{ var_dump($product) }} --}}
        <!-- 上_圓形/COLLECTION -->
        <div class="popup_collection">
          <div class="row pb-5 px-4">
            <div class="col-5">
              <div class="position-relative d-flex justify-content-center">
                <div class="popup_circle rounded-circle p-3">
                  <div class="popup_circle2 p-1 rounded-circle">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                      class="swiper mySwiper2">
                      <div class="swiper-wrapper ">
                        @for ($i = 0; $i < $product[2]; $i++)
                          <x-collect.collection-dialog-item :id="$i"/>
                        @endfor
                      </div>
                    </div>
                  </div>
                </div>
                <div class="position-absolute popup_circle_text text-white text-center rounded-pill">
                </div>
              </div>
            </div>
            <div class="col-7">
              <div class="pt-5">
                <h3 class="popup_title fst-italic pt-4">MINIONS</h3>
                <h3 class="popup_title2 ps-5 fst-italic">COLLETION</h3>
              </div>
            </div>
          </div>
        </div>

        <!-- RWD -->
        <div class="popup_collection_rwd">
          <div class="pb-5 px-4">
            <div class="pt-3 pb-2">
              <h3 class="popup_title fst-italic">MINIONS</h3>
              <h3 class="popup_title2 fst-italic">COLLETION</h3>
            </div>
            <div class="position-relative d-flex justify-content-center">
              <div class="popup_circle rounded-circle p-3">
                <div class="popup_circle2 p-1 rounded-circle">
                  <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper2">
                    <div class="swiper-wrapper ">
                      @for ($i = 0; $i < $product[2]; $i++)
                        <x-collect.collection-dialog-item  :id="$i"/>
                      @endfor
                    </div>
                  </div>
                </div>
              </div>
              <div class="position-absolute popup_circle_text text-white text-center rounded-pill">
              </div>
            </div>
          </div>
        </div>

        <!-- 下 -->
        <div class="swiper mySwiper popup_back">
          <!-- 系列標題 -->
          <h6 id="dialogTitle" class="pb-4 text-white popup_text">POP MART 小小兵秘密基地系列 </h6>
          <!-- 白底圖 -->
          <div class="swiper-wrapper row">
            @for ($i = 0; $i < $product[2]; $i++)
              <x-collect.collection-dialog-item-down :id="$i"/>
            @endfor
          </div>
        </div>

      </div>
      <!-- 購買抽盒機會 -->
      <div class="position-absolute popup_ticket ">
        <div class="">
          <svg width="300" height="120" viewBox="0 0 360 177" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="360" height="49" rx="10" fill="#7887AA" />
            <rect x="13" y="15" width="334" height="19" rx="9.5" fill="#7A4223" />
            <rect x="32" y="25" width="296" height="129" rx="5" fill="white" />
            <rect x="25" y="53" width="310" height="101" rx="5" fill="white" filter="url(#f1)" />
            <!-- 陰影 -->
            <defs>
              <filter id="f1" x="0" y="0" width="220%" height="200%">
                <feOffset result="offOut" in="SourceGraphic" dx="2" dy="2" />
                <feColorMatrix result="matrixOut" in="offOut" type="matrix"
                  values="0.2 0 0 0 0 0 0.2 0 0 0 0 0 0.2 0 0 0 0 0 1 0" />
                <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="5" />
                <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
              </filter>
            </defs>
            <rect x="34" y="62" width="292" height="83" rx="10" fill="#3A3B7B" />
            <line x1="32" y1="52" x2="328" y2="52" stroke="#3A3B7B" stroke-width="2" stroke-dasharray="5 5" />
            <rect x="52" y="25" width="257" height="16" fill="#D9D9D9" />
          </svg>
        </div>
        <div class="d-flex justify-content-center">
          <a href="/" class="position-absolute popup_ticket_text text-white">購買抽盒機會!</a>
        </div>
      </div>
    </div>
  </dialog>