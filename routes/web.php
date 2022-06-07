<?php

use App\Http\Controllers\MissedCallController;
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
    return view('auth.login');
});

Route::get('beans', function () {
    return view('layouts.beans_page');
});

Route::get('weather', function () {
    return view('weather.show');
})->name('weather');

Route::get('server', function () {
    abort(500);
})->name('server');

Route::resource('/missedCalls', MissedCallController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
