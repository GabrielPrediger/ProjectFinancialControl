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
        Route::get('',                  [PessoasController::class, 'index'])->name('pessoas');     
        Route::get('create',            [PessoasController::class, 'create'])->name('pessoas.create');
        Route::get('store',             [PessoasController::class, 'store'])->name('pessoas.store');
        Route::get('{id}/destroy',      [PessoasController::class, 'destroy'])->name('pessoas.destroy');
        Route::get('{id}/edit',         [PessoasController::class, 'edit'])->name('pessoas.edit');
        Route::get('{id}/update',       [PessoasController::class, 'update'])->name('pessoas.update');
    });
    
    Route::group(['prefix' => 'entradas', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('/',                 [EntradasController::class, 'index'])->name('entradas');
        Route::get('create',            [EntradasController::class, 'create'])->name('entradas.create');
        Route::get('store',             [EntradasController::class, 'store'])->name('entradas.store');
        Route::get('{id}/destroy',      [EntradasController::class, 'destroy'])->name('entradas.destroy');
        Route::get('{id}/edit',         [EntradasController::class, 'edit'])->name('entradas.edit');
        Route::get('{id}/update',       [EntradasController::class, 'update'])->name('entradas.update');
    });
    
    Route::group(['prefix' => 'saidas', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [SaidasController::class, 'index'])->name('saidas');
        Route::get('create',            [SaidasController::class, 'create'])->name('saidas.create');
        Route::get('store',             [SaidasController::class, 'store'])->name('saidas.store');
        Route::get('{id}/destroy',      [SaidasController::class, 'destroy'])->name('saidas.destroy');
        Route::get('{id}/edit',         [SaidasController::class, 'edit'])->name('saidas.edit');
        Route::get('{id}/update',       [SaidasController::class, 'update'])->name('saidas.update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


