<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RombelsController;
use App\Http\Controllers\RayonsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::prefix('/rombels')->name('rombels.')->group(function () {
    Route::get('/', [RombelsController::class, 'index'])->name('index');
    Route::get('/create', [RombelsController::class, 'create'])->name('create');
    Route::post('/store', [RombelsController::class, 'store'])->name('store');
    Route::get('/edit/{rombel}', [RombelsController::class, 'edit'])->name('edit');
    Route::patch('/update/{rombel}', [RombelsController::class, 'update'])->name('update');
    Route::delete('/delete/{rombel}', [RombelsController::class, 'delete'])->name('delete');
});

Route::prefix('/rayons')->name('rayons.')->group(function () {
    Route::get('/', [RayonsController::class, 'index'])->name('index');
    Route::get('/create', [RayonsController::class, 'create'])->name('create');
    Route::post('/store', [RayonsController::class, 'store'])->name('store');
    Route::get('/edit/{rombel}', [RayonsController::class, 'edit'])->name('edit');
    Route::patch('/update/{rombel}', [RayonsController::class, 'update'])->name('update');
    Route::delete('/delete/{rombel}', [RayonsController::class, 'delete'])->name('delete');
});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/daftar', [UserController::class, 'store'])->name('daftar');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
});