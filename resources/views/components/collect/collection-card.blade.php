@props(['product'])
@props(['number'])
<!-- 收集款式卡片 -->
        <div class="col-xs-12 col-lg-4 px-3 pb-5 position-relative">
          <a id="popup_show{{ $product->pid }}" class="popup_show" href="#">
            <div class="bg-white card_back2">
              <h6 class="card_text pb-1">{{ strtoupper($product->publish) }}</h6>
              <h6 class="card_text pb-2">{{ $product->name }}</h6>
              <div class="row">
                <div class="col-10 px-2 py-1">
                  <div class="progress" style="height: 12px;">
                    <div class="card_progress" role="progressbar" style="width: 80%;" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                </div>
                <div class="col-2">
                  <h6 class="card_text2 ">6/9</h6>
                </div>
              </div>
            </div>
            <div class="position-absolute card_pic">
              <img src="/{{ $product->head_photo }}" class="img-fluid">
            </div>
          </a>
        </div>