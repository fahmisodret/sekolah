<?php

namespace App\Providers;

use File;
use Illuminate\Support\ServiceProvider;

class FrontMenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $menus = [];
        if (File::exists(base_path('resources/laravel-admin/front.json'))) {
            $menus = json_decode(File::get(base_path('resources/laravel-admin/front.json')));
            view()->share('frontMenus', $menus);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
