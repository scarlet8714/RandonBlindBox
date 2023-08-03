@props(['imgpath', 'visible'])


<div class="row position-relative {{$visible}} serieslist">
    <div class="container py-5">
        <div class="container pb-5">
            <div class="row">
                @foreach ($imgpath as $item)
                    <div class="col-6 col-md-6 col-lg-3">
                        <img src=" {{$item->head_photo}}" class="img-fluid" alt="">
                        <div class="px-4 py-4">
                            <h6 class="text-center top_selling_word lh-1">{{$item->name}}</h6>
                            <h6 class="text-center  all_price lh-1">${{$item->price}}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

