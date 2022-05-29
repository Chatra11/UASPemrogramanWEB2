<?php

use App\Http\Controllers\jenisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\jualController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\satuanController;
use App\Http\Controllers\supplierController;

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

Route::get('/', function () {return view('welcome');})->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('Obat', ObatController::class)->middleware('auth');
Route::resource('Supplier', supplierController::class)->middleware('auth');
Route::resource('Satuan', satuanController::class)->middleware('auth');
Route::resource('Jual', jualController::class)->middleware('auth');
Route::resource('Jenis', jenisController::class)->middleware('auth');