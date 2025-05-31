<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\ProductDetail; 
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Models\Wishlist;





Route::get('/dashboard', function () {
    $products = ProductDetail::all();
    return view('index', compact('products'));
})->name('dashboard');








Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product_single', function () {
    return view('product_single');
});




Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/shop', function () {
    return view('shop');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog_single', function () {
    return view('blog_single');
});





Route::post('/productcontroller', [\App\Http\Controllers\ProductDetailController::class, 'store'])
    ->name('product.store');


Route::middleware('auth')->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
    
    // In routes/web.php
    Route::delete('/wishlist/{id}', [WishlistController::class, 'remove'])
     ->name('wishlist.remove');
 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


require __DIR__.'/auth.php';
