<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientDashController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/login',[App\Http\Controllers\AuthController::class,'viewLogin'])->name('login');
Route::get('/register',[\App\Http\Controllers\AuthController::class, 'viewRegister'])->name('registration');
Auth::routes();
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::post('/registerUser', [\App\Http\Controllers\AuthController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser',[\App\Http\Controllers\AuthController::class, 'loginUser'])->name('loginUser');

Route::name('admin.')->group(function (){
   Route::get('dashboard',[\App\Http\Controllers\AdminDashboardController::class,'index'])->name('dashboard');
   Route::get('profile',[\App\Http\Controllers\AdminDashboardController::class,'displayProfile'])->name('profile');
});
Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('admin.logout');

Route::name('client.')->group(function (){
    Route::get('cdashboard',[\App\Http\Controllers\ClientDashController::class,'index'])->name('clientDash');
    Route::get('post_a_job',[\App\Http\Controllers\ClientDashController::class,'postJob'])->name('postJob');
});

Route::post('jobpost',[\App\Http\Controllers\ClientDashController::class,'jobpostfunc'])->name('jobpost');

Route::get('book', [\App\Http\Controllers\EmployerCRUDController::class, 'index'])->name('book');
Route::get('wprofile',[\App\Http\Controllers\WorkerDashboardController::class, 'profile'])->name('wprofile');
Route::get('additional',[\App\Http\Controllers\WorkerDashboardController::class, 'profileADD'])->name('additional');

Route::get('book2',[\App\Http\Controllers\EmployerCRUDController::class,'book2'])->name('book2');
Route::get('book3',[\App\Http\Controllers\EmployerCRUDController::class,'book3'])->name('book3');

Route::post('addInfo',[\App\Http\Controllers\WorkerDashboardController::class, 'storeProfile'])->name('addInfo');
