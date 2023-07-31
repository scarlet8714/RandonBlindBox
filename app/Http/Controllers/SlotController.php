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
        // var_dump($product);
        // $this->action->slot();
        // echo $this->pid;
        return view('testSlot', ["product" => $product]);
    }

    // 正式用
    function slotPrize() {
        $this->action->getBoxProduct(1, 6);
        echo $result = $this->action->slot(6);
    }

    // 測試功能用
    function slotTest() {
        $this->action->getBoxProduct(1, 6);
        echo $result = $this->action->slot(6);
    }

    function test() {
        $this->slotTest();
        // return '123';
        // return $this->test;
    }
}
