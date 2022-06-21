<?php

namespace App\Providers;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Schema;
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
        CarbonInterval::setLocale('es');
        Carbon::setLocale('es');

    }
}
