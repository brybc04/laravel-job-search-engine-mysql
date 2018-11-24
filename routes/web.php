<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/joblists', function () {
//     return view('pages.joblist');
// });

// Route::get('/jobposts', function () {
//     return view('pages.jobposts');
// });

// Route::get('/createcv', function () {
//     return view('pages.createCV');
// });

// //Route::resource('posts', 'PostsController');

Route::get('/', 'PagesController@home');
Route::get('/createcv', 'PagesController@createcv');
Route::get('/jobposts', 'PagesController@jobposts');
Route::get('/createjob', 'PagesController@createjob');
Route::get('/post', 'PagesController@index');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/mycv', 'PostsController@index');

Route::post('/edit/{user_id}', 'PostsController@update');

Route::post('/edit', 'PostsController@edit');


Route::post('/createcv', 'PostsController@store');


Route::post('/edit', 'UpdateController@update');

Route::resource('posts', 'CVController');

Route::get('users/{user_id}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);

Route::patch('users/{user}', ['as' => 'home', 'uses' => 'UserController@update']);

Route::get('/{searchKey}'  , 'PagesController@search' );
Route::post('/{searchKey}' , 'PagesController@search'  );

//Auth::routes(['verify' => true]);

//  Route::get('/mycvs', 'CVcontroller@store');
//  Route::post('/mycvs', 'CVcontroller@store');


//Route::patch('users/{user_id}', 'UserController@update');

// Route::get('users/{user_id}', 'UserController@edit');
