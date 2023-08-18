@props(['type'])
@props(['isown'])

@if (isset($type))
    <div class="swiper-slide col-1 align" name="{{ $type->type_name }}" style="height:100px !important;">
        <div class="popup_pic rounded-5 bg-white popup_pic img-fix">
            @if ($isown == "1")
                <img src="\{{ $type->photo }}" class="img-fluid">
            @else
                <img style='filter:grayscale(1)' src="\{{ $type->photo }}" class="img-fluid">
            @endif
        </div>
        <h6 class="text-center text-white popup_text">{{ $type->type_name }}</h6>
    </div>
@else
    <div class="swiper-slide col-3" style='filter:grayscale(1)' name="技術支持Phil" style="height:auto !important;">
        <div class="popup_pic rounded-5 bg-white popup_pic img-fix">
        <img src="\imgs\minions\main_minions_at_work\product_frontcover\head.png" class="img-fluid">
        </div>
        <h6 class="text-center text-white py-3 popup_text">技術支持Phil</h6>
    </div>
@endif

