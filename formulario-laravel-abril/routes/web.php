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


Route::get('/', PostController::class)->name('inicio');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::edit('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');