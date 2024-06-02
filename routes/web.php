<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;


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
    return view('register');
});

Route::get('/monitoring', function () {
    return view('monitoring', [
        "title" => "Form Monitoring",
    ]);
});

Route::get('/user', function () {
    return view('user', [
        "title" => "User",
    ]);
});

Route::get('/dataPel', function () {
    return view('dataPel', [
        "title" => "Data Pelanggan",
    ]);
});

Route::get('/service', function () {
    return view('service', [
        "title" => "Service",
    ]);
});

Route::get('/task', function () {
    return view('task', [
        "title" => "Task",
    ]);
});


Route::get('/dataPel', [CustomersController::class, 'index'])->name('customers.index');

Route::get('/service', [ProductController::class, 'index'])->name('product.index');

Route::get('/monitoring', [ProjectsController::class, 'index'])->name('project.index');

Route::post('/monitoring', [ProjectsController::class, 'queryFilter']);




Route::get('/monitoring/{nama_pekerjaan}', [ProjectsController::class, 'show'])->name('projects.show');

Route::post('/monitoring/{nama_pekerjaan}/task', [ProjectsController::class, 'storeTask']);




Route::get('/test', function () {
    return view('test');
});