<?php

use App\Http\Controllers\{AuthController, RuanganController, DashboardController};
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('landing');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('ruangan')->name('ruangan.')->group(function(){
        Route::get('/', [RuanganController::class, 'index'])->name('index');
        Route::get('create', [RuanganController::class, 'create'])->name('create');
        Route::get('edit/{id}', [RuanganController::class, 'edit'])->name('edit');
        Route::post('store', [RuanganController::class, 'store'])->name('store');
        Route::put('update/{id}', [RuanganController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [RuanganController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('peminjaman')->name('peminjaman.')->group(function(){
        Route::get('/', [RuanganController::class, 'index'])->name('index');
        Route::get('create', [RuanganController::class, 'create'])->name('create');
        Route::get('edit/{id}', [RuanganController::class, 'edit'])->name('edit');
        Route::post('store', [RuanganController::class, 'store'])->name('store');
        Route::put('update/{id}', [RuanganController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [RuanganController::class, 'destroy'])->name('destroy');
    });
});

