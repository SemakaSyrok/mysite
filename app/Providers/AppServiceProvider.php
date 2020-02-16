<?php

namespace App\Providers;

use App\Message;
use App\Observers\MessageObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        Message::observe(MessageObserver::class);

        Blade::if('route', function ($expression) {
           return url()->current() == route($expression);
        });
    }

}
