<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\dashboardController;
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
    return view('home');
})->name('home');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard'); 

Route::get('/logout', [logoutController::class, 'store'])->name('logout');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});
