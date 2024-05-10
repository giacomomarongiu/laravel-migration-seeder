<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\TrainsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('trains', [TrainsController::class, 'index'])->name('guests.trains.index');
Route::get('trains/{train}', [TrainsController::class, 'show'])->name('guests.train.index');