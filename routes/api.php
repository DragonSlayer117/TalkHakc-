<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/prueba', [App\Http\Controllers\Api\ApiController::class, 'createCall']);

Route::get('/getprueba', [App\Http\Controllers\Api\ApiController::class, 'ListCall']);

Route::post('/createprueba', [App\Http\Controllers\Api\ApiController::class, 'createRoom']);

Route::post('/joinprueba', [App\Http\Controllers\Api\ApiController::class, 'joinRoom']);
