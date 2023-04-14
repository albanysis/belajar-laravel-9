<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('beranda');
});

// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('dashboard', Dashboard::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('kasir', Kasir::class);
    });
});
