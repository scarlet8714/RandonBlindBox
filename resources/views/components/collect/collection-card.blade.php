@props(['product'])
<!-- 收集款式卡片 -->
<div class="bg-light">
  <div class="container cardblock">
    <div class="row card_back1">
      @for ($i = 0; $i < count($product[0]); $i++)
        <x-collect.collection-card-content :product="$product[0][$i]"/>
      @endfor
    </div>
  </div>
</div>