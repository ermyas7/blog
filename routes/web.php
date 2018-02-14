<?php
Route::get('/','PostsController@index')->name('home');
Route::get('posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('posts/{post}','PostsController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/registor' ,'RegistrationController@create');
Route::post('/registor' , 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
