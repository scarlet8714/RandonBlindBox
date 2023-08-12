@props(['mail'])
<!-- 左上：一般會員卡片 -->
<div class="row px-2 py-3" style="height: 300px">
  <div class="my_account_card rounded-5 h-100 d-inline-block px-3 pt-3">
    <div class="my_account_card_inner px-3">
      <div class="px-3 py-3 ">
        <h6 class="pt-3">一般會員</h6>
        <h6 class="py-1">{{$mail}}</h6>
      </div>
      <div class="px-3 py-3">
        <h6 class="pt-2">累積消費金額</h6>
        <h6 class="py-2">NT $ 4520</h6>
      </div>
    </div>
  </div>
</div>  