<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/view_catagory', [AdminController::class, 'view_catagory']); // View Catagory
Route::post('/add_catagory', [AdminController::class, 'add_catagory']);// Add Catagory
Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);// Delete Catagory

Route::get('/view_product', [AdminController::class, 'view_product']); // View Product
Route::post('/add_product', [AdminController::class, 'add_product']);// Add Product
Route::get('/show_product', [AdminController::class, 'show_product']); //Show all product in Show Product page.
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']); // Delete Product
Route::get('/update_product/{id}', [AdminController::class, 'update_product']); // Edit or Update Product
Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']); // Edit or Update Product

Route::get('/product_details/{id}', [HomeController::class, 'product_details']);; // Product Details
Route::get('/add_to_cart/{id}', [HomeController::class, 'add_to_cart']); // Add to Cart