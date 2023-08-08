@props(['imgpaths'])

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      @foreach ($imgpaths as $index => $imgpath)
          @if ($index == 0)
            <div class="carousel-item active">
              <a href="/product/{{$imgpath->pid}}">
                  <img src="{{$imgpath->main_carousel}}" class="d-block w-100" alt="..." >
              </a>
            </div>
          @else
          <div class="carousel-item">
            <a href="/product/{{$imgpath->pid}}">
              <img src="{{$imgpath->main_carousel}}" class="d-block w-100" alt="...">
            </a>
          </div>
          @endif
      @endforeach
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>  