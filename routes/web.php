<?php

use App\Http\Controllers\BibidhController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PradeshController;
use App\Http\Controllers\SahityaController;
use App\Http\Controllers\SamacharController;
use App\Http\Controllers\SportsController;
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

Route::view('homeDetails', 'homeDetails')->name('homeDetails');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('business', [BusinessController::class, 'index'])->name('business');
Route::get('pradesh', [PradeshController::class, 'index'])->name('pradesh');
Route::get('health', [HealthController::class, 'index'])->name('health');
Route::get('entertainment', [EntertainmentController::class, 'index'])->name('entertainment');
Route::get('sport', [SportsController::class, 'index'])->name('sport');
Route::get('sahitya', [SahityaController::class, 'index'])->name('sahitya');
Route::get('bibidh', [BibidhController::class, 'index'])->name('bibidh');
Route::get('samachar', [SamacharController::class, 'index'])->name('samachar');

/*Route::get('/', function () {
    return view('home');
});
Route::view('homeDetails', 'homeDetails');
Route::view('business', 'business');
Route::view('pradesh', 'pradesh');
Route::view('health', 'health');
Route::view('entertainment', 'entertainment');
Route::view('sport', 'sport');
Route::view('sahitya', 'sahitya');
Route::view('bibidh', 'bibidh');

/*Route::get('/samachar', function () {
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
*/