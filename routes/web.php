<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductHistorieController;

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
    return view('layout.main');
});
Route::resource('product_histories', ProductHistorieController::class);
// Route::get('/daftar-barang', [ProductHistorieController::class, 'index']);