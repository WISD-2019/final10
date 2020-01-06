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
Route::post('/about', 'ReservationController@index');
//Route::post('/post','ResroomController@index');
Route::get('/contact','ResroomController@index');
Route::POST('/welcome','CustomerController@index');

//前台
Route::get('posts', ['as' => 'posts.index', 'uses' =>
    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'ResroomController@index']);
Route::get('about', ['as' => 'posts.about', 'uses' =>
    'PostsController@about']);
//Route::get('contact', ['as' => 'posts.contact', 'uses' =>
//    'PostsController@contact']);

// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);

    Route::get('/posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('/posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::get('/posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);
    Route::post('/posts',['as'=>'admin.posts.store','uses'=> 'AdminPostsController@store']);
    Route::patch('/posts/{id}',['as'=>'admin.posts.update','uses'=>'AdminPostsController@update']);
    Route::delete('/posts/{id}',['as'=>'admin.posts.destroy','uses'=>'AdminPostsController@destroy']);

    Route::get('/account'          , ['as' => 'admin.posts.account' , 'uses' => 'AdminAccountController@index']);
    Route::post('/account/create'  , ['as' => 'admin.account.create' , 'uses' => 'AdminAccountController@create']);
    Route::post('/account/update'  , ['as' => 'admin.account.update' , 'uses' => 'AdminAccountController@update']);
    Route::post('/account/destroy' , ['as' => 'admin.account.destroy' , 'uses' => 'AdminAccountController@destroy']);

    Route::get('/customer'          , ['as' => 'admin.posts.customer' , 'uses' => 'AdminCustomerController@index']);
    Route::post('/customer/create'  , ['as' => 'admin.customer.create' , 'uses' => 'AdminCustomerController@create']);
    Route::post('/customer/update'  , ['as' => 'admin.customer.update' , 'uses' => 'AdminCustomerController@update']);
    Route::post('/customer/destroy' , ['as' => 'admin.customer.destroy' , 'uses' => 'AdminCustomerController@destroy']);

    Route::get('/room'          , ['as' => 'admin.posts.room' , 'uses' => 'AdminRoomController@index']);
    Route::post('/room/create'  , ['as' => 'admin.room.create' , 'uses' => 'AdminRoomController@create']);
    Route::post('/room/update'  , ['as' => 'admin.room.update' , 'uses' => 'AdminRoomController@update']);
    Route::post('/room/destroy' , ['as' => 'admin.room.destroy' , 'uses' => 'AdminRoomController@destroy']);

    Route::get('/reservation'          , ['as' => 'admin.posts.reservation' , 'uses' => 'AdminReservationController@index']);
    Route::post('/reservation/create'  , ['as' => 'admin.reservation.create' , 'uses' => 'AdminReservationController@create']);
    Route::post('/reservation/update'  , ['as' => 'admin.reservation.update' , 'uses' => 'AdminReservationController@update']);
    Route::post('/reservation/destroy' , ['as' => 'admin.reservation.destroy' , 'uses' => 'AdminReservationController@destroy']);
    Route::post('/reservation/pay' , ['as' => 'admin.reservation.pay' , 'uses' => 'AdminReservationController@pay']);
    Route::post('/reservation/check_in' , ['as' => 'admin.reservation.in' , 'uses' => 'AdminReservationController@check_in']);
    Route::post('/reservation/check_out' , ['as' => 'admin.reservation.out' , 'uses' => 'AdminReservationController@check_out']);
});

