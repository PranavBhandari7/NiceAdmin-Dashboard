<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProductController;
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

Route::get('/users', function () {
    return User::all();
});

Route::get('/products',[ProductController::class,'index']);
Route::post('/create-products',[ProductController::class,'store']);
Route::put('/update-products/{id}',[ProductController::class,'update']);
Route::delete('/delete-products/{id}',[ProductController::class,'delete']);


