<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCarousel;
use App\Models\ProductListNew;

class ActionFigureController extends Controller
{
    //
    function __construct() {
        $this->carouseldata = new HomeCarousel();
        $this->newdata = new ProductListNew();
    }

    public function action(){
        $imgcarousel = $this->carouseldata->imgpath();
        $imgnew = $this->newdata->imgpath();
        return view('actionfigure', ['imgpaths'=> $imgcarousel, 'imgnew' => $imgnew]);
    }
}
