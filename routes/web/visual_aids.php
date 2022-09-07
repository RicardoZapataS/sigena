<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/ayudas-luminosas')->group(function (){
    Route::name('work_order.')->group(function () {
        Route::get('/orden-de-trabajo', 'WorkOrderController@index')->name('index');
        Route::get('/orden-de-trabajo/crear', 'WorkOrderController@create')->name('create');
        Route::post('/orden-de-trabajo/store', 'WorkOrderController@store')->name('store');
        Route::get('/orden-de-trabajo/reporte', 'WorkOrderController@make')->name('make_pdf');
        Route::post('/orden-de-trabajo/reporte', 'WorkOrderController@print')->name('print_pdf');
        Route::get('/orden-de-trabajo/{workOrder}/editar', 'WorkOrderController@edit')->name('edit');
        Route::put('/orden-de-trabajo/{workOrder}/update', 'WorkOrderController@update')->name('update');
        Route::get('/orden-de-trabajo/{workOrder}', 'WorkOrderController@show')->name('show');
        Route::delete('/orden-de-trabajo/{workOrder}', 'WorkOrderController@destroy')->name('delete');
    });
    Route::name('maintenance_record.')->group(function () {
        Route::get('/registro-de-mantenimiento', 'MaintenanceRecordController@index')->name('index');
        Route::get('/registro-de-mantenimiento/crear', 'MaintenanceRecordController@create')->name('create');
        Route::post('/registro-de-mantenimiento/store', 'MaintenanceRecordController@store')->name('store');
        Route::get('/registro-de-mantenimiento/{maintenanceRecord}/editar', 'MaintenanceRecordController@edit')->name('edit');
        Route::put('/registro-de-mantenimiento/{maintenanceRecord}/update', 'MaintenanceRecordController@update')->name('update');
        Route::get('/registro-de-mantenimiento/{maintenanceRecord}', 'MaintenanceRecordController@show')->name('show');
        Route::delete('/registro-de-mantenimiento/{maintenanceRecord}', 'MaintenanceRecordController@destroy')->name('delete');
    });
});
