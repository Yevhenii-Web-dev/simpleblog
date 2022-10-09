<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->name('welcome');
Route::get('/home', [HomeController::class, 'index'] )->name("home");
Route::view('/about', 'about')->name("about");
Route::view('/contact', 'contact')->name("contact");

Route::resource('/posts', PostController::class);

Route::group(['middleware' =>'auth'], function () {
    Route::view('/dashboard', 'dashboard')->name("dashboard");

});
Auth::routes();

