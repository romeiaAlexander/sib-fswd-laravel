<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');
