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
          <a href="/product/{{$imglists['new'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['new'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['new'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][2]->head_photo)}}" alt="">
          </a>
        </div>
      </div>
      <div class="row col-9 ms-1 hot-detail d-none">
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][2]->head_photo)}}" alt="">
          </a>
        </div>
      </div>
      <div class="row col-9 ms-1 series-detail d-none">
        <div class="col-4">
          <a href="/product/{{$imglists['series'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['series'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['series'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][2]->head_photo)}}" alt="">
          </a>
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
          <a href="/product/{{$imglists['new'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['new'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['new'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['new'][2]->head_photo)}}" alt="">
          </a>
        </div>
      </div>
      <div class="row col-9 ms-1 hot-detail d-none">
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['hot'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['hot'][2]->head_photo)}}" alt="">
          </a>
        </div>
      </div>
      <div class="row col-9 ms-1 series-detail d-none">
        <div class="col-4">
          <a href="/product/{{$imglists['series'][0]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][0]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['series'][1]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][1]->head_photo)}}" alt="">
          </a>
        </div>
        <div class="col-4">
          <a href="/product/{{$imglists['series'][2]->pid}}">
            <img class="img-fluid" src="{{URL::to($imglists['series'][2]->head_photo)}}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>