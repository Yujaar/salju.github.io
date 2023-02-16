<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'])->name('Home');
Route::get('/model-mobil/formo-max',[HomeController::class, 'formomax'])->name('formomax');
Route::get('/model-mobil/cortez-s',[HomeController::class, 'cortezs'])->name('cortezs');
Route::get('/model-mobil/new-cortez',[HomeController::class, 'newcortez'])->name('newcortez');
Route::get('/model-mobil/almaz',[HomeController::class, 'almaz'])->name('almaz');
Route::get('/model-mobil/almaz-rs-pro',[HomeController::class, 'almazrspro'])->name('almazrspro');
Route::get('/model-mobil/air-ev',[HomeController::class, 'airev'])->name('airev');
Route::get('/model-mobil/almaz-hybrid',[HomeController::class, 'almazhybrid'])->name('almazhybrid');
Route::get('/model-mobil/formo',[HomeController::class, 'formo'])->name('formo');
Route::get('/model-mobil/confero',[HomeController::class, 'confero'])->name('confero');
Route::get('/pricelist',[HomeController::class, 'pricelist'])->name('pricelist');
Route::get('/promo-wuling',[HomeController::class, 'promowuling'])->name('promowuling');
Route::get('/artikel',[HomeController::class, 'artikel'])->name('artikel');


