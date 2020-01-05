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

//Route::get('/', function () {
//
//        return view('welcome');
//
//});
Route::get('/'          , ['as' => 'index' , 'uses' => 'HomePageController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/posts', 'PostsController@index');

//前台
Route::get('posts', ['as' => 'posts.index', 'uses' =>
    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' =>
    'PostsController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' =>
    'PostsController@contact']);

// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('/posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('/posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::get('/posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);
    Route::post('/posts',['as'=>'admin.posts.store','uses'=> 'AdminPostsController@store']);
    Route::patch('/posts/{id}',['as'=>'admin.posts.update','uses'=>'AdminPostsController@update']);
    Route::delete('/posts/{id}',['as'=>'admin.posts.destroy','uses'=>'AdminPostsController@destroy']);    

    Route::get('/account'          , ['as' => 'admin.posts.account' , 'uses' => 'AccountController@index']);
    Route::post('/account/create'  , ['as' => 'admin.account.create' , 'uses' => 'AccountController@create']);
    Route::post('/account/update'  , ['as' => 'admin.account.update' , 'uses' => 'AccountController@update']);
    Route::post('/account/destroy'  , ['as' => 'admin.account.destroy' , 'uses' => 'AccountController@destroy']);
});
