@props(['imglists'])

<div class="toy-container position-absolute d-none">
    <div class="row my-auto">
      <div class="col-3 toy-list text-end pe-5">
        <ul style="list-style-type: none;">
          <li class="mb-2 new-list">新品上市</li>
          <li class="mb-2 hot-list">熱銷排行</li>
          <li class="mb-2 series-list">系列商品</li>
        </ul>
      </div>
      <div class="row col-9 ms-1 new-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][2]->head_photo}}" alt="">
        </div>
      </div>
      <div class="row col-9 ms-1 hot-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][2]->head_photo}}" alt="">
        </div>
      </div>
      <div class="row col-9 ms-1 series-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][2]->head_photo}}" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="blind-container position-absolute d-none ">
    <div class="row my-auto">
      <div class="col-3 toy-list text-end pe-5">
        <ul style="list-style-type: none;">
          <li class="mb-2 new-list">新品上市</li>
          <li class="mb-2 hot-list">熱銷排行</li>
          <li class="mb-2 series-list">系列商品</li>
        </ul>
      </div>
      <div class="row col-9 ms-1 new-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['new'][2]->head_photo}}" alt="">
        </div>
      </div>
      <div class="row col-9 ms-1 hot-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['hot'][2]->head_photo}}" alt="">
        </div>
      </div>
      <div class="row col-9 ms-1 series-detail d-none">
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][0]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][1]->head_photo}}" alt="">
        </div>
        <div class="col-4">
          <img class="img-fluid" src="{{$imglists['series'][2]->head_photo}}" alt="">
        </div>
      </div>
    </div>
  </div>