<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Supervisor\DashboardController as SupervisorDashboard;
use App\Http\Controllers\User\DashboardController as UserDashboard;
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
Route::get('/', function() {
    return view('welcome');
});

Route::middleware(['auth', 'role:administrator'])->group(function () {
    Route::get('/admin', [AdminDashboard::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:supervisor'])->group(function () {
    Route::get('/supervisor', [SupervisorDashboard::class, 'index'])->name('supervisor.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [UserDashboard::class, 'index'])->name('user.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
