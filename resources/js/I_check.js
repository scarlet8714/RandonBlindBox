// cart--------------------------------------------------------


//减法
function minus(index) {
    //获取当前数量的值
    var amounts = document.getElementsByName("amount");

    //得到第一个amount的元素的value属性的值
    var count = parseInt(amounts[index].value); //数量加1

    if (count <= 1) {
        alert("不能再刪除，快没了！！");
    } else {
        //得到第一个amount的元素的value属性的值
        var count = parseInt(amounts[index].value) - 1; //数量加1

        //重新把count的值绑定在数量文本框里
        amounts[index].value = count;
        var prices = document.getElementsByName("price");
        var price = parseFloat(prices[index].value);
        //乘以Math.pow(10,2)的原因为避免失真
        var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);

        document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;
    }

    total();

}

//加法
function plus(index) {

    //获取当前数量的值
    var amounts = document.getElementsByName("amount");

    //得到第一个amount的元素的value属性的值
    var count = parseInt(amounts[index].value) + 1; //数量加1

    //重新把count的值绑定在数量文本框里
    amounts[index].value = count;

    //当前操作端口的价格也要重新计算
    //得到当前端口的单价
    var prices = document.getElementsByName("price");
    var price = parseFloat(prices[index].value);
    //乘以Math.pow(10,2)的原因为避免失真
    var totalMoney = ((price * Math.pow(10, 2)) * count) / Math.pow(10, 2);

    //把当前价格显示在文本中
    document.getElementById("price" + index).innerHTML = "NT$" + totalMoney;

    total();
}


//求總金额

function total() {
    //得到所有的数量
    var counts = document.getElementsByName("amount");
    //得到所有的單價
    var prices = document.getElementsByName("price");
    var sumMoney = 0;

    for (var i = 0; i < counts.length; i++) {
        //乘以Math.pow(10,2)的原因为避免失真
        sumMoney += (parseFloat(prices[i].value) * Math.pow(10, 2) * parseInt(counts[i].value) / Math.pow(10, 2));
    }

    //把總金額顯示在指定的元素中
    document.getElementById("totalPrice").innerHTML = "NT$" + sumMoney;
}


//删除
function delete1() {
    if (confirm("確定要刪除嗎？")) {
        var del = document.getElementById("first");
        del.parentNode.removeChild(del);
        alert("刪除成功！！");
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
  
  // 刪除
  // 合計
  // 计算总金额
  function totalMoney() {
    var trs = document.getElementsByTagName('table')[1].getElementsByTagName('tr')
    var sum = 0
    for (let i = 1; i < trs.length - 1; i++) {
      sum += parseFloat(trs[i].getElementsByTagName('td')[3].innerText)
    }
    document.getElementById('total').innerText = sum
  }
  
  
  