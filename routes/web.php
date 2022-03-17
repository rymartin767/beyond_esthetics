<?php

use App\Models\Service;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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
    Route::get('/specials', SpecialController::class)->name('specials');
    Route::get('/about', AboutController::class)->name('about');
    Route::view('/faq', 'faq', [
        'services' => Service::where('name', '!=', 'General')->with('faqs')->get()
    ])->name('faq');
    Route::view('/newsletter', 'newsletter')->name('newsletter');
});


Route::middleware(['auth'])->group(function () {
    Route::view('lab', 'lab')->name('lab');
});