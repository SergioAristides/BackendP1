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

//ruta crud de usuarios
Route::get('/v1/users/computers',
[App\Http\Controllers\apii\v1\UserController::class ,'usersComputers']);
Route::get('/v1/users/observations',[
    App\Http\Controllers\apii\v1\UserController::class ,'userObservation']);

Route::apiResource('v1/users'
,App\Http\Controllers\apii\v1\UserController::class);

Route::get('/v1/computers/observations',
[App\Http\Controllers\apii\v1\ComputerController::class ,'computersObservations']);
Route::apiResource('v1/computers'
,App\Http\Controllers\apii\v1\ComputerController::class);


Route::apiResource('v1/observations'
,App\Http\Controllers\apii\v1\ObservationController::class);

Route::get('/v1/categories/observations',[App\Http\Controllers\apii\v1\CategoryController::class,'categoriesObservations']);
Route::apiResource('v1/categories'
,App\Http\Controllers\apii\v1\CategoryController::class);

