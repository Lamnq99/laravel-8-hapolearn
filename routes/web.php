<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Document;
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

Route::get('allcourses', [CourseController::class, 'index'])->name('allcourses');

Route::get('search', [CourseController::class, 'search'])->name('search');

Route::get('allcourses/coursedetail/{id}', [CourseController::class, 'detail'])->name('coursedetail');

Route::get('allcourses/coursedetail/{id}/search', [LessonController::class, 'search'])->name('filterdetail');

Route::get('insert/{id}', [CourseController::class, 'join'])->middleware('login');

Route::get('addreview/{id}', [ReviewController::class, 'addReview'])->middleware('login');

Route::get('leave/{id}', [CourseController::class, 'leave'])->middleware('login');

Route::get('allcourses/coursedetail/lesson/{id}', [LessonController::class, 'index']);

Route::get('/view/{file}', [DocumentController::class, 'show']);

Route::post('/learning', [DocumentController::class, 'learning']);

Route::get('/profile', [UserController::class, 'index'])->middleware('login');

Route::post('/profile/edit', [UserController::class, 'update'])->middleware('login');

Auth::routes();
