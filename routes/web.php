<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('users')->group(function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/add', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/add', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::post('/{id}/edit', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/{id}/destroy', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});
