<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostsController::class,'create'])->name('posts.create');
Route::post('/posts', [PostsController::class,'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [PostsController::class,'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostsController::class,'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostsController::class,'delete'])->name('posts.delete');
