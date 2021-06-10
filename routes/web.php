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

Route::get('/delivery', [App\Http\Controllers\DeliveryController::class, 'delivery'])->name('delivery');
Route::get('/create_form/add_delivery', [App\Http\Controllers\DeliveryController::class, 'add_delivery'])->name('add.delivery');
Route::post('/create_form/add_delivery/save', [App\Http\Controllers\DeliveryController::class, 'add_delivery_save'])->name('add.delivery.save');
Route::get('/create_form/updatedelivery/{id}', [App\Http\Controllers\DeliveryController::class, 'update_delivery'])->name('update.delivery');
Route::post('/create_form/update_delivery/{id}/save', [App\Http\Controllers\DeliveryController::class, 'update_delivery_save'])->name('update.delivery.save');
Route::get('/create_form/delete_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'delete_delivery'])->name('delete.delivery');

Route::get('/transportation', [App\Http\Controllers\TransportationController::class, 'transportation'])->name('transportation');
Route::get('/create_form/add_transportation', [App\Http\Controllers\TransportationController::class, 'add_transportation'])->name('add.transportation');
Route::post('/create_form/add_transportation/save', [App\Http\Controllers\TransportationController::class, 'add_transportation_save'])->name('add.transportation.save');
Route::get('/create_form/updatetransportation/{id}', [App\Http\Controllers\TransportationController::class, 'update_transportation'])->name('update.transportation');
Route::post('/create_form/update_transportation/{id}/save', [App\Http\Controllers\TransportationController::class, 'update_transportation_save'])->name('update.transportation.save');
Route::get('/create_form/delete_transportation/{id}',[App\Http\Controllers\TransportationController::class,'delete_transportation'])->name('delete.transportation');

Route::get('/distribution', [App\Http\Controllers\DistributionController::class, 'distribution'])->name('distribution');
Route::get('/create_form/add_distribution', [App\Http\Controllers\DistributionController::class, 'add_distribution'])->name('add.distribution');
Route::post('/create_form/add_distribution/save', [App\Http\Controllers\DistributionController::class, 'add_distribution_save'])->name('add.distribution.save');
Route::get('/create_form/updatedistribution/{id}', [App\Http\Controllers\DistributionController::class, 'update_distribution'])->name('update.distribution');
Route::post('/create_form/update_distribution/{id}/save', [App\Http\Controllers\DistributionController::class, 'update_distribution_save'])->name('update.distribution.save');
Route::get('/create_form/delete_distribution/{id}',[App\Http\Controllers\DistributionController::class,'delete_distribution'])->name('delete.distribution');

Route::get('/asset', [App\Http\Controllers\AssetController::class, 'asset'])->name('asset');
Route::get('/create_form/add_asset', [App\Http\Controllers\AssetController::class, 'add_asset'])->name('add.asset');
Route::post('/create_form/add_asset/save', [App\Http\Controllers\AssetController::class, 'add_asset_save'])->name('add.asset.save');
Route::get('/create_form/update_asset/{id}', [App\Http\Controllers\AssetController::class, 'update_asset'])->name('update.asset');
Route::post('/create_form/update_asset/{id}/save', [App\Http\Controllers\AssetController::class, 'update_asset_save'])->name('update.asset.save');
Route::get('/create_form/delete_asset/{id}',[App\Http\Controllers\AssetController::class,'delete_asset'])->name('delete.asset');

Route::get('/storage', [App\Http\Controllers\StorageController::class, 'storage'])->name('storage');
Route::get('/create_form/add_storage', [App\Http\Controllers\StorageController::class, 'add_storage'])->name('add.storage');
Route::post('/create_form/add_storage/save', [App\Http\Controllers\StorageController::class, 'add_storage_save'])->name('add.storage.save');
Route::get('/create_form/update_storage/{id}', [App\Http\Controllers\StorageController::class, 'update_storage'])->name('update.storage');
Route::post('/create_form/update_storage/{id}/save', [App\Http\Controllers\StorageController::class, 'update_storage_save'])->name('update.storage.save');
Route::get('/create_form/delete_storage/{id}',[App\Http\Controllers\StorageController::class,'delete_storage'])->name('delete.storage');

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
Route::get('/create_form/add_supplier', [App\Http\Controllers\SupplierController::class, 'add_supplier'])->name('add.supplier');
Route::post('/create_form/add_supplier/save', [App\Http\Controllers\SupplierController::class, 'add_supplier_save'])->name('add.supplier.save');
Route::get('/create_form/update_supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update_supplier'])->name('update.supplier');
Route::post('/create_form/update_supplier/{id}/save', [App\Http\Controllers\SupplierController::class, 'update_supplier_save'])->name('update.supplier.save');
Route::get('/create_form/delete_supplier/{id}',[App\Http\Controllers\SupplierController::class,'delete_supplier'])->name('delete.supplier');
