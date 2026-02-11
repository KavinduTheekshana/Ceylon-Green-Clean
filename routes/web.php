<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('services', [HomeController::class, 'services'])->name('contact');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('how', [HomeController::class, 'how'])->name('how');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.single');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');