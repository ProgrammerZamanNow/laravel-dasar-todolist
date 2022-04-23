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

Route::view('/template', 'template');

Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'doLogin');
    Route::post('/logout', 'doLogout');
});
