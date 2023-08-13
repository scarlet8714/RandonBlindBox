@props(['type'])

@if (isset($type))
    <div class="swiper-slide col-3" name="{{ $type->type_name }}" style="height:80px !important;">
        <div class="popup_pic rounded-5 bg-white popup_pic img-fix">
          <img src="\{{ $type->photo }}" class="img-fluid">
        </div>
        <h6 class="text-center text-white py-3 popup_text">{{ $type->type_name }}</h6>
    </div>
@else
    <div class="swiper-slide col-3" name="技術支持Phil">
        <div class="popup_pic rounded-5 bg-white popup_pic img-fix">
        <img src="\imgs\minions\main_minions_at_work\product_frontcover\head.png" class="img-fluid">
        </div>
        <h6 class="text-center text-white py-3 popup_text">技術支持Phil</h6>
    </div>
@endif

