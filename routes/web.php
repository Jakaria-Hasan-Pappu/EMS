<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeecreateController;
use App\Http\Controllers\ClientController;


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
Route::get('/',function(){
    return view('backend.welcome');
});




//backend



Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/registerstore',[UserController::class,'registerstore'])->name('registerstore');

 
 
 



Route::group(["middleware"=>"auth"],function(){

    Route::get('/dashboards',[DashboardController::class,'dashboards'])->name('dashboard');

    Route::get('/employee',[employeeController::class,'employee'])->name('employee');
    Route::get('/employeecreate',[employeeController::class,'employeecreate'])->name('employee.create');
    Route::post('/emc',[employeeController::class,'emc'])->name('emc.create');
   

    Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
    Route::get('/attendancecreate',[AttendanceController::class,'attendancecreate'])->name('attendancecreate');
    Route::post('/attendancestore',[AttendanceController::class,'attendancestore'])->name('attendancestore');

    Route::get('/leave',[leaveController::class,'leave'])->name('leave');
    Route::get('/leavecreate',[leaveController::class,'leavecreate'])->name('leave.create');
    Route::post('/leve',[leaveController::class,'leve'])->name('leve');

    Route::get('/projects',[ProjectsController::class,'projects'])->name('projects');
    Route::get('/projectscreate',[ProjectsController::class,'projectscreate'])->name('projectscreate');
    Route::post('/projectsstore',[ProjectsController::class,'projectsstore'])->name('projectsstore');

    Route::get('/salary',[SalaryController::class,'salary'])->name('salary');
    Route::get('/salarycreate',[SalaryController::class,'salarycreate'])->name('salarycreate');
    Route::post('/salaryform',[SalaryController::class,'salaryform'])->name('salaryform');

    Route::get('/department',[DepartmentController::class,'department'])->name('department');
    Route::get('/departmentcreate',[DepartmentController::class,'departmentcreate'])->name('department.create');
    Route::post('/department/form',[DepartmentController::class,'dpt'])->name('department.form');
   
    Route::get('/designation',[DesignationController::class,'designation'])->name('designation');
    Route::get('/designationcreate',[DesignationController::class,'designationcreate'])->name('designation.create');
    Route::post('/dsg/form',[DesignationController::class,'dsg'])->name('dsg.form');

    Route::get('/client',[ClientController::class,'client'])->name('client');
    Route::get('/clientcreate',[ClientController::class,'clientcreate'])->name('clientcreate');
    Route::post('/clientstore',[ClientController::class,'clientstore'])->name('clientstore');

   
});

