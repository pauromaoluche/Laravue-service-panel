<?php

use App\Http\Controllers\AtendimentosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\SetorController;
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

Route::post('login',[AuthController::class, 'login']);

Route::resource('users', UserController::class);

Route::get('usersAtend',[UserController::class, 'user_atends']);

Route::resource('atend', AtendimentosController::class);

Route::resource('prov', ProvedorController::class);

Route::resource('setors', SetorController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
