<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\CidadeController;



Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'circuito', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('',                  [CircuitoController::class, 'index'])->name('circuito');     
        Route::get('create',            [CircuitoController::class, 'create'])->name('circuito.create');
        Route::post('store',             [CircuitoController::class, 'store'])->name('circuito.store');
        Route::get('{id}/destroy',      [CircuitoController::class, 'destroy'])->name('circuito.destroy');
        Route::get('{id}/edit',         [CircuitoController::class, 'edit'])->name('circuito.edit');
        Route::put('{id}/update',       [CircuitoController::class, 'update'])->name('circuito.update');
    });
    
    Route::group(['prefix' => 'piloto', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('/',                 [PilotoController::class, 'index'])->name('piloto');
        Route::get('create',            [PilotoController::class, 'create'])->name('piloto.create');
        Route::post('store',             [PilotoController::class, 'store'])->name('piloto.store');
        Route::get('{id}/destroy',      [PilotoController::class, 'destroy'])->name('piloto.destroy');
        Route::get('{id}/edit',         [PilotoController::class, 'edit'])->name('piloto.edit');
        Route::put('{id}/update',       [PilotoController::class, 'update'])->name('piloto.update');
    });
    
    Route::group(['prefix' => 'equipe', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('',                  [EquipeController::class, 'index'])->name('equipe');
        Route::get('create',            [EquipeController::class, 'create'])->name('equipe.create');
        Route::post('store',             [EquipeController::class, 'store'])->name('equipe.store');
        Route::get('{id}/destroy',      [EquipeController::class, 'destroy'])->name('equipe.destroy');
        Route::get('{id}/edit',         [EquipeController::class, 'edit'])->name('equipe.edit');
        Route::put('{id}/update',       [EquipeController::class, 'update'])->name('equipe.update');
    });

    Route::group(['prefix' => 'pais', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('',                  [PaisController::class, 'index'])->name('pais');
        Route::get('create',            [PaisController::class, 'create'])->name('pais.create');
        Route::post('store',             [PaisController::class, 'store'])->name('pais.store');
        Route::get('{id}/destroy',      [PaisController::class, 'destroy'])->name('pais.destroy');
        Route::get('{id}/edit',         [PaisController::class, 'edit'])->name('pais.edit');
        Route::put('{id}/update',       [PaisController::class, 'update'])->name('pais.update');
    });

    Route::group(['prefix' => 'cidade', 'where' => ['id'=>'[0-9]+']], function () {
        Route::any('',                  [CidadeController::class, 'index'])->name('cidade');
        Route::get('create',            [CidadeController::class, 'create'])->name('cidade.create');
        Route::post('store',             [CidadeController::class, 'store'])->name('cidade.store');
        Route::get('{id}/destroy',      [CidadeController::class, 'destroy'])->name('cidade.destroy');
        Route::get('{id}/edit',         [CidadeController::class, 'edit'])->name('cidade.edit');
        Route::put('{id}/update',       [CidadeController::class, 'update'])->name('cidade.update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


