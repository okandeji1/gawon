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

Route::get('/', 'PostController@index');

Route::get('/blog', 'PostController@blog');

Route::get('/about', function () {
    return view('about');
});

Route::resource('posts', 'PostController');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/admin/gb-admin-login', function () {
    return view('login');
});

Route::post('/admin/gb-admin-login', 'UserController@login');

Route::get('/admin/gb-admin-signup', function () {
    return view('register');
});

Route::post('/admin/gb-admin-signup', 'UserController@register');

Route::get('/admin/logout', 'UserController@logout');

Route::get('/admin/dashboard', function () {
    if (Auth::guest()) {
        //is a guest so redirect
        return redirect('/admin/gb-admin-login');
    }
    return view('admin/dashboard');
});

Route::get('/admin/add-post', function () {
    if (Auth::guest()) {
        //is a guest so redirect
        return redirect('/admin/gb-admin-login');
    }
    return view('admin/add_post');
});

Route::post('/admin/add-post', 'PostController@store');
