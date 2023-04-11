<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return ('Hello World');
});



Route::get('/lapor', [HomeController::class, 'lapor']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/progress', [HomeController::class, 'progress']);