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

Route::get('/', 'PagesController@welcome');

Auth::routes();

Route::get('/user/{id}','PagesController@author');
Route::get('/post/{id}','PagesController@show');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'PagesController@home')->name('home');
    /*Route::get('admin/posts/new','PagesController@new');*/
    
    Route::group(array('prefix' => 'admin'), function()
    {
        Route::resource('posts', 'PostController');
        Route::resource('users', 'UserController');
    });
    
	/*Route::post('/post/create', 'MessagesController@create');
	Route::get('/post/{id}', 'UsersController@showConversation');
	Route::post('/{username}/dms', 'UsersController@sendPrivateMessage');*/
});