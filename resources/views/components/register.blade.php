<div class="container mt-5">
    <div class="row">
      <div class="col-xs-3 col-lg-3"></div>

      <div class="col-xs-6 col-lg-6">
        <div class="register_container position-relative">
          <!-- Header -->
          <h3 class="register-header">註冊</h3>
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
         <div class="register-body">
          <form method="POST" action="/register">
            @csrf
            <!-- email -->
            <div id="registerEmail" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="text" name="email" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">電</span>
                <span class="label-char" style="--index: 1">子</span>
                <span class="label-char" style="--index: 2">信</span>
                <span class="label-char" style="--index: 3">箱</span>
              </label>
            </div>

            <!-- 姓名 -->
            <div id="customerName" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="text" name="name" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">姓</span>
                <span class="label-char" style="--index: 1">名</span>
              </label>
            </div>

            <!-- 手機 -->
            <div id="phoneNumber" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="text" name="phone" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">手</span>
                <span class="label-char" style="--index: 1">機</span>
              </label>
            </div>

            <!-- 生日 -->
            <div id="birthday" class="wave-group" style="margin-bottom: 15px;">
              <input required="" type="date" name="birthday" class="input">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">生</span>
                <span class="label-char" style="--index: 1">日</span>
              </label>
            </div>


            <!-- password -->
            <div class="wave-group registerPassword" style="margin-bottom: 15px;">
              <input required type="password" name="pwd" class="input pwd">
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">密</span>
                <span class="label-char" style="--index: 1">碼</span>
              </label>
            </div>
            
            <div class="wave-group registerPassword" style="margin-bottom: 15px;">
              {{-- <div class="d-flex"> --}}
                <input required type="password" name="repwd" class="input repwd" style="display: inline-block;" onkeyup="auth()">
                <span class="authicon d-inline-block d-none">
                  
                </span>
              {{-- </div> --}}
              
              <span class="bar"></span>
              <label class="label">
                <span class="label-char" style="--index: 0">再</span>
                <span class="label-char" style="--index: 1">次</span>
                <span class="label-char" style="--index: 2">輸</span>
                <span class="label-char" style="--index: 3">入</span>
                <span class="label-char" style="--index: 4">密</span>
                <span class="label-char" style="--index: 5">碼</span>
              </label>
            </div>

            <!-- 建立帳號 -->
            <input class="btn text-center" id="btnAccount" type="submit" disabled value="建立帳號">
          </form>
        </div>
        <!-- footer -->
        <div class="register-footer">
          <div class="singup">
            <h4>已經有帳號？</h4>
            <button class="btn btn-register text-center" onclick="window.location = '{{ route('login') }}'">登入會員</button>
          </div>
        </div>
      </div>


      <div class="col-xs-3 col-lg-3"></div>
    </div>
  </div>
</div>