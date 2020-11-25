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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db', [App\Http\Controllers\CdvController::class, 'index']);
Route::get('/userTable', [App\Http\Controllers\User::class, 'index']);
Route::get('/data', [App\Http\Controllers\Data::class, 'list']);
Route::get('/album', [App\Http\Controllers\Data::class, 'album']);

