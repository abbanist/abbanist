<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.frontLayout.front_footer',
                          'layouts.frontLayout.front_header',
                          'layouts.frontLayout.front_sidebar',
                          'layouts.frontLayout.front_design',
                      ], function ($view) {
             
        $Menus = \App\Menu::with('children')->where('parent_id','=',0)->orderBy('orderm')->get();
            $view->with('Menus', $Menus); 

        $Banners = \App\Banners::get();
                $view->with('Banners', $Banners); 

        $products = \App\Product::get();
                $view->with('products', $products);

        $frontsetup = \App\Setup::get();
            $view->with('frontsetup', $frontsetup); 

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
