<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\postController::class, 'vu'])->name('welcome');




Auth::routes();


Route::get('/home', function () {
    return view('dashboard.index');
});





Route::get('/post', [App\Http\Controllers\postController::class, 'index'])->name('post.index');

Route::get('/post/create', [App\Http\Controllers\postController::class, 'create'])->name('post.create');

Route::post('/post', [App\Http\Controllers\postController::class, 'store'])->name('post.store');

Route::get('/post/{id}', [App\Http\Controllers\postController::class, 'show'])->name('post.show');

Route::get('/post/{id}/edit', [App\Http\Controllers\postController::class, 'edit'])->name('post.edit');

Route::put('/post/{id}', [App\Http\Controllers\postController::class, 'update'])->name('post.update');

Route::delete('/post/{id}', [App\Http\Controllers\postController::class, 'destroy'])->name('post.destroy');
