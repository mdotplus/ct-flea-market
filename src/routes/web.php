<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SellController;

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

Route::get('/', [ItemController::class, 'index'])->name('home');
Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('items.detail');

Route::get('/purchase/{item_id}', [PurchaseController::class, 'buy'])->name('items.purchase');
Route::get('/success', [ItemController::class, 'inde'])->name('items.success');
Route::get('/cancel', [ItemController::class, 'index'])->name('items.cancel');

Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'change'])->name('address.change');
Route::post('/purchase/address/update/{item_id}', [PurchaseController::class, 'update'])->name('address.update');

Route::get('/sell', [SellController::class, 'edit'])->name('items.sell');
Route::post('/sell/create', [SellController::class, 'create'])->name('items.create');
