@props(['imgpath', 'visible'])
<div class="row justify-content-center {{$visible}} seriesphoto">
    <div class="col-2">
      <div class="row justify-content-center">
        <img src="{{$imgpath[0]->series_photo}}" class="img-fluid">
      </div>
    </div>
    <div class="pt-3">
      <h5 class="fw-bold products_series_title_text text-center">{{$imgpath[0]->gate}}</h5>
    </div>
</div>
<div class="row justify-content-center p-3 {{$visible}} seriesintro">
    <div class="col-10">
        <h6 class="fw-lighter text-center products_series_inner_text lh-base">
        {{$imgpath[0]->series_intro}}
        </h6>
    </div>
</div>