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

Auth::routes();


Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::get('/blogs/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [\App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{id}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/edit/{id}', [\App\Http\Controllers\BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [\App\Http\Controllers\BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');
