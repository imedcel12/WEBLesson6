<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SongsController;

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

Route::get('songs-api', [SongsController::class, 'songsApi']);

Route::post('login', [SongsController::class, 'login']);
Route::post('register', [SongsController::class, 'register']);
Route::post('reset-password', [SongsController::class, 'resetPassword']);