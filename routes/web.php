<?php

use App\Http\Controllers\BallancesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColocataireController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\DetaileController;
use App\Http\Controllers\InvitationController;
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

Route::delete('destroy')->name('colocataire.destroy');

Route::get('depenses/create',[DepenseController::class,'create'])->name('depenses.create');
Route::get('depenses/{colocation}',[DepenseController::class,'show'])->name('depenses.show');
Route::post('depenses/store',[DepenseController::class,'store'])->name('depenses.store');
Route::get('depenses/update',[DepenseController::class,'update'])->name('depenses.update');
Route::delete('depenses/{depense}',[DepenseController::class,'destroy'])->name('depenses.destroy');

Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');
Route::delete('categories/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::patch('categories/{category}',[CategoryController::class,'update'])->name('categories.update');

Route::post('invitations/{colocation}',[InvitationController::class,'store'])->name('invitation.store');
Route::get('invitations/{token}',[InvitationController::class,'index'])->name('invitation.index');

Route::post('acceptation',[ColocataireController::class,'store'])->name('coloctaire.store');

Route::get('solde/{colocation}',[BallancesController::class,'index'])->name('ballances.index');
Route::patch('/paiement/{paiement_id}/pay', [BallancesController::class, 'pay'])->name('paiement.pay');
require __DIR__ . '/auth.php';
