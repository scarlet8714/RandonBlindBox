@props(['imgpath'])
<!-- 熱銷排行 -->
<div class="position-relative">
  <!-- 上-->
  <div class="container">
    <div class="row">
      <!-- TOP SELLING -->
      <div class="col-xs-12 col-md-6 col-lg-6 row align-items-end pb-5 px-3 mb-5">
        <h1 class="fst-italic display-1 top_selling_bg_title">TOP SELLING</h1>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-6 ">
        <div class="row justify-content-center px-2">
          <!-- 山洞 -->
          <div class="col-md-12 col-lg-9 top_selling_cave p-5 position-relative">
            <div class="rounded-circle top_selling_circle p-5 bg-white">
              <a href="/product/{{$imgpath[0]->pid}}"><img src="{{$imgpath[0]->head_photo}}" class="img-fluid" alt=""></a> 
            </div>
            <!-- NO.1 -->
            <div class="position-absolute" style="top: 3%;">
              <h1 class="top_selling_number_one">1</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-1 col-lg-1 "></div>
    </div>
  </div>
  <!-- 標題 -->
  <div class="position-absolute w-100" style="top:0%">
    <div class=" pt-5 ps-2">
      <h3 class="all_title">熱銷排行</h3>
    </div>
  </div>
  <!-- 灰底 -->
  <div class="position-absolute bg-light p-5 w-100" style="top:40%">
    <div class="p-5"></div>
  </div>
  <!-- 下 -->
  <!-- 滾動圖 -->
  <div class="bg-light" >
    <div class="container" >
      <div class="swiper py-5" style="margin: 0;">
        <div class="swiper-wrapper"style="height: 50vh;">
          @foreach ($imgpath as $item)
            @if ($loop->index > 0)
              <x-hot-swiper-item index="{{$loop->index + 1}}" :imgpath="$item"/> 
            @endif
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

  </div>
</div>