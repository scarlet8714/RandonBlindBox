<div class="row col-xs-6 col-sm-6 col-lg-6">
    <div class="cardInfo">
      <div class="table-responsive">
        <table class="table tableInfo">
          <thead>
            <tr>
              <th style="padding-top:3em;">⋮ 訂單資訊</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>訂單編號：</td>
              <td>{{$ordernumber}}</td>
            </tr>
            <tr>
              <td>訂單日期：</td>
              <td>{{$ordertime}}</td>
            </tr>
            <tr>
              <td>訂單狀態：</td>
              <td style="color: red;">{{$orderstatus}}</td>
            </tr>
            <tr>
              <td style="padding-bottom:3em;">訂單完成時間：</td>
              <td>{{$ordertime}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>