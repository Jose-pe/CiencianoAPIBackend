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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('partidos', PartidoController::class);
Route::get('todospartidos', [App\Http\Controllers\PartidoController::class, 'allmatchs']);
Route::get('statstemporada/{temporada}', [App\Http\Controllers\PartidoController::class, 'statstemporada']);
Route::get('ultimopartido', [App\Http\Controllers\PartidoController::class, 'lastmatch']);
Route::put('creargoles', [App\Http\Controllers\GolesController::class, 'store']);
Route::get('listargoles', [App\Http\Controllers\GolesController::class, 'index']);
route::get('golespartido/{id_partido}',  [App\Http\Controllers\GolesController::class, 'goles_partido']);