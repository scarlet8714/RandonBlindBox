<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlotAction;

class SlotController extends Controller
{
    private $pid;

    // 設定初始化建構子，抓取
    function __construct() {
        $this->action = new SlotAction();
    }

    function slot($pid) {
        $this->pid = $pid;
        $product = $this->action->getProduct($this->pid);
        // 預計若有mid or token 則用該資料去找->用token找， 目前預設1
        if (1) {
            $times = $this->action->getMemberTimes(1, $pid);
        }
        // $this->action->slot();
        if (isset($times)) {
            return view('testSlot', ["product" => $product, "times" => $times]);
        }
        return view('testSlot', ["product" => $product]);
    }

    // 正式用
    function slotPrize() {
        $this->action->getBoxProduct(1, 1);
        echo $result = $this->action->slot(987);
    }

    function test() {
        $this->action->test();
    }
}
