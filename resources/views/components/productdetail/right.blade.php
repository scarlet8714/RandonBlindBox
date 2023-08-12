@props(['content', 'payment'])
<div class="col-xs-12 col-lg-6 p-5">
    <div class="d-flex position-relative">
      <!-- 商品名稱 -->
      <div class="col-11 product_name">{{$content[0]->name}}</div>
      <!-- 收藏按鈕 -->
      <div class="position-absolute end-0">
        <a class="button_favorite" pid="{{$content[0]->pid}}">
          <svg class="favorite_empty" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
            <path fill="none" d="M0 0H24V24H0z"></path>
            <path
              d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2zm-3.566 15.604c.881-.556 1.676-1.109 2.42-1.701C18.335 14.533 20 11.943 20 9c0-2.36-1.537-4-3.5-4-1.076 0-2.24.57-3.086 1.414L12 7.828l-1.414-1.414C9.74 5.57 8.576 5 7.5 5 5.56 5 4 6.656 4 9c0 2.944 1.666 5.533 4.645 7.903.745.592 1.54 1.145 2.421 1.7.299.189.595.37.934.572.339-.202.635-.383.934-.571z">
            </path>
          </svg>
          <svg class="favorite_filled ignite" height="32" width="32" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H24V24H0z" fill="none"></path>
            <path
              d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z">
            </path>
          </svg>
        </a>
      </div>
    </div>
    <!-- 商品價格 -->
    <div class="product_price color_red pt-3">
      <h5>${{$content[0]->price}}</h5>
    </div>
    <!-- 商品類別_線上抽盲盒 -->
    <div class="product_category col-3 d-flex align-items-center justify-content-center mt-5">
      線上抽盲盒
    </div>
    <!-- 商品規格 -->
    <form method="POST" action="/cart2check">
        @csrf
        <input type="hidden", name="pid" value="{{$content[0]->pid}}">
        <div class=" pt-3">
        <select class="form-select" name="sid" aria-label="Default select example">
            <option selected>規格</option>
            <option value="1">單盒</option>
            <option value="2">一中盒_9入 | 不重複 </option>
        </select>
        </div>
        <!-- 購買數量 -->
        <div class="col-4 pt-4">
        <div class="product_text">購買數量</div>
        <div class="input-group pt-3">
            <input type="button" class="input-group-text minus" value="-">
            <input type="text" name="quantity" class="form-control text-center quantity" id="specificSizeInputGroupUsername" value="1">
            <input type="button" class="input-group-text plus" value="+">
        </div>
        </div>
        <!-- 加到購物車 x 立即購買 -->
        <div class="pt-5 pb-2 d-flex">
        <input type="button" value="加到購物車" class="product_button_orange rounded-pill w-100 addcart">
        <input type="submit" value="立即購買" class="product_button_blue rounded-pill ms-2 w-100">
        </div>
    </form>
    <!-- 商品介紹 x 規格說明 x 付款-->
    <div class="accordion accordion-flush pt-2" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <div class="product_text py-2">商品介紹</div>
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="lh-lg py-3">
              {{$content[0]->series_intro}}
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            <div class="product_text py-2">規格說明</div>
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="lh-lg py-3">
              品名：{{$content[0]->name}}<br>
              品牌：{{$content[0]->publish}}<br>
              尺寸：{{$content[0]->size}}<br>
              適用年齡：{{$content[0]->age}}歲及以上<br>
              材質：{{$content[0]->material}}<br>
              產地：{{$content[0]->production}}<br><br>
              *產品尺寸因測量的方法不同測量結果有1~3公分誤差屬正常範圍
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <div class="product_text py-2">
              付款&運送方式
            </div>
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">

          <div class="accordion-body">
            <div class="lh-lg py-3">
              運送和付款：<br>
                @foreach ($payment as $item)
                    <p style="text-indent: 2em">{{$item->store}}&nbsp;&nbsp;{{$item->pay}}</p>
                @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>