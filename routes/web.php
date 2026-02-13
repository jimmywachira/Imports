<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', Search::class)->name('cars');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/inspection-reports', 'inspection')->name('inspection');
Route::view('/shipping-clearing', 'shipping')->name('shipping');
Route::view('/vehicle-history', 'history')->name('history');
Route::view('/trade-in-program', 'tradein')->name('tradein');
Route::view('/advisory', 'advisory')->name('advisory');
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-of-service', 'terms')->name('terms');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
