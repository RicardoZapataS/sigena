<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', 'MainController@index')->name('index');

    Route::prefix('/admintrador')->group(function (){
        Route::name('area.')->group(function () {
            Route::get('/area', 'Admin\AreasController@index')->name('index');
            Route::get('/area/crear', 'Admin\AreasController@create')->name('create');
            Route::post('/area/store', 'Admin\AreasController@store')->name('store');
            Route::get('/area/{area}/editar', 'Admin\AreasController@edit')->name('edit');
            Route::put('/area/{area}/update', 'Admin\AreasController@update')->name('update');
            Route::get('/area/{area}', 'Admin\AreasController@show')->name('show');
            Route::delete('/area/{area}', 'Admin\AreasController@destroy')->name('delete');
        });

        Route::name('route_module.')->group(function () {
            Route::get('/ruta', 'Admin\RouteModuleController@index')->name('index');
            Route::get('/ruta/crear', 'Admin\RouteModuleController@create')->name('create');
            Route::post('/ruta/store', 'Admin\RouteModuleController@store')->name('store');
            Route::get('/ruta/{area}/editar', 'Admin\RouteModuleController@edit')->name('edit');
            Route::put('/ruta/{area}/update', 'Admin\RouteModuleController@update')->name('update');
            Route::get('/ruta/{area}', 'Admin\RouteModuleController@show')->name('show');
            Route::delete('/ruta/{area}', 'Admin\RouteModuleController@destroy')->name('delete');
        });

        Route::name('user.')->group(function () {
            Route::get('/usuario', 'Admin\UserController@index')->name('index');
            Route::get('/usuario/crear', 'Admin\UserController@create')->name('create');
            Route::post('/usuario/store', 'Admin\UserController@store')->name('store');
            Route::get('/usuario/{user}/editar', 'Admin\UserController@edit')->name('edit');
            Route::put('/usuario/{user}/update', 'Admin\UserController@update')->name('update');
            Route::get('/usuario/{user}', 'Admin\UserController@show')->name('show');
            Route::delete('/usuario/{user}', 'Admin\UserController@destroy')->name('delete');
        });
        Route::name('has_route.')->group(function () {
            Route::get('/permisos', 'Admin\HasRouteController@index')->name('index');
            Route::get('/permisos/crear', 'Admin\HasRouteController@create')->name('create');
            Route::post('/permisos/store', 'Admin\HasRouteController@store')->name('store');
            Route::get('/permisos/{has_route}/editar', 'Admin\HasRouteController@edit')->name('edit');
            Route::put('/permisos/{has_route}/update', 'Admin\HasRouteController@update')->name('update');
            Route::get('/permisos/{has_route}', 'Admin\HasRouteController@show')->name('show');
            Route::delete('/permisos/{has_route}', 'Admin\HasRouteController@destroy')->name('delete');
        });
    });
});

Route::get('/home', 'HomeController@index')->name('home');
