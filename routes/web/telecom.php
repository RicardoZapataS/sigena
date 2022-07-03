<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/telecomunicaciones')->group(function (){
    Route::name('inventory.')->group(function () {
        Route::get('/inventario', 'InventoryController@index')->name('index');
        Route::get('/inventario/crear', 'InventoryController@create')->name('create');
        Route::post('/inventario/store', 'InventoryController@store')->name('store');
        Route::get('/inventario/{inventory}/editar', 'InventoryController@edit')->name('edit');
        Route::put('/inventario/{inventory}/update', 'InventoryController@update')->name('update');
        Route::get('/inventario/{inventory}', 'InventoryController@show')->name('show');
        Route::delete('/inventario/{inventory}', 'InventoryController@destroy')->name('delete');
    });
    Route::name('work_order.')->group(function () {
        Route::get('/telecomunicaciones/orden-de-trabajo', 'WorkOrderTelecomController@index')->name('index');
        Route::get('/telecomunicaciones/orden-de-trabajo/crear', 'WorkOrderTelecomController@create')->name('create');
        Route::post('/telecomunicaciones/orden-de-trabajo/store', 'WorkOrderTelecomController@store')->name('store');
        Route::get('/telecomunicaciones/orden-de-trabajo/{work_order}/editar', 'WorkOrderTelecomController@edit')->name('edit');
        Route::put('/telecomunicaciones/orden-de-trabajo/{work_order}/update', 'WorkOrderTelecomController@update')->name('update');
        Route::get('/telecomunicaciones/orden-de-trabajo/{work_order}', 'WorkOrderTelecomController@show')->name('show');
        Route::delete('/telecomunicaciones/orden-de-trabajo/{work_order}', 'WorkOrderTelecomController@destroy')->name('delete');
    });

});
