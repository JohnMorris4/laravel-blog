<?php



//Index Route
Route::get('/', 'PostsController@index');


//Post Routes
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');


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

