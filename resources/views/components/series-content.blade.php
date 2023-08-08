@props(['imgpath', 'visible'])
<div class="row justify-content-center {{$visible}} seriesphoto">
    <div class="col-2">
      <div class="row justify-content-center">
        <img src="{{$imgpath[0]->series_photo}}" class="img-fluid">
      </div>
    </div>
    <div class="pt-3">
      @switch($imgpath[0]->gate)
          @case('minions')
            <h5 class="fw-bold products_series_title_text text-center">小小兵</h5>
          @break
          @case('conan')
            <h5 class="fw-bold products_series_title_text text-center">名偵探柯南</h5>
          @break
          @case('chip_dale')
            <h5 class="fw-bold products_series_title_text text-center">奇奇與蒂蒂</h5>
          @break
          @case('hacipupu')
            <h5 class="fw-bold products_series_title_text text-center">HACIPUPU</h5>
          @break
          @case('molly')
            <h5 class="fw-bold products_series_title_text text-center">MOLLY</h5>
          @break
              
      @endswitch
    </div>
</div>
<div class="row justify-content-center p-3 {{$visible}} seriesintro">
    <div class="col-10">
        <h6 class="fw-lighter text-center products_series_inner_text lh-base">
        {{$imgpath[0]->series_intro}}
        </h6>
    </div>
</div>