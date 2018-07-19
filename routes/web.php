<?php
 use App\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'Postcontroller@index');


Route::get('/posts/create', 'Postcontroller@create')->name('create-post');


Route::get('/posts/{id}', 'Postcontroller@show');


Route::post('/posts', 'Postcontroller@store');


Route::post('/posts/{post}/comments', 'CommentsController@store')->name('comments-post');


Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');


Route::get('/logout', 'LoginController@destroy');


Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');
    

 