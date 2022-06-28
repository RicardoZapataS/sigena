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
    Route::name('inventory.')->group(function () {
        Route::get('/inventario', 'Telecom\InventoryController@index')->name('index');
        Route::get('/inventario/crear', 'Telecom\InventoryController@create')->name('create');
        Route::post('/inventario/store', 'Telecom\InventoryController@store')->name('store');
        Route::get('/inventario/{inventory}/editar', 'Telecom\InventoryController@edit')->name('edit');
        Route::put('/inventario/{inventory}/update', 'Telecom\InventoryController@update')->name('update');
        Route::get('/inventario/{inventory}', 'Telecom\InventoryController@show')->name('show');
        Route::delete('/inventario/{inventory}', 'Telecom\InventoryController@destroy')->name('delete');
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

Route::get('/home', 'HomeController@index')->name('home');
