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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
route::get('/detail', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/contactus', [\App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');

Route::get('admin/dashboard', [\App\Http\Controllers\admin\DasboardController::class, 'index'])->name('admin.dashboard.index')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
