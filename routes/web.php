<?php

use App\Http\Controllers\ColocataireController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\DetaileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
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
Route::put('colocation/{colocation}/update', [ColocationController::class, 'update'])->name('colocation.update');
Route::get('colocation/{colocation}/edit', [ColocationController::class, 'edit'])->name('colocation.edit');
Route::get('colocation/{colocation_id}/detaile', [DetaileController::class, 'index'])->name('detaille.index');

// Route::delete('destroy')->name('colocataire.destroy');
Route::resource('colocataire',ColocataireController::class);

Route::get('depenses',[DepenseController::class,'index'])->name('depenses.index');
Route::get('depenses/create',[DepenseController::class,'create'])->name('depenses.create');
Route::get('depenses/store',[DepenseController::class,'store'])->name('depenses.store');
Route::get('depenses/update',[DepenseController::class,'update'])->name('depenses.update');
Route::get('depenses/edit',[DepenseController::class,'edit'])->name('depenses.edit');

// Route::get('balences',[]);
require __DIR__ . '/auth.php';
