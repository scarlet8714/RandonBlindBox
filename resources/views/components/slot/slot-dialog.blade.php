@props(['product'])
<!-- 彈跳視窗_C-2-1確認抽盒 -->
<dialog id="checkopen">
    <div class="position-relative d-flex justify-content-center">
      <div class="">
        <!-- 關閉按鈕 -->
        <a href="#" id="popup_close_checkopen" class="position-absolute top-0 end-0">
          <svg width="35" height="35" fill="#c2c2c2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            id="cross-circle" class="icon glyph">
            <path
              d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z"
              fill="#c2c2c2">
            </path>
          </svg>
        </a>
        <!-- 內容 -->
        <div class="popup_checkopen_pic pt-5">
          <img src="/{{ $product[0][0]['open'] }}" class="img-fluid" alt="">
        </div>
        <div class="popup_checkopen_text text-center">
          您確定要抽這一盒？
        </div>
        <div class="d-flex justify-content-center">
          {{-- <form action="/product/slot/go" method="post"> --}}
            {{-- @csrf --}}
            {{-- <input type="text" style="display: none"> --}}
            {{-- <input type="text" style="display: none"> --}}
            <button id="popup_show_drawpage" class="popup_checkopen_button">確定抽盒!</button>            
          {{-- </form> --}}
        </div>
      </div>
    </div>
  </dialog>

  <!-- 彈跳視窗_C-2-2抽盒畫面 -->
  <dialog id="drawpage">
    <div class="position-relative d-flex justify-content-center">
      <div class="">
        <!-- 關閉按鈕 -->
        <a href="#" id="popup_close_congratulations" class="position-absolute top-0 end-0">
          <svg width="35" height="35" fill="#c2c2c2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            id="cross-circle" class="icon glyph">
            <path
              d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z"
              fill="#c2c2c2">
            </path>
          </svg>
        </a>
        <div>

        </div>

        <!-- 拉霸機 -->
        <div class="results">
          <div class="result">
            <div class="row" id="result">
                {{-- 拉取 圖片資料 拉霸機三格 --}}
                @for ( $i = 0; $i < 3; $i++ )
                <div class="col popup_drawpage_pic ">
                    @foreach ($product[2] as $item)
                        @if ($item['blind_id'] !== NULL)
                        <div class="result-item ">
                            <img src="/{{ $item['photo_bg'] }}" class="img-fluid" alt="">
                        </div>
                        @endif
                    @endforeach
                </div>
                @endfor
            </div>
          </div>
        </div>
      </div>

    </div>
  </dialog>

  <!-- 彈跳視窗_背景 -->
  <div id="darkmask" class="d-none position-fixed top-0 left-0"
    style="width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.6); z-index: 100;">4565465</div>
  <!-- 彈跳視窗_煙火 -->
  <canvas id="canvas" class="position-absolute top-0 d-none" style="z-index: 101;"></canvas>

  <!-- 彈跳視窗_C-2-3恭喜抽到 -->
  <dialog id="congratulations">
    <div class="position-relative d-flex justify-content-center">
      <div class="">
        <!-- 關閉按鈕 -->
        <a id="" class="position-absolute top-0 end-0 popup_close_congratulations">
          <svg width="35" height="35" fill="#c2c2c2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            id="cross-circle" class="icon glyph">
            <path
              d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z"
              fill="#c2c2c2">
            </path>
          </svg>
        </a>
        <div class="popup_congratulations_text text-center pt-5">
          恭喜你抽中
        </div>
        <div id="prize" class="popup_congratulations_text2 text-center">
          果醬製作BOB
        </div>
        <div class="popup_congratulations_pic d-flex justify-content-center">
          <img id="prizeImg" src="\imgs\minions\main_minions_at_work\product_pattern\b.jpeg" class="img-fluid" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <div class="popup_congratulations_text pe-1">剩餘</div>
          <div class="popup_congratulations_text3 px-1 remainTimes">2</div>
          <div class="popup_congratulations_text ps-1">次抽獎機會</div>
        </div>
        <div class="d-flex justify-content-center">
          <button class="popup_congratulations_button">查看已開盒商品</button>
          <button id="" class="popup_congratulations_button2 popup_close_congratulations">抽不夠再抽一次!</button>
        </div>
      </div>
    </div>
  </dialog>

  