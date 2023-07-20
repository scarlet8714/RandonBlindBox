
<nav class="navbar navbar-expand-lg nav_color">
    <div class="container-fluid">
      <!-- logo -->
      <a class="navbar-brand ms-5" href="#">
        <x-random-logo />
      </a>
      <!--        -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- navitem -->
          <li class="nav-item">
            <a class="nav-link text-white ms-5 mt-1 showtoy" aria-current="page" href="#">
              <span class="fw-bold toy-text h5 pb-1">玩具公仔</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white ms-4 mt-1 showblind" href="#">
              <span class="fw-bold blind-text h5 pb-1">線上抽盲盒</span>
            </a>
          </li>
          <!--        -->
        </ul>
        {{-- <x-homepage-list /> --}}
        <x-homepage-list :imglists="$imglists"/>
        <!-- navicon -->
        <a href="{{route('login')}}"><x-user-icon /></a>
        <a class="showcart"><x-cart-icon /></a>
        <div class="position-absolute d-none cart-container">
          <div class="cartitem d-flex p-3 m-3">
            <div class="col-4 pe-3 d-flex"><img class="img-fluid my-auto" src="./img/a_homepage/p01.jpg" alt=""></div>
            <div class="col-8 position-relative">
              <p>線上抽盲盒</p>
              <p>泡泡馬特 小兵基地系列</p>
              <p>$320 x 1</p>
              <a class="position-absolute end-0 bottom-0 removeproduct">
                <x-trash-icon />
              </a>
            </div>
          </div>
          <div class="d-flex checkout-btn justify-content-center py-2">
            <h5 class="my-auto">訂單結帳</h4>
          </div>
        </div>
        <x-like-icon />
      </div>
    </div>
  </nav>
