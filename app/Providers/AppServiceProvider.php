<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HomeLists;
use App\Models\GetCartItem;
use App\Models\GetPid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    function __construct() {
        $this->lists = new HomeLists();
        $this->member = new GetPid();
        $this->gci = new GetCartItem();
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        $imglists = $this->lists->imgpath();
        //
        View::composer('*', function($view) use($imglists){
            $view->with('imglists', $imglists);
        });
        // $token = $request->cookie('token');
        // $mid = $this->member->respid($token);
        // if($mid) {
        //     $item = $this->gci->getcartitem($mid[0]->mid);
        //     View::composer('*', function($view) use($item){
        //         $view->with('membercart', $item);
        //     });
        // }
    }
}