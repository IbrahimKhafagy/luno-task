<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
})->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');

Route::post('register',[AuthController::class,'registerSave'])->name('register.save');

Route::post('/',[AuthController::class,'loginAction'])->name('login.action');

Route::get('/index', [HomeController::class, 'index'])->name('index')->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('profile',[HomeController::class,'profile'])->name('profile');
