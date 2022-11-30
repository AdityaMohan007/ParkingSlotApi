<?php

use App\Http\Controllers\ParkController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ParkController::class, 'bookingForm'])->name('bookingForm');
Route::get('/booking-details', [ParkController::class, 'bookingDetails'])->name('bookingDetails');
