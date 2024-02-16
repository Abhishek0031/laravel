<?php

use Illuminate\Http\Request;
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

Route::get('/admin', function(){
    $user=auth()->user();
    return view('adminView',['type'=>'subadmin'],compact('user'));
})->name('admin');


Route::get('/staff', function(Request $request){
    $user=auth()->user();
    return view('adminView',compact('user'));
})->name('staff');

Route::get('/view/{type}', [App\Http\Controllers\CommonController::class, 'view'])->name('view.blade');
Route::get('/add/{type}', [App\Http\Controllers\CommonController::class, 'formView'])->name('add');
Route::post('/create/{type}', [App\Http\Controllers\CommonController::class, 'create'])->name('create');




