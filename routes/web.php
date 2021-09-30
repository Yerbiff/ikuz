<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeworderController;
use App\Http\Controllers\NewsletterController;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/zlecenia', [NeworderController::class,'getOrder']
)->name('zlecenia');
Route::middleware(['auth:sanctum', 'verified'])->get('/new-order', function () {
    return view('new-order');
})->name('new-order');
Route::post('/',[NewsletterController::class,'newEmail']);
Route::post('new-order',[NeworderController::class,'newOrder']);
Route::get('delete/{id}',[NeworderController::class,'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/shop', ShopComponent::class)->name('shop');
Route::middleware(['auth:sanctum', 'verified'])->get('/cart', CartComponent::class)->name('cart');
Route::middleware(['auth:sanctum', 'verified'])->get('/checkout', CheckoutComponent::class)->name('checkout');
//Route::get('edit/{id}',[NeworderController::class,'edit']);
//Route::middleware(['auth:sanctum', 'verified'])->get('/new-order', [NeworderController::class,'index'])->name('new-order');
