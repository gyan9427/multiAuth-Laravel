<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->name('user.')->group(function(){
    Route::middleware('guest')->group(function(){
        // Route::view('/login','dashboard.user.login');
        Route::get('/login',[UserController::class,'index'])->name('login');
    });
    Route::middleware('auth')->group(function(){});
});