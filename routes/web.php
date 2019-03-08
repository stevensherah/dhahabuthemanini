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
//     return view('welcome');
// });

Route::GET('/', 'PagesController@getIndex');
Route::GET('/about', 'PagesController@getAbout');
Route::GET('/blog', 'PagesController@getBlog');


// POSTS
// Route::GET('/posts', 'PostsController@getIndex');
// Route::resource('/create', 'PostsController@getCreate');
// Route::GET('/add', 'PostsController@getShow');
// Route::GET('/posts', 'PostsController@getIndex');




Route::POST('/', 'SubscribeController@store');
Route::post('/submit', 'MessagesController@submit');


Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('Admin');
Route::GET('/icons', 'PagesController@getIcons')->middleware('auth');
Route::GET('/user', 'PagesController@getUser')->middleware('auth');
Route::GET('/messages', 'messagesController@getMessages')->middleware('auth');



Route::get('/subscribers', 'SubscribeController@getSubscribes')->middleware('auth');

Route::resource('tasks', 'TasksController');
Route::resource('admin/blogs', 'Admin\\blogsController');