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

    function slotPrize() {
        $result = $this->slot();
        // $result = $this->action->givePrize(6);
        echo json_encode($result);
    }

    function slotTest() {
        $this->action->getProduct(1, 6);
        echo $result = $this->action->slot();
        // $result = $this->action->givePrize(6);
        // echo json_encode($result);
    }

    function test() {
        $this->slotTest();
        // return '123';
        // return $this->test;
    }
}
