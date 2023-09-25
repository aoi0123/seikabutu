<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\WantController;
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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::get('/posts/{post}', [PostController::class ,'show']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class,'delete']);
    
    Route::get('/posts/like/{post}',[LikeController::class,'like'])->name('post.like');
    Route::get('/posts/unlike/{post}',[LikeController::class,'unlike'])->name('post.unlike');
    Route::post('/likes',[LikeController::class,'store']);
    
    Route::get('/comments',[CommentController::class, 'c_index']);
    Route::post('/comment/{post}',[CommentController::class,'store']);
    Route::get('/comments/{comment}',[CommentController::class,'c_show']);
    
    Route::get('/wants', [WantController::class,'index']);
    Route::get('/wants/create',[WantController::class,'create']);
    Route::get('/wants/{want}',[WantController::class,'show']);
    Route::post('/wants', [WantController::class, 'store']);
});

require __DIR__.'/auth.php';
