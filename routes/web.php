<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});
Route::middleware('customauth')->group(function () {

    Route::get('/posts', [PostController::class,'index']);
    Route::post('/posts', [PostController::class,'store']);

});
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'authenticate']);

Route::get('/logout',[AuthController::class,'logout']);

Route::middleware('customauth')->group(function(){

Route::get('/posts',[PostController::class,'index']);
Route::post('/posts',[PostController::class,'store']);
Route::put('/posts/{id}',[PostController::class,'update']);
Route::delete('/posts/{id}',[PostController::class,'destroy']);

});