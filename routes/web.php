<?php

use App\Http\Controllers\jualController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\satuanController;
use App\Http\Controllers\supplierController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Obat', ObatController::class);
Route::resource('Supplier', supplierController::class);
Route::resource('Satuan', satuanController::class);
Route::resource('Jual', jualController::class);