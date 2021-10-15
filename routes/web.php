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
    return view('home');
});
Route::get('/hello', function () {
    return 'hello world';
});
Route::get('/cis', [App\Http\Controllers\CisController::class, 'index']);
Route::get('/cis/{year}', [App\Http\Controllers\CisController::class, 'getclass']);

Route::get('/profile', function () {
    return view('profile'); // return view name profile
});
Route::get('/aboutme', function () {
    return view('aboutme');
});