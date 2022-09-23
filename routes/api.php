<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\PasswordRestController;

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


Route::get('/',function (){
   return 'WWelcome';
});

Route::post('/login',[\App\Http\Controllers\Auth\AuthController::class,'Login']);
Route::post('/register',[\App\Http\Controllers\Auth\AuthController::class,'register']);

Route::post('/forgot-password',[PasswordRestController::class,'SendLink'])->middleware('guest')->name('password.email');

Route::post('/reset-password/{token}', [PasswordRestController::class,'PasswordRest'])->middleware('guest')->name('password.reset');




 Route::group(['middleware' => ['auth:sanctum']],function(){

     //Email Verify

     Route::get('/email/verify/{id}/{hash}',[\App\Http\Controllers\Auth\EmailVerificationController::class,'verify'])
         ->middleware(['signed'])->name('verification.verify');

     //Category Routes
     Route::get('/category',[\App\Http\Controllers\CategoryController::class,'index']);
     Route::post('/category',[\App\Http\Controllers\CategoryController::class,'store']);
     Route::get('/category/{category}',[\App\Http\Controllers\CategoryController::class,'show']);
     Route::put('/category/{category}',[\App\Http\Controllers\CategoryController::class,'update']);
     Route::delete('/category/{category}',[\App\Http\Controllers\CategoryController::class,'destroy']);

     //Post Route

     Route::get('/post',[\App\Http\Controllers\PostController::class,'index']);
     Route::post('/post',[\App\Http\Controllers\PostController::class,'store']);
     Route::get('/post/{post}',[\App\Http\Controllers\PostController::class,'show']);
     Route::put('/post/{post}',[\App\Http\Controllers\PostController::class,'update']);
     Route::delete('/post/{post}',[\App\Http\Controllers\PostController::class,'destroy']);
 });





