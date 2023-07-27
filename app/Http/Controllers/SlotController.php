<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlotAction;

class SlotController extends Controller
{
    private $test;

    // 設定初始化建構子，抓取
    function __construct() {
        $this->action = new SlotAction();
    }

    function slot() {
        // $this->action->getProduct(1, 6);
        // $this->action->slot();
        return view('testSlot');
    }

    // 正式用
    function slotPrize() {
        $this->action->getProduct(1, 6);
        echo $result = $this->action->slot(6);
    }

    // 測試功能用
    function slotTest() {
        $this->action->getProduct(1, 6);
        echo $result = $this->action->slot(6);
    }

    function test() {
        $this->slotTest();
        // return '123';
        // return $this->test;
    }
}
