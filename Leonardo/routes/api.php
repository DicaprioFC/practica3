<?php

use App\Http\Controllers\polerasController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mostrarpoleras',[polerasController::class,'listapoleras']);

Route::post('/savepoleras',[polerasController::class,'guardarpoleras']);

Route::get('/findpoleras/{codigo_poleras}',[polerasController::class,'buscarpoleras']);

Route::put('/updatepoleras/{codigo_poleras}',[polerasController::class,'actualizarpoleras']);

Route::delete('/deletepoleras/{codigo_poleras}',[polerasController::class, 'borrarpoleras']);