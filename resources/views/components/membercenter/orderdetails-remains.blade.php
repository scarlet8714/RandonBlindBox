@props(['test'])
@props(['pid'])
{{-- <div class="row justify-content-center mx-2 mb-2"> --}}
  <tr>
    <td class="drawTime col-xs-6 col-sm-10 col-lg-8 py-3" colspan="5">
      <div class="d-flex">
        <span class="ms-5">本次購買剩餘<span class="redNumber">{{ $test[0]->times }}</span>次抽盒機會</span>
        <a class="ms-auto me-3" href="/product/slot/{{ $pid }}">前往抽盒 ></a>
      </div>
    </td>
  </tr>
    
{{-- </div> --}}