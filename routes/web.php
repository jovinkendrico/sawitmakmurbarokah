<?php

use App\Http\Controllers\Admin\Master\BlokController;
use App\Http\Controllers\Admin\Master\KaryawanController;
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
})->middleware('auth');


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
