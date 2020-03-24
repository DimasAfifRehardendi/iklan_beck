<?php
use Illuminate\Http\Request;
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware(['jwt.verify'])->group(function(){
    
    //user
    Route::get('user/{limit}/{offset}', "UserController@getAll");
    Route::post('user/{limit}/{offset}', "UserController@find");
    Route::delete('user/delete/{id}', "UserController@delete");
    Route::post('user/ubah', "UserController@ubah"); // masih error

    //iklan
    Route::get('iklan', 'IklanController@index');
    Route::get('iklan/{id}', 'IklanController@show');
    Route::post('iklan', 'IklanController@store');
    Route::put('iklan/{id}', 'IklanController@update');
    Route::delete('iklan/{id}', 'IklanController@destroy');
});