<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/check-login',[AuthController::class,'checkLogin'])->name('checkLogin');
Route::get('/actived/{user}/{token}',[AuthController::class,'actived'])->name('user.actived');
Route::post('/register-article-email',[AuthController::class,'subscribers'])->name('register-article-email');

// Article
Route::get('/create-article',[ArticleController::class,'createArticle'])->name('create-article');
Route::post('/save-article',[ArticleController::class,'saveArticle'])->name('save-article');



