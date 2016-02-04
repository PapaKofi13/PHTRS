<?php


Route::group(['middleware' => 'web'], function () {


    Route::get('/', function () {
        return view('home');
    });

//    Route::get('potholes/create', 'PotholesController@create');

    Route::post('potholes', 'PotholesController@store');
});

