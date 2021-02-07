<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('adminlte.logout');
Route::get('/rates', [App\Http\Controllers\ex_rates_ctrl::class, 'APIrates'])->name('adminlte.rates');
Route::get('/kantor', [App\Http\Controllers\cantor_ctrl::class, 'calculator'])->name('adminlte.kantor');
Route::get('/userAccount', [App\Http\Controllers\mypage_controller::class, 'index']);
Route::get('/card', [App\Http\Controllers\creditcard_controller::class, 'creditcard'])->name('adminlte.creditcard');

//Administracja kontami użytkowników
Route::get('/admin', [App\Http\Controllers\admin_controller::class, 'index']);
Route::get('/editUser/{id}', [App\Http\Controllers\admin_controller::class, 'edit']);
Route::post('/updateUser/{id}', [App\Http\Controllers\admin_controller::class, 'update']);
Route::delete('/deleteUser/{id}', [App\Http\Controllers\admin_controller::class, 'deleteUser']);

//Historia rachunku
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('/addHistory', [App\Http\Controllers\HistoryController::class, 'create']);
Route::post('/history/store', [App\Http\Controllers\HistoryController::class, 'store']);

//Obsługa przelewów
Route::get('/transfer', [App\Http\Controllers\TransferController::class, 'create']);
Route::post('/transfer/store', [App\Http\Controllers\TransferController::class, 'store']);

