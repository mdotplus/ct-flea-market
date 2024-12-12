<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MypageController;
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

Route::middleware(['verified', 'auth'])->group(function () {
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'buy'])->name('items.purchase');
    Route::get('/success', [ItemController::class, 'inde'])->name('items.success');
    Route::get('/cancel', [ItemController::class, 'index'])->name('items.cancel');

    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'change'])->name('address.change');
    Route::post('/purchase/address/update/{item_id}', [PurchaseController::class, 'update'])->name('address.update');

    Route::get('/sell', [SellController::class, 'edit'])->name('items.sell');
    Route::post('/sell/create', [SellController::class, 'create'])->name('items.create');

    Route::get('/mypage', [MypageController::class, 'buy'])->name('mypage');
    Route::get('/mypage/profile', [MypageController::class, 'edit'])->name('mypage.edit');
    Route::post('/mypage/profile/update', [MypageController::class, 'update'])->name('mypage.update');
});

Route::get('/email/verify', function () {
    return view('auth.verify_email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
