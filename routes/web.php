<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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




Route::get('/',[apiController::class, 'frutas'])->name('frutas');
Route::get('/familia/{family}', [apiController::class, 'familiafrutas'])->name('familia.frutas');
Route::get('/genus/{genus}', [apiController::class, 'genusfrutas'])->name('genus.frutas');
Route::get('/order/{order}', [apiController::class, 'orderfrutas'])->name('order.frutas');