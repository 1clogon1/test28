<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Бренд
Route::get('/brand', [BrandController::class,'index']);

//Модель
Route::get('/sample', [SampleController::class,'index']);

//Машины
Route::get('/car', [CarController::class,'index']);
Route::post('/car/create', [CarController::class,'store']);
Route::delete('/car/delete/{id}', [CarController::class,'destroy']);
Route::put('/car/update/{id}', [CarController::class,'update']);
