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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Home', 'HomeController@index')->name('Home');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is.admin']
], function () {
    Route::resource('foods', 'FoodController')->except('show');
    Route::get('/users', 'UserController@index')->name('updateUser');
    Route::get('/users/toggleAdmin/{user}', 'UserController@toggleAdmin')->name('toggleAdmin');
    Route::delete('/users/{user}', 'UserController@destroy')->name('deleteUser');
   // Route::get('/foods', 'FoodController@index')->name('foods');
   // Route::match(['get', 'post'],'/foodcreate', 'FoodController@create')->name('foodcreate');
   // Route::get('/foodedit/{foods}', 'FoodController@edit')->name('foodedit');
   // Route::post('/foodupdate/{foods}', 'FoodController@update')->name('foodupdate');
   // Route::get('/destroy/{foods}', 'FoodController@destroy')->name('fooddestroy');
});

Route::resource('diet', 'DietController')->except('show')->middleware('auth');
Route::get('diet/view', 'DietController@view')->name('dietview')->middleware('auth');
Route::match(['post','get'],'/profile',[
    'uses' => 'ProfileController@update',
    'as' => 'updateProfile'
]);

