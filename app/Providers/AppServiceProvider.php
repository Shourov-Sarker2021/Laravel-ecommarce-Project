<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\frontends\alert;
use App\View\Components\frontends\notice;
use App\View\Components\frontends\header;
use App\View\Components\frontends\menu;
use App\View\Components\frontends\main;
use App\View\Components\frontends\footer;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('frontends-notice', notice::class);
        Blade::component('frontends-alert', alert::class);
        Blade::component('frontends-header', header::class);
        Blade::component('frontends-menu', menu::class);
        Blade::component('frontends-main', main::class);
        Blade::component('frontends-footer', footer::class);
    }
}
