<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

<<<<<<< HEAD
Route::get('/', function () {return view('home');});

Route::resource('products', ProductController::class);
=======
Route::get('/', function () {return view('welcome');});

Route::resource('products', ProductController::class);
>>>>>>> eabb3b0dfe0622192da16e062a9695265583ac07
