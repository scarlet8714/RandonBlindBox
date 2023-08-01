
// cart--------------------------------------------------------
// $('#minus').on('click', function () {
//   minus(0);
// });
// $('#plus').on('click', function () {
//   plus(0);
// });
//減法
function minus(index) {
  //獲取當前數值
  var amounts = document.getElementsByName("amount");
  //得到第一个amount的元素的value屬性的值
  var count = parseInt(amounts[index].value); //數量加1
  if (count <= 1) {
      alert("不能再刪除！！");
  } else {
      //得到第一个amount的元素的value属性的值
      var count = parseInt(amounts[index].value) - 1;
      amounts[index].value = count;
      var prices = document.getElementsByName("price");
      var price = parseInt(prices[index].value);
      //乘以Math.pow(10,2)的原因为避免失真
      var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);
      document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;
  }
  total();
}

// 小計
function total() {
  //得到所有的數量
  var counts = document.getElementsByName("amount");
  //得到所有的單價
  var prices = document.getElementsByName("price");
  var sumMoney = 0;
  for (var i = 0; i < counts.length; i++) {
      sumMoney += (parseInt(prices[i].value)  * parseInt(counts[i].value));
  }
  document.getElementById("totalPrice").innerHTML = "NT$" + sumMoney;
}

//加法
function plus(index) {
  //當前數量的值
  var amounts = document.getElementsByName("amount");
  //得到第一个amount的元素的value属性的值
  var count = parseInt(amounts[index].value) + 1;
  //重新把count的值绑定在数量文本框里
  amounts[index].value = count;
  //得到單價
  var prices = document.getElementsByName("price");
  var price = parseInt(prices[index].value);
  var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);
  //顯示價格
  document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;
  total();
}
// 合計
function getAmount() {
  var totalprice = document.getElementById("totalPrice");
  var deliveryfee = document.getElementById("deliveryfee");
  var sum = 0;
  for (var i = 0; i < deliveryfee.length; i++) {
      sum = (parseInt(totalprice[i].value) + parseInt(deliveryfee[i].value));
  } 
  document.getElementById("totalPrice2").innerHTML = "NT$" + sum;
  
  // document.getElementById("totalPrice2").value = (parseInt(document.getElementById("totalPrice").value) + parseInt(document.getElementById("deliveryfee").value));
}
// getAmount();

//删除
function delete1() {
  if (confirm("確定要刪除嗎？")) {
      var del = document.getElementById("first");
      del.parentNode.removeChild(del);
      alert("刪除成功！");
  }
}





// information--------------------------------------------------------

// 運費更動
function convenienceFee() {
    var conveniencefee = 60;
    document.getElementById("deliveryfee").innerHTML = "NT$" + conveniencefee;
  }
  function homedeliveryFee() {
    var homedeliveryfee = 130
    document.getElementById("deliveryfee").innerHTML = "NT$" + homedeliveryfee;
  }
  
  
  // 收件資料
  $('input[type=radio][name="type"]').on('change', function () {
    switch ($(this).val()) {
      case 'post_office':
        $("#home_delivery_form").show()
        $("#convenience_store_form").hide()
        $("#atm-form").hide()
        break
      case 'convenience_store':
        $("#home_delivery_form").hide()
        $("#convenience_store_form").show()
        $("#atm-form").hide()
        break
    }
  })
  
  $('#domestic-submmit').on('click', function (event) {
    event.preventDefault()
  
  })
  
  $('#aboard-submmit').on('click', function (event) {
    event.preventDefault()
  
  })
  
  function validateForm(no, month, year, csv) {
    let errors = []
  
    if (no.split('').length !== 12) errors.push('invalid card number')
    if (month.split('').length !== 2) errors.push('invalid card month')
    if (year.split('').length !== 2) errors.push('invalid card year')
    if (csv.split('').length !== 3) errors.push('invalid card csv')
  
    return errors
  }
  
  // 地址
  $(function () {
    new TwCitySelector()
  })
  

  
  