<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\zoomController;
use App\Http\Controllers\viphamController;

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


Route::get('/', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'create']);

Route::get('/qlhoso', [registerController::class, 'store']);
Route::post('/search', [registerController::class, 'show']);

Route::post('/searchZoom', [zoomController::class, 'searchZoom']);
Route::get('/printdocx/{id}', [registerController::class, 'process']);
Route::get('/testdoct', [registerController::class, 'testdocts']);
Route::get('/zoom', [zoomController::class, 'index']);
Route::get('/qlzoom', [zoomController::class, 'show']);
Route::get('/datazoom', [zoomController::class, 'datazoom']);
Route::get('/violate', [zoomController::class, 'violate']);
Route::post('/createzoom', [zoomController::class, 'create']);

Route::post('/createVipham', [viphamController::class, 'create']);