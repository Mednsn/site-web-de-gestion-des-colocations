<?php

use App\Http\Controllers\ColocataireController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\DetaileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('colocation', [ColocationController::class, 'index'])->name('colocation.index');
Route::get('colocation/create', [ColocationController::class, 'create'])->name('colocation.create');
Route::post('colocation/store', [ColocationController::class, 'store'])->name('colocation.store');

Route::get('colocation/detaile', [DetaileController::class, 'index'])->name('detaille.index');
require __DIR__ . '/auth.php';
