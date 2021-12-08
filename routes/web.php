<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CircuitoController;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'circuito', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [CircuitoController::class, 'index'])->name('circuito');     
        Route::get('create',            [CircuitoController::class, 'create'])->name('circuito.create');
        Route::get('store',             [CircuitoController::class, 'store'])->name('circuito.store');
        Route::get('{id}/destroy',      [CircuitoController::class, 'destroy'])->name('circuito.destroy');
        Route::get('{id}/edit',         [CircuitoController::class, 'edit'])->name('circuito.edit');
        Route::get('{id}/update',       [CircuitoController::class, 'update'])->name('circuito.update');
    });
    
    Route::group(['prefix' => 'piloto', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('/',                 [PilotoController::class, 'index'])->name('piloto');
        Route::get('create',            [PilotoController::class, 'create'])->name('piloto.create');
        Route::get('store',             [PilotoController::class, 'store'])->name('piloto.store');
        Route::get('{id}/destroy',      [PilotoController::class, 'destroy'])->name('piloto.destroy');
        Route::get('{id}/edit',         [PilotoController::class, 'edit'])->name('piloto.edit');
        Route::get('{id}/update',       [PilotoController::class, 'update'])->name('piloto.update');
    });
    
    Route::group(['prefix' => 'equipe', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [EquipeController::class, 'index'])->name('equipe');
        Route::get('create',            [EquipeController::class, 'create'])->name('equipe.create');
        Route::get('store',             [EquipeController::class, 'store'])->name('equipe.store');
        Route::get('{id}/destroy',      [EquipeController::class, 'destroy'])->name('equipe.destroy');
        Route::get('{id}/edit',         [EquipeController::class, 'edit'])->name('equipe.edit');
        Route::get('{id}/update',       [EquipeController::class, 'update'])->name('equipe.update');
    });

    Route::group(['prefix' => 'pais', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [PaisController::class, 'index'])->name('pais');
        Route::get('create',            [PaisController::class, 'create'])->name('pais.create');
        Route::get('store',             [PaisController::class, 'store'])->name('pais.store');
        Route::get('{id}/destroy',      [PaisController::class, 'destroy'])->name('pais.destroy');
        Route::get('{id}/edit',         [PaisController::class, 'edit'])->name('pais.edit');
        Route::get('{id}/update',       [PaisController::class, 'update'])->name('pais.update');
    });

    Route::group(['prefix' => 'cidade', 'where' => ['id'=>'[0-9]+']], function () {
        Route::get('',                  [CidadeController::class, 'index'])->name('cidade');
        Route::get('create',            [CidadeController::class, 'create'])->name('cidade.create');
        Route::get('store',             [CidadeController::class, 'store'])->name('cidade.store');
        Route::get('{id}/destroy',      [CidadeController::class, 'destroy'])->name('cidade.destroy');
        Route::get('{id}/edit',         [CidadeController::class, 'edit'])->name('cidade.edit');
        Route::get('{id}/update',       [CidadeController::class, 'update'])->name('cidade.update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


