<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    
    /*
    Route::get('/', function () {
    return view('welcome');
    });
    /*
    Route::get('post', [
       'as' => 'get_post',
       'uses' => 'ForumController@getPost'
    ]);
    Route::post('post', [
       'as' => 'post_post',
       'uses' => 'ForumController@postPost'
    ]);
     */
    Route::get('/', 'PagesController@index');
    Route::get('/post', 'ForumController@getPost');
    Route::post('/post', 'ForumController@postPost');
    Route::get('/search', 'SearchController@index');
    Route::get('/register', 'Auth\AuthController@getCountries');
    Route::get('/post/(:any)/edit', 'ForumController@getEdit');
});

