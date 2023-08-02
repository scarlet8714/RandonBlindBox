  <!-- 彈跳視窗_C-2-4查看所有款式 -->
  <dialog id="lookall">
    <div class="position-relative d-flex justify-content-center">
      <!-- 關閉按鈕 -->
      <a href="#" id="popup_close_lookall" class="position-absolute top-0 end-0">
        <svg width="35" height="35" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
          id="cross-circle" class="icon glyph">
          <path
            d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z">
          </path>
        </svg>
      </a>
      <div class="">
        <!-- 上_隱藏款 -->
        <div class="popup_lookall_secret">
          <!-- 款式一覽 -->
          <div class="d-flex justify-content-center fw-bold">
            <diV class="popup_lookall_title text-center">
              款式一覽
            </diV>
          </div>

          <div class="row popup_lookall_content">
            <!-- 左_SECRET FIGURE -->
            <div class="col d-flex align-self-center">
              <div class="row">
                <div class="popup_lookall_secret_text1 text-center">SECRET FIGURES</div>
                <div class="d-flex justify-content-center">
                  <div class="popup_lookall_secret_text2 pe-1">隱藏版</div>
                  @foreach ($product[2] as $item)
                        @if(strcmp($item['blind_id'], 'hide') == 0)
                            <div class="popup_lookall_secret_text3 ps-1">{{ $item['name'] }}</div>
                        @endif                      
                  @endforeach        
                </div>
              </div>

            </div>
            <!-- 中_圖片 -->
            <div class="col-4">
              <div class="popup_lookall_pic">
                @foreach ($product[2] as $item)
                        @if(strcmp($item['blind_id'], 'hide') == 0)
                        <img src="/{{ $item['photo_bg'] }}" class="img-fluid" alt="">
                        @endif
                    @endforeach 
              </div>
            </div>
            <!-- 右_機率 -->
            <div class="col d-flex align-self-center">
              <div class="">
                <div class="d-flex justify-content-center">
                  <div class="popup_lookall_secret_text2 text-center pt-5 ps-1">機率</div>
                    @foreach ($product[1] as $item)
                        @if(strcmp($item['blind_id'], 'hide') == 0)
                        <div class="popup_lookall_secret_text4 text-center px-2 pt-4">{{ $item['probability'] }}</div>
                        @endif
                    @endforeach  
                  <div class="popup_lookall_secret_text2 text-center pt-5 pe-1">%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- 下_一般款 -->
        <div class="popup_lookall_general">
          <div class="row d-flex justify-content-center">
            <!-- 中_圖片 -->
            <div class="">
              <div class="row row-cols-2 row-cols-md-3">
                @foreach ($product[2] as $item)
                    @if (strcmp($item['blind_id'], 'hide') != 0 && strcmp($item['blind_id'], 'all') != 0)
                        <div class="col popup_lookall_general_pic">
                            <img src="/{{ $item['photo_bg'] }}" class="img-fluid" alt="">
                            <div class="py-3">
                                <div class="text-center popup_lookall_general_text">{{ $item['name'] }}</div>
                                <div class="text-center popup_lookall_general_text2">
                                    機率{{ $product[1][0]['probability'] }}%
                                </div>
                            </div>
                        </div>
                    @endif   
                @endforeach
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button class="popup_lookall_buy_button ">購買抽盒機會</button>
            </div>
          </div>


        </div>

      </div>


    </div>
    </div>
  </dialog>