@props(['imgpath'])

<div class="swiper-slide px-2">
    <div class="position-relative">
      <div>
        <img src="{{$imgpath->photo_bg}}" class="img-fluid" alt="">
        <div class="px-4 py-4">
          <h6 class="text-center top_selling_word lh-1">{{$imgpath->name}}</h6>
          <h6 class="text-center all_price lh-1">{{$imgpath->price}}</h6>
        </div>
      </div>
    </div>
</div>