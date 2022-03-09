<?php

use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialController;

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

Route::middleware('web')->group(function () {
    Route::get('/', Home::class)->middleware('web')->name('home');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/specials', SpecialController::class)->name('specials');
});
