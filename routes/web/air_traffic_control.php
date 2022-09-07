<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/atc05')->name('aro.')->group(function () {
    Route::get('/', 'Atc05Controller@index')->name('index');
    Route::get('/nuevo', 'Atc05Controller@create')->name('create');
    Route::post('/guardar', 'Atc05Controller@store')->name('store');
    Route::get('/editar/{atc04}', 'Atc05Controller@edit')->name('edit');
    Route::put('/actualizar/{atc04}', 'Atc05Controller@update')->name('update');
    Route::put('/eliminar/{atc04}', 'Atc05Controller@delte')->name('delete');
    Route::put('/ver/{atc04}', 'Atc05Controller@show')->name('show');
});
Route::prefix('/atc04')->name('tower.')->group(function () {
    Route::get('/', 'Atc04Controller@index')->name('index');
    Route::get('/nuevo', 'Atc04Controller@create')->name('create');
    Route::post('/guardar', 'Atc04Controller@store')->name('store');
    Route::get('/editar/{atc04}', 'Atc04Controller@edit')->name('edit');
    Route::put('/actualizar/{atc04}', 'Atc04Controller@update')->name('update');
    Route::put('/eliminar/{atc04}', 'Atc04Controller@delte')->name('delete');
    Route::put('/ver/{atc04}', 'Atc04Controller@show')->name('show');
});
