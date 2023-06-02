<?php

use App\Http\Controllers\DatabarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::redirect('/', '/welcome');
Route::get('welcome', [HomeController::class, 'index'])->name('home');

Route::get('profil', ProfileController::class)->name('profil');

Route::resource('databarangs', DatabarangController::class);

