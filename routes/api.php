<?php

use Illuminate\Http\Request;

Route::post('register', 'LoginController@register');
Route::post('login', 'LoginController@login');

Route::middleware(['jwt.verify'])->group(function(){

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});