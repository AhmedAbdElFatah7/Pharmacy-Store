<?php

use App\Http\Controllers\AdminController;
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

//user routes -------------------------------
Auth::routes();
Route::get('/', function () {return view('user/welcome');})->middleware('auth');
Route::get('/thanks', function () {return view('user/thanks');})->name('thanks');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/house', [App\Http\Controllers\HomeController::class, 'house']);
Route::get('/checkout/{id}', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout.checkout');
Route::get('/view/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('view.show');

//admin routes -------------------------------

Route::resource('admin',AdminController::class)->middleware(['auth','CheckAdmin']);