<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\SaidasController;
use App\Http\Controllers\PessoasController;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'pessoas', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [PessoasController::class, 'index']);     
        Route::get('create',            [PessoasController::class, 'create']);
        Route::get('store',             [PessoasController::class, 'store']);
        Route::get('{id}/destroy',      [PessoasController::class, 'destroy']);
        Route::get('{id}/edit',         [PessoasController::class, 'edit']);
        Route::get('{id}/update',       [PessoasController::class, 'update']);
    });
    
    Route::group(['prefix' => 'entradas', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('/',                  [EntradasController::class, 'index']);
        Route::get('create',            [EntradasController::class, 'create']);
        Route::get('store',             [EntradasController::class, 'store']);
        Route::get('{id}/destroy',      [EntradasController::class, 'destroy']);
        Route::get('{id}/edit',         [EntradasController::class, 'edit']);
        Route::get('{id}/update',       [EntradasController::class, 'update']);
    });
    
    Route::group(['prefix' => 'saidas', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [SaidasController::class, 'index']);
        Route::get('create',            [SaidasController::class, 'create']);
        Route::get('store',             [SaidasController::class, 'store']);
        Route::get('{id}/destroy',      [SaidasController::class, 'destroy']);
        Route::get('{id}/edit',         [SaidasController::class, 'edit']);
        Route::get('{id}/update',       [SaidasController::class, 'update']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


