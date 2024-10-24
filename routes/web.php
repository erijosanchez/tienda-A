<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\InicioController;
use Illuminate\Support\Facades\Route;

Route::controller(InicioController::class)->group(function(){
    Route::get('/', 'inicio')->name('web.inicio');
    Route::get('/Shop', 'shop')->name('web.shop');
    Route::get('/Categorias', 'categorias')->name('web.categorias');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require_once 'admin.php';
