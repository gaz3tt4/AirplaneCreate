<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AirplaneController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('airplane')->group(function(){
    Route::get('/', [AirplaneController::class, 'index'])->name('airplane.index');
    Route::get('/create', [AirplaneController::class, 'create'])->name('airplane.create');
    Route::post('/store', [AirplaneController::class, 'store'])->name('airplane.store');
    Route::get('/edit/{id}', [AirplaneController::class, 'edit'])->name('airplane.edit');
    Route::get('/update/{id}', [AirplaneController::class, 'update'])->name('airplane.update');
    Route::get('/destroy/{id}', [AirplaneController::class, 'destroy'])->name('airplane.destroy');

})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
