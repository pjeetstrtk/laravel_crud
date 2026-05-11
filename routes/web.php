<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});





// READ (list all products)
Route::get('/products', [ProductController::class, 'index']);

// SHOW CREATE FORM
Route::get('/products/create', [ProductController::class, 'create']);

// STORE (insert new product)
Route::post('/products', [ProductController::class, 'store']);

// SHOW EDIT FORM
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// UPDATE
Route::post('/products/{id}', [ProductController::class, 'update']);

// DELETE
Route::delete('/products/{id}', [ProductController::class, 'destroy']);