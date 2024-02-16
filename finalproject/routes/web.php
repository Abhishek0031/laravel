<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminPage'])->name('admin');
Route::get('/admin/view/{type}', [App\Http\Controllers\ViewController::class, 'view'])->name('view.blade');
Route::get('/admin/add/{type}', [App\Http\Controllers\ViewController::class, 'add'])->name('add');
Route::post('/admin/create', [App\Http\Controllers\ViewController::class, 'create'])->name('create');

Route::get('/update', [App\Http\Controllers\ViewController::class, 'update'])->name('update');
Route::post('/admin/details', [App\Http\Controllers\ViewController::class, 'updateDetails'])->name('update_details');
Route::get('/subadmin/view', [App\Http\Controllers\SubAdminController::class, 'index'])->name('view.file');
Route::get('/manager/view', [App\Http\Controllers\ManagerController::class, 'index'])->name('view.manager');
Route::get('/staff/view', [App\Http\Controllers\StaffController::class, 'index'])->name('view.staff');

Route::get('/subadmin', [App\Http\Controllers\SubAdminController::class, 'subadminPage'])->name('subadmin');


Route::get('/manager', [App\Http\Controllers\ManagerController::class, 'managerPage'])->name('manager');

