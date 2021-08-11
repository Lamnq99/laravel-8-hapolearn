<?php

use App\Http\Controllers\HapoController;
use App\Http\Controllers\HapoRegisterController;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('hapolearn', [HapoController::class, 'index']);

//Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register_custome');