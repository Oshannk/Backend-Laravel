<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',[UserController::class, 'index']);

Route::get('/users/{id}',[UserController::class, 'show']);

Route::post('/users',[UserController::class, 'store']);

Route::patch('/users/{id}',[UserController::class, 'update']);

Route::delete('/users/{id}',[UserController::class, 'delete']);