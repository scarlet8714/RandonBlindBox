@props(['imgpaths'])
<div class="container">
    <div class="mb-5">
    <div class="text-center fw-bold h3 series_color mt-5"> 玩具公仔</div>
    <div class="row">
      <div class="col-6"><img class="img-fluid" src="{{$imgpaths[0]->main_product}}" alt=""></div>
      <div class="col-6 d-flex flex-column">
        <div class="col-12 mb-auto"><img class="img-fluid" src="{{$imgpaths[1]->main_product}}" alt=""></div>
        <div class="col-12"><img class="img-fluid" src="{{$imgpaths[2]->main_product}}" alt=""></div>
      </div>
    </div>
  </div>


  <div class="d-flex flex-column">
    <div class="text-center fw-bold h3 series_color mt-5">線上抽盲盒</div>
    <div class="row">
      <div class="col-4"><img class="img-fluid" src="{{$imgpaths[3]->main_product}}" alt=""></div>
      <div class="col-4"><img class="img-fluid" src="{{$imgpaths[4]->main_product}}" alt=""></div>
      <div class="col-4"><img class="img-fluid" src="{{$imgpaths[5]->main_product}}" alt=""></div>
    </div>
    <div class="row mt-5 mb-5">
      <div class="col-6"><img class="img-fluid" src="{{$imgpaths[6]->main_product}}" alt=""></div>
      <div class="col-6"><img class="img-fluid" src="{{$imgpaths[7]->main_product}}" alt=""></div>
    </div>
  </div>
</div>