{{-- <div class="container mt-5">
  <div class="row">
    <div class="col-xs-3 col-lg-3"></div>

    <div class="col-xs-6 col-lg-6">
      <div class="login_container position-relative">
        <!-- Header -->
        <h3 class="login-header">登入</h3>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; top: 1em; left: 1em; width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; top: 1em; right: 1em;  width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; left: 1em;  width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; right: 1em; width: 1em; height: 1em;">
        </div>
        <!-- body -->
        <div class="login-body">
          <form method="POST" action="/loginauth">
            @csrf
            <!-- email -->
            <div id="logEmail" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="text" class="input" name="account">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">電</span>
                <span class="label-char" style="--index: 1">子</span>
                <span class="label-char" style="--index: 2">信</span>
                <span class="label-char" style="--index: 3">箱</span>
              </label>
            </div>
            <!-- password -->
            <div id="logpassword" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="password" class="input" name="password">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">密</span>
                <span class="label-char" style="--index: 1">碼</span>
              </label>
            </div>

            <!-- 開始購物 -->
            <input class="btn text-center" id="btnBuy" type="submit" value="開始購物">
          </form>
          <div>
            <a href="{{route('forgetPassword')}}"><button class="btn btn-forget">忘記密碼?</button></a> 
          </div>
        </div>
        <!-- footer -->
        <div class="login-footer">
          <div class="singup">
            <h4>還不是會員？</h4>
            <a href="{{route('register')}}"><button class="btn btn-register text-center">註冊會員</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-3 col-lg-3"></div>
  </div>
</div> --}}

<div class="container mt-5">
  <div class="row">
    <div class="col-xs-3 col-lg-3"></div>


    <div class="col-xs-6 col-lg-6 login_container position-relative">
      <h3 class="login-header">登入</h3>
      <div
        style="border-radius: 50%; background-color: white; position: absolute; top: 1em; left: 1em; width: 1em; height: 1em;">
      </div>
      <div
        style="border-radius: 50%; background-color: white; position: absolute; top: 1em; right: 1em; width: 1em; height: 1em;">
      </div>
      <div
        style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; left: 1em; width: 1em; height: 1em;">
      </div>
      <div
        style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; right: 1em; width: 1em; height: 1em;">
      </div>
      <!-- body -->
      <div class="login-body">
        <form method="POST" action="/loginauth">
          <!-- email -->
          @csrf
          <div id="logEmail" class="wave-group" style="margin-bottom: 15px;">
            <input required="" type="text" class="input" name="account">
            <span class="bar"></span>
            <label class="label">
              <span class="label-char" style="--index: 0">電</span>
              <span class="label-char" style="--index: 1">子</span>
              <span class="label-char" style="--index: 2">信</span>
              <span class="label-char" style="--index: 3">箱</span>
            </label>
          </div>
          <!-- password -->
          <div id="logpassword" class="wave-group" style="margin-bottom: 15px;">
            <input required="" type="password" class="input" name="password">
            <span class="bar"></span>
            <label class="label">
              <span class="label-char" style="--index: 0">密</span>
              <span class="label-char" style="--index: 1">碼</span>
            </label>
          </div>

          <!-- 忘記密碼 -->
          <div>
            <a href="{{route('forgetPassword')}}" class="btn btn-forget">忘記密碼?</a> 
          </div>

          <!-- 開始購物 -->
          <input class="btn text-center" id="btnBuy" type="submit" value="開始購物">
        </form>
      </div>
      <!-- footer -->
      <div class="login-footer">
        <div class="singup">
          <h4>還不是會員？</h4>
          <a href="{{route('register')}}"><button class="btn btn-register text-center">註冊會員</button></a>
        </div>
      </div>
    </div>

    <div class="col-xs-3 col-lg-3"></div>
  </div>
</div>