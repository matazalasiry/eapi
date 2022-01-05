<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::APIResource('/products','ProductController');
Route::group(['prefix'=>'products'],function(){
    Route::APIResource('/{products}/reviews','ReviewController');
});
