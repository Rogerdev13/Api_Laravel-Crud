<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/articulos', [ArticlesController::class,'index']); //muestra todos los registros
Route::post('/articulos', [ArticlesController::class,'store']); // crea un registro
Route::put('/articulos/{id}', [ArticlesController::class,'update']); // actualiza un registro
Route::delete('/articulos/{id}', [ArticlesController::class,'destroy']); //elimina un registro
