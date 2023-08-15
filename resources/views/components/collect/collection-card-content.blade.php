@props(['product'])
<div class="col-xs-12 col-lg-4 px-3 pb-5 position-relative">
    <a id="popup_show{{ $product->pid }}" class="popup_show" href="#">
      <div class="bg-white card_back2">
        <h6 class="card_text pb-1">{{ $product->publish }}</h6>
        <h6 class="card_text pb-2">{{ $product->name }}</h6>
        <div class="row">
            <div class="col-9 px-2 py-1">
            <div class="progress" style="height: 12px;">
                @if (isset($product->schedule))
                <div class="card_progress" role="progressbar" style="width: {{(100 / ($product->box_count+1)) * $product->schedule}}%;" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100">
                </div>
                @else
                <div class="card_progress" role="progressbar" style="width: 0%;" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100">
                </div>
                @endif
              
            </div>
          </div>
          <div class="col-2">
            @if (isset($product->schedule))
            <h6 class="card_text2 ">{{ $product->schedule }}/{{ ($product->box_count+1) }}</h6>
            @else
            <h6 class="card_text2 ">0/{{ ($product->box_count+1) }}</h6>
            @endif
          </div>
        </div>
      </div>
      <div class="position-absolute card_pic">
        <img src="\{{$product->head_photo}}" class="img-fluid">
      </div>
    </a>
  </div>