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
Route::get('/aboutus', [\App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [\App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [\App\Http\Controllers\HomeController::class, 'contactStore'])->name('contactus.store');

Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DasboardController::class, 'index'])->name('dashboard.index');
    Route::resource('mobil', \App\Http\Controllers\Admin\MobilController::class);
    Route::put('mobil/update-gambar/{id}', [\App\Http\Controllers\Admin\MobilController::class, 'updateGambar'])->name('mobil.update-gambar');
    Route::get('message', [\App\Http\Controllers\Admin\messageController::class, 'index'])->name('message.index');
    Route::delete('message/{message}', [\App\Http\Controllers\Admin\messageController::class, 'destroy'])->name('message.destroy');
});


Auth::routes();
