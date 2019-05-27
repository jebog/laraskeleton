<?php


Route::middleware('auth')
    ->prefix('users')
    ->group(static function () {

        Route::get('/', 'UsersController@index')->name('index');
        Route::get('/create', 'UsersController@create')->name('create');
        Route::post('/store', 'UsersController@store')->name('store');
        Route::get('/edit/{id}', 'UsersController@edit')->name('edit');
        Route::patch('/update', 'UsersController@update')->name('update');

    });
