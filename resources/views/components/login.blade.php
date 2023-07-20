<div class="container mt-5">
  <div class="row">
    <div class="col-xs-3 col-lg-3"></div>

    <div class="col-xs-6 col-lg-6">
      <div class="login_container position-relative">
        <!-- Header -->
        <h3 class="login-header">登入</h3>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; top: 1em; left: 1em; z-index: 100; width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; top: 1em; right: 1em; z-index: 100; width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; left: 1em; z-index: 100; width: 1em; height: 1em;">
        </div>
        <div
          style="border-radius: 50%; background-color: white; position: absolute; bottom: 1em; right: 1em; z-index: 100; width: 1em; height: 1em;">
        </div>
        <!-- body -->
        <div class="login-body">
          <form>
            <!-- email -->
            <div id="logEmail" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="text" class="input">
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
              <input required="" type="password" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">密</span>
                <span class="label-char" style="--index: 1">碼</span>
              </label>
            </div>

            <!-- 忘記密碼 -->
            {{-- <div>
              <a href="{{route('forgetPassword')}}"><button class="btn btn-forget">忘記密碼?</button></a> 
            </div> --}}

            <!-- 開始購物 -->
            <a href="#" class="btn text-center" id="btnBuy" type="button">開始購物</a>
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
</div>