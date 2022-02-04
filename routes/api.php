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

Route::get('/todo', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todo/{id}', [App\Http\Controllers\TodoController::class, 'show']);
Route::post('/todo/add', [App\Http\Controllers\TodoController::class, 'store']);
Route::post('/todo/{id}', [App\Http\Controllers\TodoController::class, 'update']);
Route::delete('/todo/{id}', [App\Http\Controllers\TodoController::class, 'destroy']);

