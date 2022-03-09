<?php

use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialController;
use App\Models\Employee;

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

Route::view('/', 'mx')->middleware('web')->name('mx');

Route::middleware(['auth'])->group(function () {

    // HOMEPAGE
    Route::get('/home', Home::class)->name('home');

    // SERVICES
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

    // SPECIALS
    Route::get('/specials', SpecialController::class)->name('specials');

    // LAB
    Route::get('/lab', function() {
        return Employee::all()->toJson();
    });
});
