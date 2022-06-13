<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// use Illuminate\Http\Request;
// use App\Models\User;

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
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/products', [IndexController::class, 'products'])->name('products');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contacts', [IndexController::class, 'contacts'])->name('contacts');


/**
 * Areas restritas
 */
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('/requests', [UserController::class, 'requests'])->name('user.requests');
    });

    Route::prefix('/admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
        Route::get('/refunds', [AdminController::class, 'refunds'])->name('admin.refunds');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    });
});
