<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCarousel;
use App\Models\HomeOthers;

class HomeController extends Controller
{
    //
    function __construct() {
        $this->carouseldata = new HomeCarousel();
        $this->others = new HomeOthers();
    }

    public function action(){
        $imgcarousel = $this->carouseldata->imgpath();
        $imgothers= $this->others->imgpath();
        return view('homepage', ['imgpaths'=> $imgcarousel, 'otherimgs' => $imgothers]);
    }
}
