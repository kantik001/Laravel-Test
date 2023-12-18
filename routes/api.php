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

Route::get('workers', [\App\Http\Controllers\API\WorkerController::class, 'index']);
Route::get('workers/{worker}', [\App\Http\Controllers\API\WorkerController::class, 'show']);
Route::post('workers', [\App\Http\Controllers\API\WorkerController::class, 'store']);
Route::patch('workers/{worker}', [\App\Http\Controllers\API\WorkerController::class, 'update']);
Route::delete('workers/{worker}', [\App\Http\Controllers\API\WorkerController::class, 'destroy']);
