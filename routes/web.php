<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/return', [App\Http\Controllers\HomeController::class, 'return'])->name('return');
Route::get('/delivery', [App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
Route::get('/transportation', [App\Http\Controllers\HomeController::class, 'transportation'])->name('transportation');
Route::get('/distribution', [App\Http\Controllers\HomeController::class, 'distribution'])->name('distribution');

Route::get('/asset', [App\Http\Controllers\HomeController::class, 'asset'])->name('asset');
Route::get('/create_form/add_asset', [App\Http\Controllers\HomeController::class, 'add_asset'])->name('add_asset');
Route::get('/add_asset/save', [App\Http\Controllers\HomeController::class, 'add_asset'])->name('add_asset');

Route::get('/storage', [App\Http\Controllers\HomeController::class, 'storage'])->name('storage');
Route::get('/supplier', [App\Http\Controllers\HomeController::class, 'supplier'])->name('supplier');
