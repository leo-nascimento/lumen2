<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('components.floating-button', 'floating-button');
        Blade::component('components.no-data', 'no-data');
        Blade::component('components.post-card', 'post-card');
        Blade::component('components.title-view', 'title-view');
        Blade::component('components.navbar-site', 'navbar');
        Blade::component('components.fluid-modal', 'fluid-modal');
        Blade::component('components.video-modal', 'video-modal');
        Blade::component('components.first-section', 'first-section');
        Blade::component('components.second-section', 'second-section');
        Blade::component('components.third-section', 'third-section');
        Blade::component('components.fourth-section', 'fourth-section');
        Blade::component('components.footer', 'footer');
    }
}
