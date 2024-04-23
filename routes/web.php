<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AreaChartController;

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

Auth:: routes();

Route::get('/', [LoginController::class,'getLogin'])->name('login');
Route::post('/login', [LoginController::class,'postLogin']);
Route::get('/logout', [LoginController::class,'logout']);


Route::get('/dashboard', [HomeController::class,'index'])->middleware('auth');
Route::get('/register', function () {
    return 'register';
});

Route::get('/test', function () {
    return view('test');
});