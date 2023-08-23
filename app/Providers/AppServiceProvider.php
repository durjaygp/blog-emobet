<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

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
        Paginator::useBootstrap();

        $categories = Category::latest()->take(7)->get();
        View::share('categories', $categories);

        $allcategory = Category::all();
        View::share('allcategory', $allcategory);

        $website = Setting::find(1);
        View::share('website', $website);

    }
}
