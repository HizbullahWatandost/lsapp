<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
     return view('welcome');
 });

Route::get('/', 'PagesController@index');

Route::get('/hello', function () {
    return '<h2>Hello World</h2>';
});


Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/user/{id}/{name}', function ($id, $name){
    return 'This user id is '.$id.' and with name of '.$name;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts', 'PostsController');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
