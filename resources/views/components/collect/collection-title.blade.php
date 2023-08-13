@props(['name'])
<!-- 標題 -->
        <div class="container px-2 py-5">
            <div class="row mx-3">
              <!-- 圓形 -->
              <div class="col-lg-4 d-flex justify-content-start ">
                <div class="title_circle1 rounded-circle d-flex justify-content-center">
                  <div class="row align-items-center">
                    <div class="title_circle2 rounded-circle p-3">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="#f08c55" class="bi bi-postcard-heart title_icon"
                        viewBox="0 0 16 16">
                        <path
                          d="M8 4.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm3.5.878c1.482-1.42 4.795 1.392 0 4.622-4.795-3.23-1.482-6.043 0-4.622ZM2.5 5a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z" />
                        <path fill-rule="evenodd"
                          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z" />
                      </svg>
                    </div>
                  </div>
        
                </div>
              </div>
              <!-- MC x 收藏櫃 x 前往抽盒 -->
              <div class="col-lg-8 py-5 position-relative">
                <!-- MY COLLECTION -->
                <div class="position-absolute title_mc_text text-white fst-italic">
                  MY COLLECTION
                </div>
                <!-- xxx的收藏櫃 -->
                <div class="title_user_text position-absolute">
                  {{ $name->name }}   的收集櫃
                </div>
                <!-- 前往抽盒 -->
                <button class="title_blue_button rounded-pill px-5 py-2 mb-4 me-5 position-absolute bottom-0 end-0">
                  前往抽盒
                </button>
                <div class="">
                  <div class="position-absolute title_dash pe-3"></div>
                  <div class="title_dash_arrow position-absolute pe-3"></div>
                </div>
              </div>
              </div>
              </div>
          </div>