<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

// Auth routes
Route::get('/register',  [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login',     [AuthController::class, 'login']);
Route::post('/login',    [AuthController::class, 'authenticate']);
Route::get('/logout',    [AuthController::class, 'logout']);

// Protected routes
Route::middleware('customauth')->group(function () {
    Route::get('/posts',           [PostController::class, 'index']);
    Route::post('/posts',          [PostController::class, 'store']);
    Route::put('/posts/{id}',      [PostController::class, 'update']);
    Route::delete('/posts/{id}',   [PostController::class, 'destroy']);
    Route::post('/posts/{id}/like',   [LikeController::class, 'store']);
    Route::delete('/posts/{id}/like', [LikeController::class, 'destroy']);
});