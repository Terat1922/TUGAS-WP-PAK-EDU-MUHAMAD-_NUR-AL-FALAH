<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\suratmasukController;
use App\Http\Controllers\SuratkeluarController;


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

Route::get('/',[LandingController::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::resource('suratmasuks',SuratmasukController::class);
Route::post('suratmasukimportproses',[SuratmasukController::class,'importproses']);
Route::get('suratmasukipdf',[SuratmasukController::class,'exportpdf']);
Route::get('suratmasukpdf',[SuratmasukController::class,'exportpdf']);
Route::get('suratmasukimport', [SuratmasukController::class, 'import']);

Route::resource('suratkeluars',SuratkeluarController::class);
Route::get('suratkeluarimport', [SuratkeluarController::class, 'import']);
Route::post('suratkeluarimportproses',[SuratkeluarController::class,'importproses']);
Route::get('suratkeluaripdf',[SuratkeluarController::class,'exportpdf']);
Route::get('suratkeluarpdf',[SuratkeluarController::class,'exportpdf']);