<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', 'MainController@index')->name('index');
    Route::name('knowledge_base.')->group(function () {
        Route::get('/base-de-conocimineto',  'NavigationSurveillance\KnowledgeBaseDataController@index')->name('index');
        Route::get('/base-de-conocimineto/crear', 'NavigationSurveillance\KnowledgeBaseDataController@create')->name('create');
        Route::post('/base-de-conocimineto/store', 'NavigationSurveillance\KnowledgeBaseDataController@store')->name('store');
        Route::get('/base-de-conocimineto/{knowledgeBaseData}/editar', 'NavigationSurveillance\KnowledgeBaseDataController@edit')->name('edit');
        Route::put('/base-de-conocimineto/{knowledgeBaseData}/update', 'NavigationSurveillance\KnowledgeBaseDataController@update')->name('update');
        Route::get('/base-de-conocimineto/{knowledgeBaseData}', 'NavigationSurveillance\KnowledgeBaseDataController@show')->name('show');
        Route::delete('/base-de-conocimineto/{knowledgeBaseData}', 'NavigationSurveillance\KnowledgeBaseDataController@destroy')->name('delete');
    });
    Route::name('work_order.')->group(function () {
        Route::get('/orden-de-trabajo', 'VisualAids\WorkOrderController@index')->name('index');
        Route::get('/orden-de-trabajo/crear', 'VisualAids\WorkOrderController@create')->name('create');
        Route::post('/orden-de-trabajo/store', 'VisualAids\WorkOrderController@store')->name('store');
        Route::get('/orden-de-trabajo/{workOrder}/editar', 'VisualAids\WorkOrderController@edit')->name('edit');
        Route::put('/orden-de-trabajo/{workOrder}/update', 'VisualAids\WorkOrderController@update')->name('update');
        Route::get('/orden-de-trabajo/{workOrder}', 'VisualAids\WorkOrderController@show')->name('show');
        Route::delete('/orden-de-trabajo/{workOrder}', 'VisualAids\WorkOrderController@destroy')->name('delete');
    });
    Route::name('maintenance_record.')->group(function () {
        Route::get('/registro-de-mantenimiento', 'VisualAids\MaintenanceRecordController@index')->name('index');
        Route::get('/registro-de-mantenimiento/crear', 'VisualAids\MaintenanceRecordController@create')->name('create');
        Route::post('/registro-de-mantenimiento/store', 'VisualAids\MaintenanceRecordController@store')->name('store');
        Route::get('/registro-de-mantenimiento/{maintenanceRecord}/editar', 'VisualAids\MaintenanceRecordController@edit')->name('edit');
        Route::put('/registro-de-mantenimiento/{maintenanceRecord}/update', 'VisualAids\MaintenanceRecordController@update')->name('update');
        Route::get('/registro-de-mantenimiento/{maintenanceRecord}', 'VisualAids\MaintenanceRecordController@show')->name('show');
        Route::delete('/registro-de-mantenimiento/{maintenanceRecord}', 'VisualAids\MaintenanceRecordController@destroy')->name('delete');
    });
});
Route::get('/home', 'HomeController@index')->name('home');
