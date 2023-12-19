<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|

*/
Route::get('/users', [UserController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/merchandises', [MerchandiseController::class, 'index']);
Route::post('/merchandises/create',[MerchandiseController::class,'store']);
Route::get('/customers/{customer}', [CustomerController::class, 'show']);
Route::get('/merchandises/{merchandise}', [MerchandiseController::class, 'show']);
Route::get('/suppliers', [SupplierController::class, 'index']);
