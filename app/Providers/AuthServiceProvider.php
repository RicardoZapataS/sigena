<?php

namespace App\Providers;

use App\Models\RouteModule;
use Carbon\CarbonInterval;
use Illuminate\Auth\SessionGuard;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        SessionGuard::macro('sub_routes', function () {

            if(empty(RouteModule::where('route_name',  Route::currentRouteName())->whereNull('route_module_id')->get()->first()))
                if (empty(RouteModule::where('route_name',  Route::currentRouteName())->get()->first()))
                    return array();
                else
                    return RouteModule::where('route_name', Route::currentRouteName())->get()->first()->routeModule->routes;
            else {
                return RouteModule::where('route_name', Route::currentRouteName())->whereNull('route_module_id')->get()->first()->routes;
            }
        });
        SessionGuard::macro('current_area', function () {
            return RouteModule::where('route_name',  Route::currentRouteName())->get()->first();
        });
        SessionGuard::macro('read_minutes', function ($minutes) {
            return $interval = CarbonInterval::seconds($minutes * 60)->cascade();
        });
        SessionGuard::macro('can_modify', function () {
            return (Auth::user()->super_user) || (Auth::user()->id && Auth::user()->area->user_id);
        });

    }

}
