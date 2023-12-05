<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SecurityAuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', [UsersController::class, 'index']);
    Route::post('/users', [UsersController::class, 'store']);
    Route::put('/users/{$id}', [UsersController::class, 'update']);
    Route::delete('/users/{$id}', [UsersController::class, 'destroy']);

    Route::get('/stores', [StoresController::class, 'index']);
    Route::post('/stores', [StoresController::class, 'store']);
    Route::put('/stores/{$id}', [StoresController::class, 'update']);
    Route::delete('/stores/{$id}', [StoresController::class, 'destroy']);

    Route::get('/products', [ProductsController::class, 'index']);
    Route::post('/productos', [ProductsController::class, 'store']);
    Route::put('/products/{$id}', [ProductsController::class, 'update']);
    Route::delete('/products/{$id}', [ProductsController::class, 'destroy']);

    Route::get('/employees', [EmployeesController::class, 'index']);
    Route::post('/employees', [EmployeesController::class, 'store']);
    Route::put('/employees/{$id}', [EmployeesController::class, 'update']);
    Route::delete('/employees/{$id}', [EmployeesController::class, 'destroy']);

    Route::get('/addresses', [AddressesControllerr::class, 'index']);
    Route::post('/addresses', [AddressesController::class, 'store']);
    Route::put('/addresses/{$id}', [AddressesController::class, 'update']);
    Route::delete('/addresses/{$id}', [AddressesController::class, 'destroy']);

    Route::get('/carrito', [carritoControllerr::class, 'index']);
    Route::post('/carrito', [carritoControllerr::class, 'store']);
    Route::put('/carrito/{$id}', [carritoControllerr::class, 'update']);
    Route::delete('/carrito/{$id}', [carritoControllerr::class, 'destroy']);
});

Route::post('/login', [SecurityAuthController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);
Route::post('/carrito', [carritoController::class, 'carrito']);

