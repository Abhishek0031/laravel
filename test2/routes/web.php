<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['verify'=>true]);
Route::middleware('usercheck')->group(function() {
Route::get('/', function () {
    return view('home');
}); 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminControler::class, 'adminPage'])->name('admin');
Route::get('/admin/reset', [App\Http\Controllers\AdminControler::class, 'resetPasword'])->name('admin.reset');
Route::get('/admin/update', [App\Http\Controllers\AdminControler::class, 'updatePassword'])->name('admin.update');
// 
Route::get('/user', [App\Http\Controllers\UserControler::class, 'userPage'])->name('user_dash');
Route::post('/profile', [App\Http\Controllers\UserControler::class, 'profileUpdate'])->name('profile');

Route::post('/change/{id}/{status}', [App\Http\Controllers\UserControler::class, 'changeUser'])->name('change');
// Route::get('/user/view', [App\Http\Controllers\UserControler::class, 'userPage'])->name('home'); 
Route::post('/update/{id}', [App\Http\Controllers\UserControler::class, 'userUpdate'])->name('user_ins');
Route::get('/delete/{id}',[App\Http\Controllers\UserControler::class,'delete'])->name('task.delete');
});



