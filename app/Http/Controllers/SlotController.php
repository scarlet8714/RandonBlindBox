<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Https;
use App\Models\SlotAction;
use App\Models\GetPid;

class SlotController extends Controller
{
    private $pid;

    // 設定初始化建構子，抓取
    function __construct() {
        $this->action = new SlotAction();
        $this->member = new GetPid();
    }

    // 顯示抽獎畫面
    function slot($pid) {
        $this->pid = $pid;
        // 取得該商品編號資料
        $product = $this->action->getProduct($this->pid);
        // 預計若有mid or token 則用該資料去找->用token找， 目前預設1
        if (isset($_COOKIE['token'])) {
            $mid = $this->member->respid($_COOKIE['token'])[0]->mid;
            $times = $this->action->getMemberTimes($mid, $pid);
        }
        if (isset($times)) {
            return view('slot', ["product" => $product, "times" => $times, "pid" => $pid]);
        }
        return view('slot', ["product" => $product, "pid" => $pid]);
    }

    // 正式用
    function slotPrize(Request $request) {
        $this->action->getBoxProduct($request->boxId, $request->pid);
        // 會員編號
        $mid = $this->member->respid($_COOKIE['token'])[0]->mid;
        // 取得並傳送訂單號
        $oid = $this->action->getOid($_COOKIE['token'])[0]->oid;
        // dd($oid);
        $result = $this->action->slot($mid, $oid);
        return json_encode($result);
    }

    // 取得訂單詳情的抽獎資料
    function orderResult($oid) {
        $result = $this->action->getOrderPrize($oid);
        return $result;
    }

    function testGo(Request $request) {
        // $test = $request->test;
        // echo floor(rand(1, 4));
        // $test2 = $request->pid;
        // $this->action->getBullet($test2);
        // $test = $test . $test2;
        // echo $test;
        // var_dump($test);
        $this->action->getOrderPrize('4840901');
        // return json_encode($test2);
    }
}
