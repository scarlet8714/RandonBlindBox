@props(['content'])
<tbody>
    <tr class="table_inner">
      <td class="px-4 py-3">
        <img src="{{URL::to($content->imgpath)}}" alt="圖片">
      </td>
      <td a href="商品詳情頁">{{$content->name}}</td>
      <td>盲盒線上抽</td>
      <td>NT ${{$content->price}}</td>
      <td>{{$content->quantity}}</td>
    </tr>
</tbody>