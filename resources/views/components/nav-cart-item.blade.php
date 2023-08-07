<div class="cartitem d-flex p-3 m-3">
    <div class="col-4 pe-3 d-flex"><img class="img-fluid my-auto" src="{{URL::to($img)}}" alt=""></div>
    <div class="col-8 position-relative">
      <p>線上抽盲盒</p>
      <p>{{$name}}</p>
      <p>{{$price}} x {{$quantity}}</p>
      <a class="position-absolute end-0 bottom-0 removeproduct">
        <x-trash-icon />
      </a>
    </div>
</div>