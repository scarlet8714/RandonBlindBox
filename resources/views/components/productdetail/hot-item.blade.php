@props(['imgpath'])

<div class="swiper-slide mx-2">
      <div>
        <a href="/product/{{$imgpath->pid}}"><img src="{{URL::to($imgpath->head_photo)}}" class="img-fluid" alt=""></a> 
        <div class="px-4 py-4">
          <h6 class="text-center top_selling_word lh-1">{{$imgpath->name}}</h6>
          <h6 class="text-center  all_price lh-1">${{$imgpath->price}}</h6>
        </div>
      </div>
</div>