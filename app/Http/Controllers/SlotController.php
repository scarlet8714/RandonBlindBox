<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Https;
use App\Models\SlotAction;

class SlotController extends Controller
{
    private $pid;

    // 設定初始化建構子，抓取
    function __construct() {
        $this->action = new SlotAction();
    }

    // 顯示抽獎畫面
    function slot($pid) {
        $this->pid = $pid;
        // 取得該商品編號資料
        $product = $this->action->getProduct($this->pid);
        // 預計若有mid or token 則用該資料去找->用token找， 目前預設1
        if (1) {
            $times = $this->action->getMemberTimes(1, $pid);
        }
        if (isset($times)) {
            return view('slot', ["product" => $product, "times" => $times]);
        }
        return view('slot', ["product" => $product]);
    }

    // 正式用
    function slotPrize(Request $request) {
        // return json_encode($request->pid . 'get');

        $this->action->getBoxProduct(1, $request->pid);
        // 傳送訂單號
        $result = $this->action->slot(987);
        // var_dump($result);
        return json_encode($result);
    }

    function testGo(Request $request) {
        // $test = $request->test;
        $test2 = $request->pid;
        // $test = $test . $test2;
        // echo $test;
        // var_dump($test);
        return json_encode($test2);
    }
}
