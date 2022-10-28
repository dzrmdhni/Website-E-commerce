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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Auth::routes();

Route::resource('/items', App\Http\Controllers\ItemController::class)->middleware('auth');
Route::resource('/users', App\Http\Controllers\UserController::class)->middleware('auth');

Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('update_profile');
Route::put('/changepassword', [App\Http\Controllers\PasswordController::class, 'update'])->name('update_password');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/changepassword', [App\Http\Controllers\PasswordController::class, 'index'])->name('password');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');