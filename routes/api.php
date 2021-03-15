<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RatingValueController;

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


Route::group(['prefix' => 'admin'], function () {

    Route::post('company', [CompanyController::class, 'store']);
    Route::get('company', [CompanyController::class, 'index']);
    Route::get('company/{id}', [CompanyController::class, 'show']);
    Route::put('company/{id}', [CompanyController::class, 'update']);
    Route::delete('company/{id}', [CompanyController::class, 'destroy']);

    Route::post('rating-value', [RatingValueController::class, 'store']);
    Route::get('rating-value', [RatingValueController::class, 'index']);
    Route::get('rating-value/{id}', [RatingValueController::class, 'show']);
    Route::put('rating-value/{id}', [RatingValueController::class, 'update']);
    Route::delete('rating-value/{id}', [RatingValueController::class, 'destroy']);
});
