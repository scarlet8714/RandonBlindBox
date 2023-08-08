@props(['imgpath'])

<div class="swiper-slide mx-2">
    <div class="position-relative">
      <div>
        <a href="/product/{{$imgpath->pid}}"><img src="{{$imgpath->head_photo}}" class="img-fluid" alt=""></a> 
        <div class="px-4 py-4">
          <h6 class="text-center top_selling_word lh-1">{{$imgpath->name}}</h6>
          <h6 class="text-center all_price lh-1">{{$imgpath->price}}</h6>
        </div>
      </div>
    </div>
</div>