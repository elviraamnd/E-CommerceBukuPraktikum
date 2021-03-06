<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VerificationrController;
use App\Http\Controllers\Admin\RegisterControllerAdmin;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\BukuController;

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
    return view('dashboard');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verify');

Route::get('/adminlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'loginAdmin'])->name('loginadmin');
Route::get('/adminregister', [App\Http\Controllers\Admin\RegisterControllerAdmin::class, 'index'])->name('registeradmin');
Route::post('/adminregister', [App\Http\Controllers\Admin\RegisterControllerAdmin::class, 'store'])->name('registeradmin');
Route::post('actionlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'action'])->name('actionlogin');
Route::get('logoutAdmin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'logoutAdmin'])->name('logoutadmin');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/kurir', KurirController::class);
    Route::resource('/buku', BukuController::class);
});

