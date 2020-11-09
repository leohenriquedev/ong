<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\OngController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/clients', [ClientController::class, 'index']);
Route::post('/clients/new', [ClientController::class, 'store']);

Route::get('/providers', [ProviderController::class, 'index']);
Route::post('/providers/new', [ProviderController::class, 'store']);

Route::get('/ong/reports', [OngController::class, 'reports']);
