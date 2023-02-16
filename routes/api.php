<?php

use App\Http\Controllers\CategoryEquipmentController;
use App\Http\Controllers\CategoryOrderController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusEquipmentController;
use App\Http\Controllers\SubcategoryOrderController;
use App\Http\Controllers\UserController;
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
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

Route::apiResource('/categoryEquipment', CategoryEquipmentController::class, ['only' => ['index', 'store']]);
Route::prefix('categoryEquipment')->group(function () {
    Route::delete('/{id}', [CategoryEquipmentController::class, 'destroy']);
    Route::post('/{id}', [CategoryEquipmentController::class, 'update']);
});
Route::apiResource('/statusEquipment', StatusEquipmentController::class, ['only' => ['index', 'store']]);
Route::prefix('statusEquipment')->group(function () {
    Route::delete('/{id}', [StatusEquipmentController::class, 'destroy']);
    Route::post('/{id}', [StatusEquipmentController::class, 'update']);
});
Route::apiResource('/office', OfficeController::class, ['only' => ['index', 'store']]);
Route::prefix('office')->group(function () {
    Route::delete('/{id}', [OfficeController::class, 'destroy']);
    Route::post('/{id}', [OfficeController::class, 'update']);
});
Route::apiResource('/department', DepartmentController::class, ['only' => ['index', 'store']]);
Route::prefix('department')->group(function () {
    Route::delete('/{id}', [DepartmentController::class, 'destroy']);
    Route::post('/{id}', [DepartmentController::class, 'update']);
});
Route::apiResource('/categoryOrder', CategoryOrderController::class, ['only' => ['index', 'store']]);
Route::prefix('categoryOrder')->group(function () {
    Route::delete('/{id}', [CategoryOrderController::class, 'destroy']);
    Route::post('/{id}', [CategoryOrderController::class, 'update']);
});
Route::apiResource('/subcategoryOrder', SubcategoryOrderController::class, ['only' => ['index', 'store']]);
Route::prefix('subcategoryOrder')->group(function () {
    Route::delete('/{id}', [SubcategoryOrderController::class, 'destroy']);
    Route::post('/{id}', [SubcategoryOrderController::class, 'update']);
});
Route::apiResource('/order', OrderController::class, ['only' => ['index', 'store']]);
Route::prefix('order')->group(function () {
    Route::patch('/{order}/change_status', [OrderController::class, 'changeStatus']);
    Route::post('/{order}/addPerformer/{performer}', [OrderController::class, 'addPerformer']);
    Route::get('/{order}', [OrderController::class, 'show']);
});
