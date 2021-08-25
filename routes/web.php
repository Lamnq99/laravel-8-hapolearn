<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('logout', [LogoutController::class, 'getLogout']);

Route::get('allcourses', [CourseController::class, 'index']);

Route::get('search', [CourseController::class, 'search'])->name('search');

Auth::routes();
