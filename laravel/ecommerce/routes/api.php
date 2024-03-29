<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
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

Route::post('/users/register', [AuthController::class, 'register']);

Route::get('hello-world', function() {
    return response()->json([
        'status' => 200,
        'message' => 'OK'
    ], 200);
});

Route::group(['prefix' => 'v1'], function () {

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::resource('/products', ProductController::class);
    });

    Route::get('/projects', [ProjectController::class, 'index']);

    Route::post('/projects', [ProjectController::class, 'store']);
});

