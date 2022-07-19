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
   Route::get('AddUser',[\App\Http\Controllers\AdminDashboardController::class,'displayAddUser'])->name('AddUser');
   Route::post('addUser',[\App\Http\Controllers\AdminDashboardController::class,'addUser'])->name('addUser');
   Route::get('getUsers',[\App\Http\Controllers\AdminDashboardController::class,'getUsers'])->name('getUsers');
    Route::get('getUser/{id}',[\App\Http\Controllers\AdminDashboardController::class,'getUser'])->name('getUser');
    Route::get('editUser/{id}',[\App\Http\Controllers\AdminDashboardController::class,'editUser'])->name('editUser');
    Route::post('updateUser/{id}',[\App\Http\Controllers\AdminDashboardController::class,'updateUser'])->name('updateUser');
    Route::get('deleteUser/{id}',[\App\Http\Controllers\AdminDashboardController::class,'deleteUser'])->name('deleteUser');
    Route::get('addJob',[\App\Http\Controllers\AdminDashboardController::class,'addJobForm'])->name('addJob');
    Route::post('addJobs',[\App\Http\Controllers\AdminDashboardController::class,'addJobs'])->name('addJobs');
    Route::get('addRole',[\App\Http\Controllers\AdminDashboardController::class,'addRoleForm'])->name('addRole');
    Route::post('addRoles',[\App\Http\Controllers\AdminDashboardController::class,'addRoles'])->name('addRoles');
    Route::get('getRoles',[\App\Http\Controllers\AdminDashboardController::class,'displayRoles'])->name('getRoles');
    Route::get('editRole/{id}',[\App\Http\Controllers\AdminDashboardController::class,'editRole'])->name('editRole');
    Route::get('deleteRole/{id}',[\App\Http\Controllers\AdminDashboardController::class,'deleteRole'])->name('deleteRole');
    Route::get('getJobs',[\App\Http\Controllers\AdminDashboardController::class,'getJobs'])->name('getJobs');
    Route::get('getJob/{id}',[\App\Http\Controllers\AdminDashboardController::class,'getJob'])->name('getJob');
    Route::get('editJob/{id}',[\App\Http\Controllers\AdminDashboardController::class,'editJob'])->name('editJob');

    Route::post('updateJob/{id}',[\App\Http\Controllers\AdminDashboardController::class,'updateJob'])->name('updateJob');
    Route::get('deleteJob/{id}',[\App\Http\Controllers\AdminDashboardController::class,'deleteJob'])->name('deleteJob');
    Route::get('getServices',[\App\Http\Controllers\AdminDashboardController::class,'getServices'])->name('getServices');
    Route::get('getService/{id}',[\App\Http\Controllers\AdminDashboardController::class,'getService'])->name('getService');
    Route::get('deleteService/{id}',[\App\Http\Controllers\AdminDashboardController::class,'deleteService'])->name('deleteService');
    Route::get('getApplications',[\App\Http\Controllers\AdminDashboardController::class,'applications'])->name('getApplications');



    Route::get('getBookings',[\App\Http\Controllers\AdminDashboardController::class,'getBookings'])->name('getBookings');

    Route::get('getReviews',[\App\Http\Controllers\AdminDashboardController::class,'getReviews'])->name('getReviews');

    Route::get('getPayments',[\App\Http\Controllers\AdminDashboardController::class,'getPayments'])->name('getPayments');
});
Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('admin.logout');

Route::name('client.')->group(function (){
    Route::get('cdashboard',[\App\Http\Controllers\ClientDashController::class,'index'])->name('clientDash');
    Route::get('post_a_job',[\App\Http\Controllers\ClientDashController::class,'postJob'])->name('postJob');
// });

Route::post('jobpost',[\App\Http\Controllers\ClientDashController::class,'jobpostfunc'])->name('jobpost');

Route::get('book', [\App\Http\Controllers\EmployerCRUDController::class, 'index'])->name('book');
Route::get('wprofile',[\App\Http\Controllers\WorkerDashboardController::class, 'profile'])->name('wprofile');
Route::get('additional',[\App\Http\Controllers\WorkerDashboardController::class, 'profileADD'])->name('additional');

Route::get('wdashboard',[\App\Http\Controllers\WorkerDashboardController::class, 'index'])->name('wdashboard');

Route::post('addInfo',[\App\Http\Controllers\WorkerDashboardController::class, 'storeProfile'])->name('addInfo');

Route::get('editProfile',[\App\Http\Controllers\WorkerDashboardController::class,'profileEdit'])->name('editProfile');
Route::put('profileEdit',[\App\Http\Controllers\WorkerDashboardController::class,'editProfile'])->name('profileEdit');

Route::get('changePassword',[\App\Http\Controllers\WorkerDashboardController::class,'changePass'])->name('changePassword');
Route::post('updatePass',[\App\Http\Controllers\WorkerDashboardController::class, 'updatePass'])->name('updatePass');


//client routes
Route::get('cprofile',[\App\Http\Controllers\ClientDashController::class, 'viewProfile'])->name('cprofile');
Route::get('clientAddInfo',[\App\Http\Controllers\ClientDashController::class, 'addInfo'])->name('clientAddInfo');
Route::post('storeInfo',[\App\Http\Controllers\ClientDashController::class,'storeAddInfo'])->name('storeInfo');
Route::get('editCP',[\App\Http\Controllers\ClientDashController::class,'editP'])->name('editCP');
Route::put('CprofileEdit',[\App\Http\Controllers\ClientDashController::class,'editProfile'])->name('CprofileEdit');
Route::get('changePass',[\App\Http\Controllers\WorkerDashboardController::class,'changePass'])->name('changePass');
Route::post('updatePassword',[\App\Http\Controllers\WorkerDashboardController::class, 'updatePass'])->name('updatePassword');
Route::get('postedJobs',[\App\Http\Controllers\ClientDashController::class, 'postedJobs'])->name('postedJobs');
Route::get('editJob/{id}',[\App\Http\Controllers\ClientDashController::class, 'editJob'])->name('editJob');
Route::post('updatejob{id}',[\App\Http\Controllers\ClientDashController::class, 'updateJob'])->name('updatejob');

//Services CRUD
Route::get('viewServices', [\App\Http\Controllers\WorkerDashboardController::class, 'viewService'])->name('viewServices');
Route::get('addServiceForm', [\App\Http\Controllers\WorkerDashboardController::class, 'viewAddForm'])->name('addServiceForm');
Route::post('addService', [\App\Http\Controllers\WorkerDashboardController::class, 'addService'])->name('addService');
Route::get('editService/{id}', [\App\Http\Controllers\WorkerDashboardController::class, 'editService'])->name('editService');
Route::post('updateService', [\App\Http\Controllers\WorkerDashboardController::class, 'updateService'])->name('updateService');
Route::get('deleteService/{id}', [\App\Http\Controllers\WorkerDashboardController::class, 'destroyService'])->name('deleteService');
