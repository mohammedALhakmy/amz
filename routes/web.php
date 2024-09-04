<?php

use App\Http\Controllers\AddresseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('/', function () { return Inertia::render('Dashboard');})->name('dashboard');
Route::get('/Cart', function () { return Inertia::render('Cart');})->name('cart.index');
Route::get('/category/{id}', [CategoryController::class,'index'])->name('category.index');
Route::get('/product/{id}', [ProductController::class,'index'])->name('product.index');
Route::get('/address', [AddresseController::class,'index'])->name('address.index');

Route::middleware('auth')->group(function () {
    Route::get('/address_options', [AddresseController::class,'create'])->name('address_options.index');
    Route::post('/address_options', [AddresseController::class,'store'])->name('address_options.store');
    Route::delete('/address_options/{id}/destroy', [AddresseController::class,'destroy'])->name('address_options.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/checkout', [CheckOutController::class, 'index'])->name('checkout.index');
    Route::post('/store', [CheckOutController::class, 'store'])->name('checkout.store');
    Route::post('/update', [CheckOutController::class, 'update'])->name('checkout.update');
});

require __DIR__.'/auth.php';
