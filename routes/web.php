<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('myproducts', [ProductController::class, 'index']);
Route::delete('myproducts/{id}', [ProductController::class, 'destroy']);
Route::delete('myproductsDeleteAll', [ProductController::class, 'deleteAll']);