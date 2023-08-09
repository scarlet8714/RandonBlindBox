<div class="container mt-5">
    <div class="row">
      <div class="col-xs-3 col-lg-3"></div>

        <div class="col-xs-6 col-lg-6 reset_container position-relative">
          <!-- Header -->
          <h3 class="reset-header">重設密碼</h3>
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
          <div class="reset-body">
            <form>
              <!-- email -->
              <div id="newCode" class="wave-group" style="margin-bottom: 15px;">
                <input required="" type="text" class="input">
                <span class="bar"></span>
                <label class="label">
                  <span class="label-char" style="--index: 0">請</span>
                  <span class="label-char" style="--index: 1">輸</span>
                  <span class="label-char" style="--index: 2">入</span>
                  <span class="label-char" style="--index: 3">新</span>
                  <span class="label-char" style="--index: 4">密</span>
                  <span class="label-char" style="--index: 5">碼</span>
                </label>
              </div>

              <div id="passwordCheck" class="wave-group" style="margin-bottom: 15px;">
                <input required="" type="text" class="input">
                <span class="bar"></span>
                <label class="label">
                  <span class="label-char" style="--index: 0">新</span>
                  <span class="label-char" style="--index: 1">密</span>
                  <span class="label-char" style="--index: 2">碼</span>
                  <span class="label-char" style="--index: 3">確</span>
                  <span class="label-char" style="--index: 4">認</span>
                </label>
              </div>



              <!-- 重設密碼 -->
              <a href="{{route('login')}}" class="btn text-center" id="resetPassword" type="button">重設密碼</a>
            </form>
          </div>
        </div>



      <div class="col-xs-3 col-lg-3"></div>
    </div>
  </div>