<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return view('login');
})->name('login');

// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistgerForm'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register');

// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/save-to-database', [UserController::class, 'register'])->name('save-to-database');


Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('guest');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});


// Route::get('/home', [AuthController::class, 'home'])->name('register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
