<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::middleware('status.check')->group(function() {
Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/insert', [App\Http\Controllers\ManualController::class, 'manualRegister'])->name('manual');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'view'])->name('admin');
Route::get('/subadmin', [App\Http\Controllers\SubAdminController::class, 'userview'])->name('subadmin');
Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');
});

Route::get('/delete/{id}',[App\Http\Controllers\ManualController::class,'delete'])->name('task.delete');

Route::get('/show', [App\Http\Controllers\ManualController::class, 'show'])->name('show');

