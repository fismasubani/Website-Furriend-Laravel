<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Livewire\HomeComponent::class)->name('home.index');
Route::get('/shop', App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/product/{slug}', App\Http\Livewire\DetailsComponent::class)->name('product.details');
Route::get('/cart', App\Http\Livewire\CartComponent::class)->name('shop.cart');
Route::get('/checkout', App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard', App\Http\Livewire\User\UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', App\Http\Livewire\Admin\AdminDashboardComponent::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';