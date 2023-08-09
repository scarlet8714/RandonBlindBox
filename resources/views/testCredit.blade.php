<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send</title>
</head>
<body>
    <form action="https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5" method="POST">
        @csrf
        <label for="">MerchantID</label>
        <input name="MerchantID" value="3002599" type="text"><br>
        <label for="">MerchantTradeNo</label>
        <input name="MerchantTradeNo" value="A8877961" type="text"><br>
        <label for="">MerchantTradeDate</label>
        <input name="MerchantTradeDate" value="2023/08/09 08:55:35" type="text"><br>
        <label for="">PaymentType</label>
        <input name='PaymentType' type="text" value='aio'><br>
        <label for="">TotalAmount</label>
        <input name="TotalAmount" value=320 type="text"><br>
        <label for="">TradeDesc</label>
        <input name="TradeDesc" value="test123" type="text"><br>
        <label for="">ItemName</label>
        <input name="ItemName" value="test123" type="text"><br>
        <label for="">ReturnURL</label>
        <input name="ReturnURL" value="https://cartoonworld6611.000webhostapp.com/testCridit.html" type="text"><br>
        <label for="">ChoosePayment</label>
        <input name="ChoosePayment" value="Credit" type="text"><br>
        <label for="">CheckMacValue</label>
        <input name="CheckMacValue" value="648291C6F83F01D0F4943DBE976B9DFE81F4C7A0FD638EF60C89EE1B0F447C14" type="text"><br>
        <label for="">EncryptType</label>
        <input name="EncryptType" value=1 type="text"><br>

        <input type="submit" value="提交測試">
    </form>

    <?php
        // IV KEY
        $HashIV = 'hT5OJckN45isQTTs';
        $HashKey = 'spPjZn66i0OhqJsQ';
        $put['HashKey'] = $HashKey;
        $en = []; 

        $test = [
            'MerchantID' => '3002599',
            'MerchantTradeNo' => 'A8877961',
            'MerchantTradeDate' => '2023/08/09 08:55:35',
            'PaymentType' => 'aio',
            'TotalAmount' => 320,
            'TradeDesc' => strtolower(urlencode('test123')),
            'ItemName' => 'test123',
            'ReturnURL' => 'https://cartoonworld6611.000webhostapp.com/testCridit.html',
            'ChoosePayment' => 'Credit',
            'EncryptType' => 1,
        ];
        // $waitEn = 'PaymentType=aio&MerchantTradeDate=2023/08/09 08:55:35&MerchantTradeNo=A8877961&MerchantID=3002599&TotalAmount=100&TradeDesc=測試商品&ItemName=測試商品&ReturnURL=https://cartoonworld6611.000webhostapp.com/testCridit.html&ChoosePayment=Credit';
        // sort(url$waitEn);
        // parse_str($waitEn, $test);
        // var_dump($test);
        /*** Step. 1 :排序 ***/
        ksort($test);
        $en = $test;
        /*** Step. 2 :加上Hash值 ***/
        $en['HashIV'] = $HashIV;
        $en = array_merge($put, $en);
        $en = http_build_query($en);
        $en = str_replace('=', '%3d', $en);
        $en = str_replace('&', '%26', $en);
        var_dump($en);

        echo '<br><br><br><br><br>';

        /*** Step. 3 :URL encode ***/
        $temp = urlencode($en);
        /*** Step. 4 :轉小寫 ***/
        $temp = strtolower($temp);
        /*** Step. 5 :SHA 256 加密 ***/
        $temp = hash('sha256', $temp);
        /*** Step. 6 :轉大寫 ***/
        $temp = strtoupper($temp);

        // 產生加密值
        // echo strtoupper(hash('sha256', strtolower(urlencode(http_build_query($en)))));
        $test['CheckMacValue'] = $temp;
        // $test['StoreID'] = '';
        // $test['ClientBackURL'] = 'https://www.google.com';
        var_dump(http_build_query($test));
        echo '<br><br><br><br><br>';
        var_dump($en);
        echo '<br><br><br><br><br>';

    ?>
</body>
</html>