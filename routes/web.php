<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});





// READ (list all products)
Route::get('/products', [ProductController::class, 'index'])
->name('products.index');

// SHOW CREATE FORM
Route::get('/products/create', [ProductController::class, 'create'])
->name('products.create');

// STORE (insert new product)
Route::post('/products', [ProductController::class, 'store'])
->name('products.store');

// SHOW EDIT FORM
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
->name('products.edit');

// UPDATE
Route::put('/products/{id}', [ProductController::class, 'update'])
->name('products.update');

// DELETE
Route::delete('/products/{id}', [ProductController::class, 'destroy'])
->name('products.destroy');

