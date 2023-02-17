<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('aboutUs');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/where-to-find', [MainController::class, 'whereToFind'])->name('whereToFind');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/user', [MainController::class, 'user'])->name('user');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
Route::post('/product', [ProductController::class, 'store'])->name('product.create');
Route::get('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/admin', [MainController::class, 'admin'])->name('admin');
