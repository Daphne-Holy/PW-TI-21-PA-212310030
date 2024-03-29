<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;


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
Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/identity', [ProfileController::class, 'indentity']);
Route::get('/profile/family', [ProfileController::class, 'family']);

Route::controller(ProductsController::class)->group(function (){
    Route::get('/master-data/products', 'index')->name('m_products');
    Route::post('/master-data/products', 'store');
    Route::get('/master-data/products/{id}', 'show')->name('m_products_detail');
    Route::get('/master-data/products/edit/{id}', 'edit')->name('m_products_edit');
    Route::get('/master-data/products/remove/{id}', 'destroy')->name('m_products_remove');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/praktikum-6/losers', 'index')->name('m_user');
    Route::post('/praktikum-6/losers', 'store');
    Route::get('/praktikum-6/losers/edit/{id}', 'edit')->name('m_user_edit');
    Route::get('/praktikum-6/losers/remove/{id}', 'destroy')->name('m_user_remove');
});