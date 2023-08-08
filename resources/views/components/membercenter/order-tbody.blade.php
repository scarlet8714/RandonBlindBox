<!-- order-tbody.blade.php 視圖 -->
<tbody>
  <tr class="text-center">
    <td scope="row">{{$orderTable[0]->oid}}</td>
    <td>{{$orderTable[0]->order_date}}</td>
    <td>NT $300</td>
    <td>待發貨</td>
    <td>
      <a class="btn" id="btnDetail" href="{{route('orderdetail')}}">訂單詳情</a>
    </td>
  </tr>
</tbody>
