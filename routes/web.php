<?php

use App\Models\Service;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialController;
use App\Http\Livewire\Newsletter;
use App\Mail\NewSubscriber;
use App\Models\Subscriber;

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
    Route::get('/about-us', AboutController::class)->name('about');
    Route::view('/faq', 'faq', [
        'services' => Service::where('name', '!=', 'General')->with('faqs')->get()
    ])->name('faq');
    Route::view('/pre-post-treatment', 'pre-post-treatment', [
        'services' => Service::select('id', 'name')->where('name', '!=', 'General')->with(['images', 'ppt'])->get()
    ])->name('ppt');
    Route::view('/before-after-photos', 'before-after-photos')->name('before-after-photos');
    Route::view('/terms-of-service', 'terms-of-service')->name('terms-of-service');
    Route::view('/shop', 'shop')->name('shop');
    Route::get('/newsletter', Newsletter::class)->name('newsletter');
    Route::view('/training/permanent-makeup', 'training.permanent-makeup')->name('training.permanent-makeup');
    Route::view('/link-tree', 'link-tree')->name('link-tree');
    Route::view('/payment-plans', 'payment-plans')->name('payment-plans');
});


Route::middleware(['auth'])->group(function () {
    Route::view('lab', 'lab')->name('lab');
});

Route::get('/mailable', function () {
    return new NewSubscriber(Subscriber::find(1));
});