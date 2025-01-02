<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\Cart;
use App\Livewire\singleProdTest;
use App\Livewire\shopTest;
use App\Livewire\Shop;
use App\Models\products;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/billing",[BillingController::class, "index"])
->middleware("auth")
->name("billings.index");

Route::get("/cart",[Cart::class, "index"])
->middleware("auth")
->name("cart.index");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        $products = Products::where('is_visible', true)->orderBy('created_at', 'desc')->take(8)->get();
        return view('dashboard', ['products' => $products]);
    })->name('dashboard');

    Route::get('/products', shopTest::class)->name('products');
    Route::get('/tienda', Shop::class)->name('tienda');
    Route::get('/product/{slug}', singleProdTest::class)->name('single_product');
});
require __DIR__.'/socialstream.php';