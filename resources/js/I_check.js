// cart--------------------------------------------------------
let dfee;
let smoney  = 0;
window.onload = function(){
  total();
}
//減法
function minus(index) {
  var amounts = document.getElementsByName("amount");
  var count = parseInt(amounts[index].value); //數量加1
  if (count <= 1) {
      alert("不能再刪除！！");
  } else {
      var count = parseInt(amounts[index].value) - 1;
      amounts[index].value = count;
      var prices = document.getElementsByName("price");
      var price = parseInt(prices[index].value);
      var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);
      document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;
      
  }
  total();
  calculateTotal();
}
window.minus = minus;



//加法
function plus(index) {
  var amounts = document.getElementsByName("amount");
  var count = parseInt(amounts[index].value) + 1;
  amounts[index].value = count;
  var prices = document.getElementsByName("price");
  var price = parseInt(prices[index].value);
  var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);
  document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;
  total();
  calculateTotal();
}
window.plus = plus;

// 小計
function total() {
  var counts = document.getElementsByName("amount");
  var prices = document.getElementsByName("price");
  var sumMoney = 0;
  for (var i = 0; i < counts.length; i++) {
      sumMoney += (parseInt(prices[i].value)  * parseInt(counts[i].value));
  }
  document.getElementById("subTotal").innerHTML = "NT$" + sumMoney;
  smoney = sumMoney;
  calculateTotal();
}


// 合計
function calculateTotal() {
  console.log('123');
  document.getElementById("totalAmount").innerHTML = "NT$" + (Number(smoney) + Number(dfee));
}
window.calculateTotal = calculateTotal;

// information--------------------------------------------------------

// 運費更動＋收件資料
$(document).ready(function() {
  var homedeliveryfee = 130;
  $('#amount_value').text('NT$' + homedeliveryfee);
  homedeliveryFee()

  $('input[type=radio][name="type"]').on('change', function () {
    switch ($(this).val()) {
      case 'post_office':
        $("#payment1").show();
        $("#payment2").hide();
        break;
      case 'convenience_store':
        $("#payment1").hide();
        $("#payment2").show();
        convenienceFee()
        break;
    }
  });
});

function convenienceFee() {
  dfee = 60;
  document.getElementById("deliveryfee").innerHTML = "NT$" + dfee;
  calculateTotal();
}
window.convenienceFee = convenienceFee;

function homedeliveryFee() {
dfee = 80;
document.getElementById("deliveryfee").innerHTML = "NT$" + dfee;
calculateTotal();
}
window.homedeliveryFee = homedeliveryFee;

function blackcatFee() {
dfee = 130;
document.getElementById("deliveryfee").innerHTML = "NT$" + dfee;
calculateTotal();
}
window.blackcatFee = blackcatFee;
  
  

  

  
  // 地址
  $(function () {
    new TwCitySelector();
  })
  

  
  