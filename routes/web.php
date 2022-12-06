<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\leavetypeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeecreateController;


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



//backend



Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');

Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/registerstore',[UserController::class,'registerstore'])->name('registerstore');







Route::group(["middleware"=>"auth"],function(){

    Route::get('/',function(){
        return view('backend.welcome');
    })->name('admin');


    Route::get('/logout',[UserController::class,'logout'])->name('logout');

    Route::get('/dashboards',[DashboardController::class,'dashboards'])->name('dashboard');

    Route::get('/employee',[employeeController::class,'employee'])->name('employee');
    Route::get('/employeecreate',[employeeController::class,'employeecreate'])->name('employee.create');
    Route::post('/emc',[employeeController::class,'emc'])->name('emc.create');
    Route::get('/employee/delete/{employee_id}',[employeeController::class,'deleteEmployee'])->name('employee.delete');
    Route::get('/employee/view/{employee_id}',[employeeController::class,'viewEmployee'])->name('employee.view');
    Route::get('/employee/edit/{employee_id}',[employeeController::class,'edit'])->name('employee.edit');
    Route::put('/employee/update/{employee_id}',[employeeController::class,'update'])->name('employee.update');

    Route::get('/employeeleavebalance',[employeeleavebalanceController::class,'employeeleavebalance'])->name('employeeleavebalance');
    Route::get('/employeeleavebalancecreate',[employeeleavebalanceController::class,'employeeleavebalancecreate'])->name('employeeleavebalance.create');
    Route::post('/emblnc',[employeeleavebalanceController::class,'emblnc'])->name('emblnc.create');







    Route::get('/attendance',[AttendanceController::class,'attendance'])->name('attendance');
    Route::get('/attendancecreate',[AttendanceController::class,'attendancecreate'])->name('attendancecreate');
    Route::post('/attendancestore',[AttendanceController::class,'attendancestore'])->name('attendancestore');
    Route::get('/attendance/delete/{attendance_id}',[AttendanceController::class,'deleteattendance'])->name('attendance.delete');
    Route::get('/attendance/view/{attendance_id}',[AttendanceController::class,'viewattendance'])->name('attendance.view');
    Route::get('/attendance/edit/{attendance_id}',[AttendanceController::class,'edit'])->name('attendance.edit');
    Route::put('/attendance/update/{attendance_id}',[AttendanceController::class,'update'])->name('attendance.update');






    Route::get('/leave',[leaveController::class,'leave'])->name('leave');
    Route::get('/leavecreate',[leaveController::class,'leavecreate'])->name('leave.create');
    Route::post('/leve-store',[leaveController::class,'leve'])->name('leve.store');
    Route::get('/leave/delete/{leave_id}',[leaveController::class,'deleteleave'])->name('leave.delete');
    Route::get('leave/view/{leave_id}',[leaveController::class,'viewleave'])->name('leave.view');
    Route::get('/leave/edit/{leave_id}',[leaveController::class,'edit'])->name('leave.edit');
    Route::put('/leave/update/{leave_id}',[leaveController::class,'update'])->name('leave.update');


    Route::get('/leavetype',[leavetypeController::class,'leavetype'])->name('leavetype');
    Route::get('/leavetypecreate',[leavetypeController::class,'leavetypecreate'])->name('leavetype.create');
    Route::post('/leavetype-store',[leavetypeController::class,'leavetypestore'])->name('leavetype.store');
    Route::get('/leavetype/delete/{leave_id}',[leavetypeController::class,'deleteleavetype'])->name('leavetype.delete');
    Route::get('leavetype/view/{leave_id}',[leavetypeController::class,'viewleavetype'])->name('leavetype.view');
    Route::get('/leavetype/edit/{leave_id}',[leavetypeController::class,'edit'])->name('leavetype.edit');
    Route::put('/leavetype/update/{leave_id}',[leavetypeController::class,'update'])->name('leavetype.update');










    Route::get('/projects',[ProjectsController::class,'projects'])->name('projects');
    Route::get('/projectscreate',[ProjectsController::class,'projectscreate'])->name('projectscreate');
    Route::post('/projectsstore',[ProjectsController::class,'projectsstore'])->name('projectsstore');
    Route::get('/projects/delete/{projects_id}',[ProjectsController::class,'deleteprojects'])->name('projects.delete');
    Route::get('projects/view/{projects_id}',[ProjectsController::class,'viewprojects'])->name('projects.view');
    Route::get('/projects/edit/{projects_id}',[ProjectsController::class,'edit'])->name('projects.edit');
    Route::put('/projects/update/{projects_id}',[ProjectsController::class,'update'])->name('projects.update');








    Route::get('/salary',[SalaryController::class,'salary'])->name('salary');
    Route::get('/salarycreate',[SalaryController::class,'salarycreate'])->name('salarycreate');
    Route::post('/salaryform',[SalaryController::class,'salaryform'])->name('salaryform');
    Route::get('/salary/delete/{salary_id}',[SalaryController::class,'deletesalary'])->name('salary.delete');
    Route::get('salary/view/{salary_id}',[SalaryController::class,'viewsalary'])->name('salary.view');
    Route::get('/salary/edit/{salary_id}',[SalaryController::class,'edit'])->name('salary.edit');
    Route::put('/salary/update/{salary_id}',[SalaryController::class,'update'])->name('salary.update');








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

