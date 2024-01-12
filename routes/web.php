<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('tentang-kami', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('tentang-kami');
Route::get('paket-travel', [\App\Http\Controllers\Frontend\TravelPackageController::class, 'index'])->name('paket-travel');
Route::get('paket-travel/{travel_package:slug}', [\App\Http\Controllers\Frontend\TravelPackageController::class, 'show'])->name('travel.detail');
Route::get('blog', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog');
Route::get('blog/{post:slug}', [\App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('blog.show');
Route::get('checkout}', [\App\Http\Controllers\OrderController::class, 'index'])->name('checkout');
