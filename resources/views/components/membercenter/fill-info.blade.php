@props(['member'])
<div class="my_account_info col-xs-4 col-lg-4 px-4 pt-3 pb-5">
    <div class="row justify-content-center px-4" >
      <div class="inputGroup pt-3">
        <input type="text" required="" autocomplete="off" value="{{$member[0]->name}}">
        <label for="name">姓名</label>
      </div>
      <div class="inputGroup">
        <input type="text" required="" autocomplete="off" value="{{$member[0]->birthday}}">
        <label for="name">生日</label>
      </div>
      <div class="inputGroup">
        <input type="tel" required="" autocomplete="off" value="{{$member[0]->phone}}">
        <label for="phone">手機號碼</label>
      </div>
      <div class="inputGroup">
        <input type="text" required="" autocomplete="off" value="{{$member[0]->mail}}">
        <label for="mail">電子信箱</label>
      </div>
      <div class="inputGroup">
        <input type="password" required="" autocomplete="off">
        <label for="password">舊密碼</label>
      </div>
      <div class="inputGroup">
        <input type="password" required="" autocomplete="off">
        <label for="password">新密碼</label>
      </div>
      <div class="inputGroup">
        <input type="password" required="" autocomplete="off">
        <label for="password">再次確認新密碼</label>
      </div>
      <div class="inputGroup pb-3">
        <button class="btn">確定修改</button>
      </div>
    </div>
</div>