<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCarousel;
use App\Models\HomeOthers;
use App\Models\HomeLists;

class HomeController extends Controller
{
    //
    function __construct() {
        $this->carouseldata = new HomeCarousel();
        $this->others = new HomeOthers();
        $this->lists = new HomeLists();
    }

    public function action(){
        $imgcarousel = $this->carouseldata->imgpath();
        $imgothers= $this->others->imgpath();
        $imglists = $this->lists->imgpath();
        return view('homepage', ['imgpaths'=> $imgcarousel, 'otherimgs' => $imgothers]);
        // return view('homepage', ['imgpaths'=> $imgcarousel, 'otherimgs' => $imgothers, 'imglists' => $imglists]);
    }
}
