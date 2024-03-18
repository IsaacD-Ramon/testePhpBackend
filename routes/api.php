<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\UsersController;
use App\Http\Middleware\API\v1\ProtectedRouteAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
return response()->json(['pai_name' => 'laravel-jwt', 'api_version' => '1.0.0']);
});

Route::prefix('v1')->group(function (){

    Route::post('login', [AuthController::class,'login']);

    Route::post('usuario', [UsersController::class, 'create']);

    Route::middleware([ProtectedRouteAuth::class])->group(function(){
        Route::post('me', [AuthController::class,'me']);
        Route::post('logout', [AuthController::class,'logout']);
    });

});

