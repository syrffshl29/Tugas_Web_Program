<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Choice1Controller;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\Soal1Controller;
use App\Http\Controllers\Soal2Controller;
use App\Http\Controllers\Soal3Controller;
use App\Http\Controllers\Soal4Controller;
use App\Http\Controllers\Soal5Controller;
use App\Http\Controllers\ProfilpsikologController;
use App\Http\Controllers\Soal6Controller;
use App\Http\Controllers\Soal7Controller;
use App\Http\Controllers\Soal8Controller;

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


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/choice1', [Choice1Controller::class, 'index'])->name('choice1');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/soal1', [Soal1Controller::class, 'index'])->name('soal1');
Route::get('/soal2', [Soal2Controller::class, 'index'])->name('soal2');
Route::get('/soal3', [Soal3Controller::class, 'index'])->name('soal3');
Route::get('/soal4', [Soal4Controller::class, 'index'])->name('soal4');
Route::get('/soal5', [Soal5Controller::class, 'index'])->name('soal5');
Route::get('/profilpsikolog', [ProfilpsikologController::class, 'index'])->name('profilpsikolog');
Route::get('/soal6', [Soal6Controller::class, 'index'])->name('soal6');
Route::get('/soal7', [Soal7Controller::class, 'index'])->name('soal7');
Route::get('/soal8', [Soal8Controller::class, 'index'])->name('soal8');
Route::get('pertanyaan',[PertanyaanController::class,'index']);
