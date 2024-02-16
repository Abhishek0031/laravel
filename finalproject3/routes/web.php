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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('admin')->group(function() {

    Route::get('/admin', function(){
        $user=auth()->user();
        return view('adminHome',['type'=>'subadmin'],compact('user'));
    })->name('admin');

});
Route::get('/admin/{type}', [App\Http\Controllers\AdminController::class, 'view'])->name('view.blade');



