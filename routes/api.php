<?php

use App\Http\Controllers\apii\v1\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/prueba',[App\Http\Controllers\apii\v1\ComputerController::class ,'computersObservations']);
//ruta crud de usuarios

Route::apiResource('v1/users'
,App\Http\Controllers\apii\v1\UserController::class);
Route::apiResource('v1/computers'
,App\Http\Controllers\apii\v1\ComputerController::class);

