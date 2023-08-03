<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeCarousel;
use App\Models\ProductListNew;
use App\Models\ProductListHot;
use App\Models\SeriesContent;

class ActionFigureController extends Controller
{
    //
    function __construct() {
        $this->carouseldata = new HomeCarousel();
        $this->newdata = new ProductListNew();
        $this->hotdata = new ProductListHot();
        $this->seriesdata = new SeriesContent();
    }

    public function action(){
        $imgcarousel = $this->carouseldata->imgpath();
        $imgnew = $this->newdata->imgpath();
        $imghot = $this->hotdata->imgpath();
        $minions = $this->seriesdata->imgpath('minions');
        $conan = $this->seriesdata->imgpath('conan');
        $hacipupu = $this->seriesdata->imgpath('hacipupu');
        $chip_dale = $this->seriesdata->imgpath('chip_dale');
        $molly = $this->seriesdata->imgpath('molly');
        return view('actionfigure', ['imgpaths'=> $imgcarousel, 'imgnew' => $imgnew, 'imghot' => $imghot, 'minions' => $minions, 'conan' => $conan, 'hacipupu' => $hacipupu, 'chip_dale' => $chip_dale, 'molly' => $molly]);
    }
}
