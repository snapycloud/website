<?php

Route::get('/', function () {
    return view('app');
})->name('home');

Route::get('/documentation', function(){
	return view('doc');
})->name('documentation');

Route::get('/plans/{id}', 'Controller@getPlaneRegister')->name('plan');
