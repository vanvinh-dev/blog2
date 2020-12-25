<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

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