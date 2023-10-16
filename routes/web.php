<?php

use App\Http\Controllers\RegisterCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\DashboardCon;
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
    return view('index');
});

Route::get('/login', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->
middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->
middleware('auth');

Route::get('register', [RegisterCon::class, 'register'])->name('register');
Route::post('register/action', [RegisterCon::class, 'actionregister'])-> name('actionregister');