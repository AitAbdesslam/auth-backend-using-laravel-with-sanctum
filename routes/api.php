<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::post('register',[AuthController::class,"register"]);
Route::post('login',[AuthController::class,"login"]);


Route::middleware(['auth:sanctum'])->group(function () {
  Route::get('user',[AuthController::class,"user"]);  
  Route::post('logout',[AuthController::class,"logout"]);  
});