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

// Route::GET('/blog', 'PagesController@getBlog');
// Route::GET('/blog-post', 'PagesController@getBlogpost');


//BLOGS ROUTES

        Route::resource('posts', 'PostsController');


        Route::resource('blog', 'BlogsController');

        // Add Comment to a post
        Route::post('/comment/store', 'CommentController@store')->name('comment.add'); 


        // Reply to a Comment of a post
        Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


        Route::get('/blog/tags/{tag}', 'TagsController@index');

//BLOGS ROUTES


// POSTS
// Route::GET('/posts', 'PostsController@getIndex');
// Route::resource('/create', 'PostsController@getCreate');
// Route::GET('/add', 'PostsController@getShow');
// Route::GET('/posts', 'PostsController@getIndex');


Route::GET('/subscribe', 'SubscribeController@index');


Route::POST('/', 'SubscribeController@store');
Route::post('/submit', 'MessagesController@submit');




Auth::routes();

Route::get('/admin', 'AdminController@index')->name('Admin');
Route::GET('/icons', 'PagesController@getIcons')->middleware('auth');
Route::GET('/user', 'PagesController@getUser')->middleware('auth');
Route::GET('/filemanager', 'PagesController@getFilemanager')->middleware('auth');
Route::GET('/messages', 'messagesController@getMessages')->middleware('auth');
Route::GET('/users', 'usersController@getUsers')->middleware('auth');




Route::get('/subscribers', 'SubscribeController@getSubscribes')->middleware('auth');

Route::resource('tasks', 'TasksController');
Route::resource('admin/blogs', 'Admin\\blogsController');



Route::resource('admin/products', 'ProductsController');

Route::get('/product/{product}', 'ProductsfrontendController@getShow');


Route::resource('admin/events', 'EventsController');

Route::resource('admin/gallery', 'galleryController');

Route::resource('/gallery', 'GallariesController');
