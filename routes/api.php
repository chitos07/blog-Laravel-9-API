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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


 //Category Route

Route::get('/category',[\App\Http\Controllers\CategoryController::class,'index']);
Route::post('/category',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('/category/{category}',[\App\Http\Controllers\CategoryController::class,'show']);
Route::put('/category/{category}',[\App\Http\Controllers\CategoryController::class,'update']);
Route::delete('/category/{category}',[\App\Http\Controllers\CategoryController::class,'destroy']);
