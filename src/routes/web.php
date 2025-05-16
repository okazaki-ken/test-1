<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/',[IndexController::class,'index']);
Route::post('/confirm',[IndexController::class,'confirm']);
Route::post('/thans',[IndexController::class,'sotre']);

Route::middleware('auth')->group(function(){
    Route::get('/admin',[AuthController::class,'index']);
});

//ログイン画面からregisterに飛ぶ場合
Route::get('/register', [RegisterController::class,'register']);
//register画面からlogin画面に飛ぶ場合
Route::get('/login',[LoginController::class,'login']);