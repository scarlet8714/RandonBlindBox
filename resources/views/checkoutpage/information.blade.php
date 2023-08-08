@extends('layouts.app')
@vite(['resources/css/I_check.css', 'resources/js/I_check.js'])

@section('content')
    {{-- <div class="container"> --}}
        {{-- 123icon --}}
        {{-- <x-checkout.circle123 :state="['cart' => 'active', 'information' => 'active', 'confirm' => 'active']"/>
        <x-checkout.navbar />   
    </div> --}}
    {{-- 購買清單 --}}
    {{-- <x-checkout.checkorder /> --}}
    {{-- 商品資料 --}}
    {{-- <div class="row justify-content-center mb-4">
        <div class="cartList col-xs-6 col-sm-10 col-lg-8 py-3">
            <x-checkout.cartlist />
            
            <x-checkout.cartlist-info />
            <x-checkout.cartlist-info1 />
            <x-checkout.cupon />
            <x-checkout.subtotal />
            <x-checkout.delivery-fee />
            <x-checkout.discount />
            <x-checkout.total-price />
        </div>
    </div> --}}
    {{-- 收件方式 --}}
    {{-- <x-checkout.receive-method />
    <x-checkout.receive-method-inner>
        <x-checkout.home-delivery />
        <x-checkout.convenience-delivery />
        <x-checkout.home-delivery-info />
        <x-checkout.convenience-delivery-info />
    </x-checkout.receive-method-inner> --}}
    {{-- 付款方式 --}}
    {{-- <x-checkout.payment-method />
    <x-checkout.payment-method-inner>
        <x-checkout.credit-card />
        <x-checkout.atm />
        <x-checkout.cash />
    </x-checkout.payment-method-inner> --}}
    {{-- 顧客資料 --}}
    {{-- <x-checkout.client-info />
    <x-checkout.client-info-inner>
        <x-checkout.orderer-name />
        <x-checkout.orderer-mail />
        <x-checkout.orderer-tel />
        <x-checkout.address />
    </x-checkout.client-info-inner> --}}
    {{-- 底層按鈕 --}}
    {{-- <x-checkout.information-bottom-button> 
        <x-checkout.back-cart />
        <x-checkout.submit-order />
    </x-checkout.information-bottom-button> --}}
    <div class="container">
        <div class="row justify-content-center">
          <div class="pub-wrap col-sm-8 col-lg-5">
            <ul class="pub-process process-5 pub-process-flex" id="pubProcess">
              <li class="active">
                <span class="ball">1</span>
              </li>
              <li class="active">
                <span class="ball">2</span>
              </li>
              <li><span class="ball">3</span></li>
            </ul>
    
          </div>
        </div>
        <div class="process_name row justify-content-center">
          <div class="row col-sm-8 col-lg-5">
            <div class="col-4">購物車</div>
            <div class="col-4 text-center"><span class="text-center">填寫資料</span></div>
            <div class="col-4"><span style="float: right;">訂單確認</span></div>
          </div>
        </div>
      </div>
      <!-- 下層 -->
      <!-- 購物清單 -->
      <div class="row justify-content-center mx-2 mb-4">
        <div class="check_order col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <span>購物清單 CHECK ORDER</span>
        </div>
      </div>
      <!-- 商品資料 -->
      <div class="row justify-content-center mb-4">
        <div class="cartList col-xs-6 col-sm-10 col-lg-8 py-3">
          <ul>
            <li>商品圖片</li>
            <li>商品名稱</li>
            <li>規格</li>
            <li>單價</li>
            <li>數量</li>
            <li>金額</li>
            <li>移除</li>
          </ul>
          <!-- 商品1 -->
          <ul id="first">
            <li><img src="./img/I_check/head.png" alt="" width="120"></li>
            <li>小小兵秘密基地系列</li>
            <li>盲盒線上抽</li>
            <li>NT$<input type="text" name="price" value="340"></li>
            <li><input type="button" name="minus" value="-" onclick="minus(0)"><input type="text" name="amount"
                value="1"><input type="button" name="plus" value="+" onclick="plus(0)"></li>
            <li id="price0">NT$210</li>
            <!-- 刪除按鈕 -->
            <li>
              <p><svg onclick="delete1()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-trash3 mt-3" viewBox="0 0 16 16">
                  <path
                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg></p>
            </li>
          </ul>
          <!-- 商品2 -->
          <ul>
            <li><img src="./img/I_check/head1.png" alt="" width="120"></li>
            <li>奇奇蒂蒂日常系列</li>
            <li>盲盒線上抽</li>
            <li>NT$<input type="text" name="price" value="240"></li>
            <li><input type="button" name="minus" value="-" onclick="minus(1)"><input type="text" name="amount"
                value="1"><input type="button" name="plus" value="+" onclick="plus(1)"></li>
            <li id="price1">NT$240</li>
            <!-- 刪除按鈕 -->
            <li>
              <p><svg onclick="delete1()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-trash3 mt-3" viewBox="0 0 16 16">
                  <path
                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg></p>
            </li>
          </ul>
          <!-- 優惠券 -->
          <ul class="cupon py-3">
            <li>輸入優惠碼</li>
            <li><input type="text"></li>
            <li><button>確認</button></li>
          </ul>
          <!-- 小計 -->
          <ol class="mt-4">
            <li><span>小計：</span></li>
            <li id="totalPrice" class="fw-bold"></li>
          </ol>
          <ol class="mb-2 mt-1">
            <li><span>運費：</span></li>
            <li id="deliveryfee"><input type="text" name="deliveryfee" value="130"></li>
          </ol>
          <ol class="my-2">
            <li><span>折扣：</span></li>
            <li>NT$0</li>
          </ol>
          <ol class="my-2">
            <li><span>合計：</span></li>
            <li id="totalPrice2" class="fw-bold" onclick="total2()"></li>
          </ol>
        </div>
      </div>
      <!-- 收件方式 -->
      <div class="row justify-content-center mx-2 mt-5">
        <div class="check_order col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path
              d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
          </svg>
          <span>收件資料</span>
        </div>
      </div>
      <!-- 收件方式內容 -->
      <div class="receive_method row justify-content-center mx-2">
        <div class="col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <!-- 送貨方式 -->
          <div class="mt-3">
            <div class="row form-group mx-3">
              <div class="pretty p-default p-round p-smooth my-2">
                <input type="radio" name='type' value='post_office' id="home_delivery" checked='checked' onclick="homedeliveryFee()">
                <div class="state p-primary">
                  <label class="radio">郵寄宅配</label>
                </div>
              </div>
              <div class="pretty p-default p-round p-smooth my-4">
                <input type="radio" name='type' value='convenience_store' id="convenience_store_delivery" onclick="convenienceFee()">
                <div class="state p-primary">
                  <label class="radio">超商取貨</label>
                </div>
              </div>
            </div>
    
            <div id='home_delivery_form' class="form">
              <div class="mx-5">
                <p>付款方式：信用卡(支援Visa, Master, JCB)、ATM轉帳</p>
              </div>
            </div>
    
            <div id='convenience_store_form' style="display: none;" class="form">
              <div class="mx-5">
                <p>付款方式：信用卡(支援Visa, Master, JCB)、ATM轉帳</p>
                <div class="my-3">
                  <div class="pickup_store row mx-0">
                    <div class="pickup_store_name col-6 py-3">
                      <input type="text" placeholder="門市名稱" class="px-3 py-1">
                    </div>
                    <div class="pickup_store_select col-6 py-3">
                      <button class="px-4 py-1">選擇門市</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    
      <!-- 付款方式 -->
      <div class="row justify-content-center mx-2 mt-5">
        <div class="check_order col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path
              d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
          </svg>
          <span>付款方式</span>
        </div>
      </div>
      <!-- 付款方式內容 -->
      <div class="receive_method row justify-content-center mx-2">
        <div class="col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <div class="my-3 mx-4">
            <div class="row form-group">
              <div class="pretty p-default p-round p-smooth my-3">
                <input type="radio" name="payment" checked>
                <div class="state p-primary">
                  <label>信用卡</label>
                </div>
              </div>
              <div class="pretty p-default p-round p-smooth my-3">
                <input type="radio" name="payment">
                <div class="state p-primary">
                  <label>ATM轉帳</label>
                </div>
              </div>
              <div class="pretty p-default p-round my-3">
                <input type="radio" name="payment" disabled />
                <div class="state">
                  <label>貨到付款</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- 顧客資料 -->
      <div class="row justify-content-center mx-2 mt-5">
        <div class="check_order col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path
              d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
          </svg>
          <span>顧客資料</span>
        </div>
      </div>
      <!-- 顧客資料內容 -->
      <div class="receive_method row justify-content-center mx-2">
        <div class="recipient_info col-xs-6 col-sm-10 col-lg-8 px-5 py-3">
          <div class="my-3 mx-3">
            <span class="text-danger">*</span>
            <span>訂貨人姓名</span><br>
            <input type="text" class="my-2 px-2 py-1" placeholder="請輸入真實姓名，以免無法收件">
          </div>
          <div class="my-3 mx-3">
            <span class="text-danger">*</span>
            <span>訂貨人電子信箱</span><br>
            <input type="text" class="my-2 px-2 py-1">
          </div>
          <div class="my-3 mx-3">
            <span class="text-danger">*</span>
            <span>訂貨人電話</span><br>
            <input type="text" class="my-2 px-2 py-1">
          </div>
          <!-- 地址 -->
          <div class="my-3 mx-3">
            <span class="text-danger">*</span>
            <span>地址</span><br>
            <div role="tw-city-selector" class="tw-city-selector mt-2" data-has-zipcode>
            </div>
            <input type="text" name="address" class="px-2 py-1 w-100" placeholder="請輸入收件地址" required>
          </div>
        </div>
      </div>
    
    
    
      <!-- 底層按鈕 -->
      <div class="row justify-content-center my-5">
        <div class="row col-sm-10 col-lg-8">
          <div class="back_cart col-6 mb-5">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
              </svg>
              返回購物車
            </button>
          </div>
          <div class="submit_order col-6">
            <button>
              提交訂單
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    


   


    
@endsection