<?php

Route::group([
    'middleware' => 'api',
    'prefix'     => 'auth',
    'namespace' => 'Auth',
], function ($router) {
    Route::post('signin', 'SignInController');
    // Route::patch('update', 'AuthController@update');
    // Route::post('register', 'AuthController@register');
    Route::post('signout', 'SignOutController');
    // Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'MeController');
});

Route::group([
    'middleware' => 'api',
    // 'prefix'     => 'auth',
    // 'namespace' => 'Auth',
], function ($router) {
	Route::get('/customers', 'CustomerController@search');
	Route::get('/products', 'ProductController@search');

	Route::resource('/invoices', 'InvoiceController');
});
