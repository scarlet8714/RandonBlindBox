<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HomeLists;

class AppServiceProvider extends ServiceProvider
{
    function __construct() {
        $this->lists = new HomeLists();
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
    public function boot(): void
    {
        $imglists = $this->lists->imgpath();
        //
        View::composer('*', function($view) use($imglists){
            $view->with('imglists', $imglists);
        });
    }
}