<?php

Route::get('/welcome', 'Acme\LaravelApi\Http\Controllers\WelcomeController@index')->middleware('web');
