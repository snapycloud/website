<?php

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/documentation', function(){
	return view('doc');
})->name('documentation');

Route::get('/plans/{id}', 'Controller@getPlaneRegister')->name('plan');
Route::post('/plans/register', 'Controller@postPlaneRegister')->name('register');


Route::get('/login', 'Controller@getPlaneRegister')->name('login');
Route::get('/terms', 'Controller@getPlaneRegister')->name('terms');
