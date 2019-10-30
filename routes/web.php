<?php

use App\Mail\ContactMessageCreated;

Route::get('/', 'PageController@home')->name('root_path');

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PageController@about'
]);


Route::get('/test-email}', function() {
    return new ContactMessageCreated('Ngounou Youssouf', 'youssoufndounou@gmail.com', 'je suis un developpeur');
});

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

Auth::routes();
