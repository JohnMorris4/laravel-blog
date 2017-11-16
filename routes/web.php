<?php



//Index Route
Route::get('/', 'PostsController@index')->name('home');


//Post Routes
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

/*
 *controller => PostsController
 * 
 *Eloquent Model => Post
 * 
 * migration => create_posts_table   
 * 
 * RESTful Routing
 * 
 * Routes:
 *
 GET /posts

GET /posts/create

POST /posts

GET /posts/{id}/edit

GET /post/{id}

PATCH /posts/{id}

DELETE /posts/{id}
 * 
 */ 

