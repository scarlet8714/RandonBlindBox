@props(['type'])

@if (isset($type) && $type)
<div class="swiper-slide" name="{{ $type->type_name }}">
        <img src="\{{ $type->photo }}" class="img-fluid">
        <div class="text-center t/ext-white" >{{ $type->type_name }}</div>
    </div>
@else
    <div class="swiper-slide" name="技術支持Phil">
        <img src="\imgs\minions\main_minions_at_work\product_frontcover\head.png" class="img-fluid">
        <div class="text-center text-white" >技術支持Phil</div>
    </div>
@endif
