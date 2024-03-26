<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', function () {
    return view('admin.products');
});

// Route::controller(ProductController::class)->group(function () {
//     // Route::get('/add-product', 'create');
//     Route::get('/add-product', [ProductController::class, 'create'])->name('admin.addproduct');
//     Route::post('/product', [ProductController::class, 'store'])->name('admin.products');
// });

Route::controller(ProductController::class)->group(function () { 
    Route::post('/addproduct', 'addproduct'); # send data to server
    Route::get('/product', 'create'); # take data from server

    Route::get('/detailproduct', 'detailproduct'); # read data
    Route::get('/product', 'edit'); 

    Route::put('/updateproduct', 'updateproduct'); # send data to server for update
    Route::delete('/product', 'destroy');


});

require __DIR__.'/auth.php';
