<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    route::get('dashboard',[App\Http\Controllers\DashController::class, 'index']);
});


Auth::routes();

Route::post('/CreateBooking', 'bookingController@storeBooking')->name('booking');
Route::get('/getBooking', 'bookingController@getBooking')->name('booking');

Route::get('/display', function () {
    return view('display');
});