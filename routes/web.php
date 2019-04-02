<?php

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/documentation', function(){
	return view('doc');
})->name('documentation');

Route::post('/', 'Controller@getPayment');
Route::get('/plans/{id}', 'Controller@getPlaneRegister')->name('plan');
Route::post('/plans/register', 'Controller@postPlaneRegister')->name('register');
Route::post('/plans/register/payment/{id}', 'Controller@postPayment')->name('payment');


Route::get('/login', 'Controller@getLogin')->name('login');
Route::get('/terms', 'Controller@getPlaneRegister')->name('terms');
