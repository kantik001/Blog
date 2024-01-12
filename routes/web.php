<?php

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


Route::get('/', \App\Http\Controllers\Main\IndexController::class);


Route::prefix('admin')->group(function () {
        Route::get('/', \App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.main.index');
        Route::resource('categories', \App\Http\Controllers\Admin\Category\CategoryController::class);
        Route::resource('tags', \App\Http\Controllers\Admin\Tag\TagController::class);
        Route::resource('posts', \App\Http\Controllers\Admin\Post\PostController::class);
        Route::resource('users', \App\Http\Controllers\Admin\User\UserController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
