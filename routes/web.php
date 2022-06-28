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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('Login');
Route::get('/register',[\App\Http\Controllers\AuthController::class, 'viewRegister'])->name('registration');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/registerUser', [\App\Http\Controllers\AuthController::class, 'registerUser'])->name('registerUser');


Route::post('/loginUser',[\App\Http\Controllers\AuthController::class, 'loginUser'])->name('loginUser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index',[App\Http\Controllers\IndexController::class,'index'])->name('index');
