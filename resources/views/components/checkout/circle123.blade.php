@props(['state'])
<div class="row justify-content-center ">
    <div class="pub-wrap col-sm-8 col-lg-5">
        <ul class="pub-process process-5 pub-process-flex" id="pubProcess">
            <li class="{{$state['cart']}}">
                <span class="ball">1</span>
            </li>
            <li class="{{$state['information']}}">
                <span class="ball">2</span>
            </li>
            <li class="{{$state['confirm']}}">
                <span class="ball">3</span>
            </li>
        </ul>
    </div>
</div>