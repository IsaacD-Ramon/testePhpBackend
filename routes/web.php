<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return response()->json(['pai_name' => 'laravel-jwt', 'api_version' => '1.0.0']);
    });
    
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    
