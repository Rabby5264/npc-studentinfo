<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultextendContoller;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){


    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    Route::resource('users',UserController::class);

    Route::resource('subjects',SubjectController::class);

    Route::resource('student',StudentController::class);

    Route::resource('result',ResultController::class);

    Route::resource('result-extend',ResultextendContoller::class);
    
});
