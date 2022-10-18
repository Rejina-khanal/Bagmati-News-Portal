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
Route::get('/samachar', function () {
    return view('samachar');
});
Route::get('/homeDetails', function () {
    return view('homeDetails');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/pradesh', function () {
    return view('pradesh');
});
Route::get('/health', function () {
    return view('health');
});
Route::get('/entertainment', function () {
    return view('entertainment');
});
Route::get('/sport', function () {
    return view('sport');
});
Route::get('/sahitya', function () {
    return view('sahitya');
});
Route::get('/bibidh', function () {
    return view('bibidh');
});
