<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Add your API routes here. Example protected route below uses Sanctum.
|
*/


Route::prefix('api')->group(function () {
    Route::get('/ping', fn() => ['pong' => true]);
    Route::middleware('auth:sanctum')->get('/me', fn(Request $r) => $r->user());
});
