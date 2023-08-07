<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\MainCategory;
use App\Models\Review;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $facebook = Footer::find(1);
        $twitter = Footer::find(2);
        $instagram = Footer::find(3);
        $google = Footer::find(4);
        $linkedin = Footer::find(5);
        $youtube = Footer::find(6);
        $soundcloud = Footer::find(7);
        $pinterest = Footer::find(8);
        $phone = Footer::find(9);
        $email = Footer::find(10);
        // $phone = Footer::find(11);
        // $mail = Footer::find(9);
        $reviews = Review::all();
        $maincategories = MainCategory::all();

        View::share('facebook', $facebook);
        View::share('twitter', $twitter);
        View::share('instagram', $instagram);
        View::share('youtube', $youtube);
        View::share('pinterest', $pinterest);
        View::share('phone', $phone);
        View::share('email', $email);
        View::share('google', $google);
        View::share('linkedin', $linkedin);
        View::share('soundcloud', $soundcloud);
        View::share('brands', $reviews);
        View::share('maincategories', $maincategories);
        // View::share('phone', $phone);
    }
}
