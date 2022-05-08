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
Route::post('/store-bid', [App\Http\Controllers\BidController::class, 'create'])->name('store-bid');

Route::post('get-token', [App\Http\Controllers\MPESAController::class, 'getAccessToken']);
Route::post('register-urls', [App\Http\Controllers\MPESAController::class, 'registerURLS']);
Route::post('api/validation', [App\Http\Controllers\MPESAResponsesController::class, 'validation']);
Route::post('api/confirmation', [App\Http\Controllers\MPESAResponsesController::class, 'confirmation']);

Route::post('customerMpesaSTKPush', [App\Http\Controllers\MPESAController::class, 'stkPush'])->name('stkpush');
Route::get('simulateb2c', [App\Http\Controllers\MPESAController::class, 'b2cRequest'])->name('b2cRequest');

Route::post('stkpushcallback', [App\Http\Controllers\MPESAResponsesController::class, 'stkPush']);
Route::post('api/b2ccallback', [App\Http\Controllers\MPESAResponsesController::class, 'b2ccallback']);
Route::post('api/b2ctimeout', [App\Http\Controllers\MPESAResponsesController::class, 'b2ctimeout']);




/* Backend routes */
Route::group( ['middleware' => ['auth']
                ], function () { 
    Route::get('dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');

    Route::get('/add_product', [App\Http\Controllers\AuctionProductController::class, 'index'])->name('addproduct');
    Route::post('/add_product', [App\Http\Controllers\AuctionProductController::class, 'store'])->name('store.product');
    Route::get('/show_products', [App\Http\Controllers\AuctionProductController::class, 'showproducts'])->name('showproducts');
    Route::get('/view_product/{id}', [App\Http\Controllers\AuctionProductController::class, 'show'])->name('viewproduct');
    Route::get('/view-bids', [App\Http\Controllers\BidController::class, 'index'])->name('view.bids');
    Route::get('/addfaqs', [App\Http\Controllers\FAQModelController::class, 'create'])->name('add.faq');
    Route::get('/addimages', [App\Http\Controllers\GalleryController::class, 'create'])->name('add.images');
    
    


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
