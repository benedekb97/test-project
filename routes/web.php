<?php

Route::get('', 'HomeController@index')->name('index');

Route::post('login', 'LoginController@login')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('admin', 'HomeController@admin')->name('admin');
    Route::get('editor', 'HomeController@editor')->name('editor')->middleware('permissions:view-editor');
    Route::get('user', 'HomeController@user')->name('user')->middleware('permissions:view-user');
});

