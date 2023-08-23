<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Admin;

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

        $admin = Admin::find(1);
        View::share('admin', $admin);

        $pages = Page::all();
        View::share('pages',$pages);

        $socials = Social::all();
        View::share('socials',$socials);



    }
}
