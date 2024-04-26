<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('buku',[App\Http\Controllers\BukuController::class,'index'])->name('buku');

//Route::resource(name :'guru', controller: GuruController::class);
//Route::resource(name :'dokter', controller: DokterController::class);

Route::resource(name:'buku', controller:BukuController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
