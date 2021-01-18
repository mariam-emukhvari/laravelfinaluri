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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'singleProduct'])->name('single.product');

Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index']);
Route::get('/dashboard/add-product', [\App\Http\Controllers\AdminController::class, 'addProductIndex'])->name('addProduct');
Route::post('/dashboard/add-product', [\App\Http\Controllers\AdminController::class, 'addProduct']);
Route::get('/dashboard/add-category', [\App\Http\Controllers\AdminController::class, 'addCategoryIndex'])->name('addCategory');
Route::post('/dashboard/add-category', [\App\Http\Controllers\AdminController::class, 'addCategory']);
