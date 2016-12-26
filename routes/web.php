<?php
////////// WEB ROUTES //////////
Route::resource('posts', 'PostController');
Route::get('/', 'PageController@getHome');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('blog/{slug}', [ 'uses' => 'BlogController@getSinglePost'])->where('slug', '[\w\d\-\_]+', 'as' => 'blog.post');
Route::get('about', 'PageController@getAbout');
Route::get('portfolio', 'PageController@getPortfolio');
Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');
