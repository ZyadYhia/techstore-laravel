<?php

use App\Http\Controllers\web\CatController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\ProductController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('/cats/show/{id}',[CatController::class, 'show']);

Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/show/{product}',[ProductController::class, 'show']);
