@extends('layouts.app')
@vite(['resources/css/H_member.css'])
@section('content')

{{-- <x-membercenter.small-navbar /> --}}


        {{-- 下層  --}}
        {{-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-1 col-lg-2"></div>

                <div class="col-xs-4 col-lg-4 px-3 pt-3">
                    <x-membercenter.accumulated />
                    <x-membercenter.membership />
                </div>

                <x-membercenter.fill-info />

                <div class="col-xs-1 col-lg-2"></div>
            </div>
        </div> --}}
        <div class="container">
            <div class="pt-3">
              <h4 class="text-center fw-bold py-5">會員中心</h4>
            </div>
            <div class="row justify-content-center" >    
              <div class="col-xs-1 col-lg-1"></div>
              <!-- 中間icon導覽列 -->
              <div class="col-xs-8 col-lg-6 pb-4">
                <div class="row justify-content-center">
                  <!-- 我的資料 -->
                  <div class="my_account col-2">
                    <a href="" class="row justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                      </svg>
                      <div class="text-center">
                        <h6 class="pt-2 text-dark">我的資料</h6>
                      </div>
                    </a>
                  </div>
                  <!-- 我的訂單 -->
                  <div class="my_order col-2 ">
                    <a href="" class="row justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-card-checklist " viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                      </svg>
                      <div class="text-center">
                        <h6 class="pt-2 text-dark">我的訂單</h6>
                      </div>
                    </a>
                  </div>
                  <!-- 折扣優惠 -->
                  <div class="my_message col-2">
                    <a href="" class="row justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                      </svg>
                      <div class="text-center">
                        <h6 class="pt-2 text-dark">折扣優惠</h6>
                      </div>
                    </a>
                  </div>
                  <!-- 收藏清單 -->
                  <div class="favorite_list col-2">
                    <a href="" class="row justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clipboard-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z"/>
                        <path d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z"/>
                      </svg>
                      <div class="text-center">
                        <h6 class="pt-2 text-dark">喜好清單</h6>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <!-- 登出按鈕 -->
              <div class="log_out col-xs-1 col-lg-1" style="height: 60px;">
                <div>
                  <button onclick="window.location = '{{route('logout')}}'">登出</button>
                </div>
              </div>
              <!-- 下層 -->
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xs-1 col-lg-2"></div>
                  <!-- 左邊 -->
                  <div class="col-xs-4 col-lg-4 px-3 pt-3">          
                    <!-- 左上：一般會員卡片 -->
                    <div class="row px-2 py-3" style="height: 300px">
                      <div class="my_account_card rounded-5 h-100 d-inline-block px-3 pt-3">
                        <div class="my_account_card_inner px-3">
                          <div class="px-3 py-3 ">
                            <h6 class="pt-3">一般會員</h6>
                            <h6 class="py-1">帳號 : {{$member[0]->mail}}</h6>
                          </div>
                          <div class="px-3 py-3">
                            <h6 class="pt-2">累積消費金額</h6>
                            <h6 class="py-2">NT $ 0</h6>
                          </div>
                        </div>
                      </div>
                    </div>  
                    <!-- 左下：會員資格規定 -->
                    <div class="row px-1" style="">
                      <div class="my_account_rule  d-inline-block py-2">
                        <div class="row justify-content-center">
                          <!-- 上方圖形 -->
                          <div class="row justify-content-center">
                            <div class="pub-wrap col-sm-12 col-lg-12">
                              <ul class="pub-process process-5 pub-process-flex" id="pubProcess">
                                <li class="active">
                                  <!-- <span class="ball">1</span> -->
                                </li>
                                <li class="active">
                                  <span class="normal_member ball d-flex">
                                    <img class = "m-auto" src="imgs/material/member.png" alt="">
                                  </span>
                                </li>
                                <li class="">
                                  <span class="vip_member ball d-flex">
                                    <img  class = "m-auto" src="imgs/material/vipmember.png" alt="">
                                  </span>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="process_name row justify-content-center">
                            <div class="row col-sm-12 col-lg-12 px-0">
                              <div class="col-4 px-0"></div>
                              <div class="col-5 text-center"><span class="ps-3">一般會員</span></div>
                              <div class="col-3 pe-3"><span style="float: right;">VIP</span></div>
                            </div>
                          </div>
                          <!-- 下方條件 -->
                          <div>
                            <table class="table mt-3">
                              <tbody>
                                <tr class="">
                                  <th scope="row" class="table-active">會員資格</th>
                                  <td colspan="2" class="table-active">加入會員即可獲得</td>
                                  <td  class="table-active">一年內消費滿5000元
                                  </td>
                                </tr>
                                <tr>
                                  <th scope="row">生日優惠</th>
                                  <td colspan="2">100元購物金</td>
                                  <td>300元購物金</td>
                                </tr>
                                <tr>
                                  <th scope="row" class="table-active">專屬優惠</th>
                                  <td colspan="2" class="table-active">X</td>
                                  <td  class="table-active">每次購買享95折優惠</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <!-- 右邊：基本資料 -->
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
                        <label for="password">修改密碼</label>
                      </div>
                      <div class="inputGroup pb-3">
                        <button class="btn">確定修改</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-1 col-lg-2"></div>
                </div>
              </div>
              
            </div>
          </div>

    

@endsection