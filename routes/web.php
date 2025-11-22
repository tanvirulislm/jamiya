<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'HomePage'])->name('home');
Route::get('about', [PageController::class, 'AboutPage'])->name('about');
Route::get('principal', [PageController::class, 'PrincipalPage'])->name('principal');
Route::get('admission', [PageController::class, 'AdmissionPage'])->name('admission');
Route::get('teachers', [PageController::class, 'TeachersPage'])->name('teachers');
Route::get('result', [PageController::class, 'ResultPage'])->name('result');
Route::get('donation', [PageController::class, 'DonationPage'])->name('donation');
Route::get('event', [PageController::class, 'EventPage'])->name('event');
Route::get('contact', [PageController::class, 'ContactPage'])->name('contact');
Route::get('gallery', [PageController::class, 'GalleryPage'])->name('gallery');
Route::get('video', [PageController::class, 'VideoPage'])->name('video');
Route::get('kitab', [PageController::class, 'KitabPage'])->name('kitab');
