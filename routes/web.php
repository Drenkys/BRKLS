<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;     
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// ROUTOVÁNÍ INDEXU
Route::get('/', function () {
    $products = Product::take(4)->get();
    return view('index', compact('products'));
})->name('index');
// ROUTOVÁNÍ KONTAKTŮ
Route::get('/contact', function() {
    return view('contact');
})->name('contact');
// ROUTOVÁNÍ 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::middleware(['auth'])->group(function () {
  //  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//});

// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';
