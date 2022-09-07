<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/navegacion-y-vigilancia')->group(function (){
    Route::name('knowledge_base.')->group(function () {
        Route::get('/base-de-conocimineto',  'KnowledgeBaseDataController@index')->name('index');
        Route::get('/base-de-conocimineto/crear', 'KnowledgeBaseDataController@create')->name('create');
        Route::post('/base-de-conocimineto/store', 'KnowledgeBaseDataController@store')->name('store');
        Route::get('/base-de-conocimineto/reporte', 'KnowledgeBaseDataController@make')->name('make_pdf');
        Route::post('/base-de-conocimineto/reporte', 'KnowledgeBaseDataController@print')->name('print_pdf');
        Route::get('/base-de-conocimineto/{knowledgeBaseData}/editar', 'KnowledgeBaseDataController@edit')->name('edit');
        Route::put('/base-de-conocimineto/{knowledgeBaseData}/update', 'KnowledgeBaseDataController@update')->name('update');
        Route::get('/base-de-conocimineto/{knowledgeBaseData}', 'KnowledgeBaseDataController@show')->name('show');
        Route::delete('/base-de-conocimineto/{knowledgeBaseData}', 'KnowledgeBaseDataController@destroy')->name('delete');
    });
});
