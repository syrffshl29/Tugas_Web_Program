<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Choice1Controller;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\Soal1Controller;

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
    return view('landing');
})->middleware('guest');

Route::get('/about', function() {
    return view ('about');
})->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/choice1', [Choice1Controller::class, 'index'])->name('choice1');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/soal1', [Soal1Controller::class, 'index'])->name('soal1');

