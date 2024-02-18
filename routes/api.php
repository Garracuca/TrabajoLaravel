<?php

use App\Http\Controllers\Api\BookApiController;
use App\Http\Controllers\Api\StudyApiController;
use App\Http\Controllers\Api\UserApiController;
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

// Route::resource('/books',BookApiController::class)->except(['create','edit']);
// // Route::apiResource('/studies',StudyApiController::class);
// Route::apiResource('/users',UserApiController::class);
// Route::get('/info', function () {


    
// $data=[
// "status"=>"ok",
// "message"=>"Estoy en el index"
// ];
// return response()->json($data,200) ;
// });


// Route::fallback(function(){
//     return response()->json(['error'=> 'recurso no encontrando'],400);
//     });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
