<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\TrainerController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Ajax\LocationController;
use App\Models\Employee;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')
->middleware('admin');

                /** employee */
Route::group(['prefix => employee'],function(){
    Route::get('index', [EmployeeController::class, 'index'])->name('employee.index')
    ->middleware('admin');
    
    Route::get('create', [EmployeeController::class, 'create'])->name('employee.create')
    ->middleware('admin');
});
                /** trainer */
Route::get('trainer/index', [TrainerController::class, 'index'])->name('trainer.index')
->middleware('admin');    
                /**member  */
Route::get('member/index', [MemberController::class, 'index'])->name('member.index')
->middleware('admin');    

                /**Ajax  */
Route::get('ajax/location/getLocation', [LocationController::class, 'getLocation'])->name('ajax.index')
->middleware('admin');

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login')->middleware('login');;
