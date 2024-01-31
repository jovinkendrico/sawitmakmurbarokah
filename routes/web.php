<?php

use App\Http\Controllers\Admin\Laporan\Transaksi\LaporanPenjualanBrondolanController;
use App\Http\Controllers\Admin\Laporan\Transaksi\LaporanPenjualantbsController;
use App\Http\Controllers\Admin\Master\ArmadaController;
use App\Http\Controllers\Admin\Master\BlokController;
use App\Http\Controllers\Admin\Master\KaryawanController;
use App\Http\Controllers\Admin\Master\PksController;
use App\Http\Controllers\Admin\Master\SupplierController;
use App\Http\Controllers\Admin\Transaksi\PenjualanBrondolanController;
use App\Http\Controllers\Admin\Transaksi\PenjualantbsController;
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

Auth::routes();


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin')->middleware('auth');


Route::controller(KaryawanController::class)->prefix('admin/master/karyawan')->name('admin.master.karyawan.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(BlokController::class)->prefix('admin/master/blok')->name('admin.master.blok.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(ArmadaController::class)->prefix('admin/master/armada')->name('admin.master.armada.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(PksController::class)->prefix('admin/master/pks')->name('admin.master.pks.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(SupplierController::class)->prefix('admin/master/supplier')->name('admin.master.supplier.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});












Route::controller(PenjualantbsController::class)->prefix('admin/transaksi/penjualantbs')->name('admin.transaksi.penjualantbs.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});

Route::controller(PenjualanBrondolanController::class)->prefix('admin/transaksi/penjualanbrondolan')->name('admin.transaksi.penjualanbrondolan.')->middleware('auth')->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::put('/update/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('delete');
});





//laporan transaksi
Route::controller(LaporanPenjualantbsController::class)->prefix('admin/laporan/transaksi/penjualantbs')
->name('admin.laporan.transaksi.penjualantbs.')->middleware('auth')->group(function(){
    route::get('/create','create')->name('create');
    route::post('/generate','generate')->name('generate');
});

Route::controller(LaporanPenjualanBrondolanController::class)->prefix('admin/laporan/transaksi/penjualanbrondolan')
->name('admin.laporan.transaksi.penjualanbrondolan.')->middleware('auth')->group(function(){
    route::get('/create','create')->name('create');
    route::post('/generate','generate')->name('generate');
});

