<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CCTVController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LalinController;

Route::get('/Login', [LoginController::class, 'login'])->name('login');
Route::get('/Register', [LoginController::class, 'register'])->name('Register');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/',[CCTVController::class, 'index'])->name('Home')->middleware('auth');
Route::get('/LalinRealtime',[LalinController::class, 'index'])->name('LalinRealtime')->middleware('auth');



