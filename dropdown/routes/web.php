<?php

use App\Http\Controllers\DropDownController;
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

// Route::get('/', function () {
//     return view('dropeDown');
// });

Route::get('/home', [App\Http\Controllers\DropDownController::class, 'index'])->name('home');
Route::get('/state/{cid}',[DropDownController::class,'state'])->name('state');
Route::get('/city/{sid}/{cid}',[DropDownController::class,'city'])->name('city');
// Route::get('/city',[DropDownController::class,'display'])->name('view');




