<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('home');
Route::post('/store-bid/{id}', [App\Http\Controllers\BidController::class, 'create'])->name('store-bid');



Route::group( ['middleware' => ['auth']
                ], function () { 
    Route::get('dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');

    Route::get('/add_product', [App\Http\Controllers\AuctionProductController::class, 'index'])->name('addproduct');
    Route::post('/add_product', [App\Http\Controllers\AuctionProductController::class, 'store'])->name('store.product');
    Route::get('/show_products', [App\Http\Controllers\AuctionProductController::class, 'showproducts'])->name('showproducts');
    Route::get('/view_product/{id}', [App\Http\Controllers\AuctionProductController::class, 'show'])->name('viewproduct');
    
    


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
