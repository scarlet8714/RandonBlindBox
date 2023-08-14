@props(['orderTable', 'total'])
<!-- order-tbody.blade.php 視圖 -->
<tbody>
  <tr class="text-center">
    <td scope="row">{{$orderTable->oid}}</td>
    <td>{{$orderTable->order_date}}</td>
    <td>NT ${{$total}}</td>
    <td>待發貨</td>
    <td>
      <a class="btn" id="btnDetail" href="{{route('orderdetail', ['oid' => $orderTable->oid])}}">訂單詳情</a>
    </td>
  </tr>
</tbody>
