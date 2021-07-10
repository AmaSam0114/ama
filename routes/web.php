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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index'])->name('notification');
Route::get('/notification/read', [App\Http\Controllers\NotificationController::class, 'read'])->name('notification.read');

Route::get('/job', [App\Http\Controllers\JobController::class, 'index'])->name('job.listing');
Route::get('/job/view/{id}', [App\Http\Controllers\JobController::class, 'show'])->name('job.view');
Route::get('/job/create', [App\Http\Controllers\JobController::class, 'create'])->name('job.create');
Route::get('/job/update/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('job.update');
Route::get('/job/calender', [App\Http\Controllers\JobController::class, 'calender'])->name('job.calender');

Route::get('/job/cycle/view/{id}', [App\Http\Controllers\CycleController::class, 'show'])->name('cycle.view');
Route::get('/job/cycle/update/{id}', [App\Http\Controllers\CycleController::class, 'update'])->name('cycle.update');
Route::get('/job/cycle/create', [App\Http\Controllers\CycleController::class, 'create'])->name('cycle.create');


Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.listing');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee/update/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.update');
Route::get('/employee/attendance', [App\Http\Controllers\EmployeeController::class, 'attendance'])->name('employee.attendance');

Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.listing');
Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::get('/client/update/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.update');
Route::get('/client/invoice', [App\Http\Controllers\ClientController::class, 'invoice'])->name('client.invoice');
Route::get('/client/view/{id}', [App\Http\Controllers\ClientController::class, 'show'])->name('client.view');


Route::get('/report/view', [App\Http\Controllers\ReportController::class, 'report1'])->name('report.view');
Route::get('/contact', function(){return \View::make("contact");})->name('contact');
