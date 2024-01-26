<?php

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


Route::controller(KaryawanController::class)->prefix('admin/master/karyawan')->name('admin.master.karyawan.')->group(function(){
    Route::get('/index', 'index')->name('index')->middleware('auth');
    Route::get('/create','create')->name('create')->middleware('auth');
    Route::post('/store','store')->name('store')->middleware('auth');
    Route::get('/show/{id}','show')->name('show')->middleware('auth');
    Route::get('/edit/{id}','edit')->name('edit')->middleware('auth');
    Route::put('/update/{id}','update')->name('update')->middleware('auth');
    Route::delete('/delete/{id}', 'destroy')->name('delete')->middleware('auth');
});
