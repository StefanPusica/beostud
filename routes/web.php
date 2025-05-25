<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/o-nama', [AboutController::class, 'about']);
Route::get('/kontakt', [ContactController::class, 'contact']);
Route::get('/galerija', [GalleryController::class, 'gallery']);

// rental kategorije (bez podkategorije)
Route::get('/rental', [RentalController::class, 'rental']);
Route::get('/rental/{categorySlug}', [RentalController::class, 'category'])->name('rental.category');
// rental podkategorije (ako postoji i podkategorija)
Route::get('/rental/{categorySlug}/{subcategorySlug}', [RentalController::class, 'subcategory'])->name('rental.subcategory');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'submit'])->name('checkout.submit');

