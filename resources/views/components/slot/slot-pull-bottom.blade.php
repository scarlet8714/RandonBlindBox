@props(['product'])
        <!-- 左_抽獎機區 -->
        <div class="col-lg-12 col-xl-10">
          <!-- 抽獎機桌面外殼  -->
          <div class="machine_table_out">
            <div class="machine_table_in">
              <!-- 抽獎機桌面_機率說明 -->
              <div class="machine_table_probability row">
                <!-- 圈圈叉叉 -->
                <div class="col-1 machine_table_icon_left">
                  <div class="d-flex justify-content-center">
                    <svg width="1.5em" height="1.5em" id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 51.02 51.02">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #f0cd96;
                          }

                          .cls-2 {
                            fill: #784123;
                          }
                        </style>
                      </defs>
                      <circle class="cls-1" cx="25.51" cy="25.51" r="25.51" />
                      <path class="cls-2"
                        d="M37.54,32.53a3.54,3.54,0,1,1-5,5l-7-7-7,7a3.54,3.54,0,1,1-5-5l7-7-7-7a3.54,3.54,0,1,1,5-5l7,7,7-7a3.54,3.54,0,1,1,5,5l-7,7Z"
                        transform="translate(0 0)" />
                    </svg>
                  </div>
                </div>
                <!-- 機率說明 -->
                <div class="col-xs-12 col-lg-10 machine_table_probability_text text-center">
                  機率說明 ：全套共{{ $product[0]['box_count'] }}款(每款{{ $product[1][0]['probability'] }}%機率) + 隱藏版1款(每款
                  @foreach ($product[1] as $item)
                    @if(strcmp($item['blind_id'], 'hide') == 0)
                      {{ $item['probability'] }}
                    @endif
                  @endforeach  %機率)
                </div>
                <!-- 圈圈叉叉 -->
                <div class="col-1 machine_table_icon_right">
                  <div class="d-flex justify-content-center">
                    <svg width="1.5em" height="1.5em" id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 51.02 51.02">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #f0cd96;
                          }

                          .cls-2 {
                            fill: #784123;
                          }
                        </style>
                      </defs>
                      <circle class="cls-1" cx="25.51" cy="25.51" r="25.51" />
                      <path class="cls-2"
                        d="M37.54,32.53a3.54,3.54,0,1,1-5,5l-7-7-7,7a3.54,3.54,0,1,1-5-5l7-7-7-7a3.54,3.54,0,1,1,5-5l7,7,7-7a3.54,3.54,0,1,1,5,5l-7,7Z"
                        transform="translate(0 0)" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
{{-- 
        <div style='width: 200px; height: 200px;'>
            <button onclick="testclick('hoyo')">
              click
            </button>
        </div> --}}