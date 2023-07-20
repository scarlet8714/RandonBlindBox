@props(['imgpaths'])

{{-- @foreach ($imgpaths as $imgpath)
    {{gettype($imgpath)}}
@endforeach --}}
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="">
            <img src="{{$imgpaths[0]->main_carousel}}" class="d-block w-100" alt="..." >
        </a>
        {{-- <img src="imgs/a_homepage/bg.jpg" class="d-block w-100" alt="..."> --}}
      </div>
      <div class="carousel-item">
        <img src="{{$imgpaths[1]->main_carousel}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{$imgpaths[2]->main_carousel}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{$imgpaths[3]->main_carousel}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{$imgpaths[4]->main_carousel}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>