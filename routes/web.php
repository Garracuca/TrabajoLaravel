<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Route: get, 
    Route:post
    Route: delete, 
    Route:put
    Route: patch, 
    Route:head


    Route::<verbo>(uri,acciones: [closure | controlador])
*/

Route::resource('/fabricantes',FabricanteController::class);

Route::view('/', 'welcome');



