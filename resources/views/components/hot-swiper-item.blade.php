@props(['imgpath', 'index'])
<div class="swiper-slide px-2">
    <div class="position-relative">
      <div>
        <a href="/product/{{$imgpath->pid}}"><img src="{{$imgpath->head_photo}}" class="img-fluid" alt=""></a> 
        <table>
          <tr>
            <td>
              <h1 class="display-1 top_selling_number">{{$index}}</h1>
            </td>
            <td>
              <div class="px-4">
                <h6 class="fw-bold top_selling_word lh-1">POP MART</h6>
                <h6 class="fw-normal top_selling_word lh-1">小小兵秘密基地系列 </h6>
                <h6 class="fw-bold all_price lh-1">$300</h6>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>