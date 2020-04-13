<?php

Route::get('', 'HomeController@index')->name('index');

Route::post('login', 'LoginController@login')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');
