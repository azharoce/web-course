<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PermissionsController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('register', [AuthController::class, 'register']);
// Route::get('product', [ProductController::class, 'sendSlack']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'users'
], function ($router) {
    Route::get('data', [MemberController::class, 'data']);
});

Route::group([
    // 'middleware' => 'jwt.verify',
    'prefix' => 'role'
], function ($router) {
    Route::get('data', [RoleController::class, 'data']);
    Route::post('create', [RoleController::class, 'store']);
    Route::get('insert', [RoleController::class, 'insertLoop']);
});

Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'permissions'
], function ($router) {
    Route::get('data', [PermissionsController::class, 'index']);
    Route::post('create', [PermissionsController::class, 'store']);
});

Route::any('{any}', function () {
    return response()->json([
        'status' => 'error',
        'message' => 'Resource not found'
    ], 404);
})->where('any', '.*');
