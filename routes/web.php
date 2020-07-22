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

/*...
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/',"StudentController@index") ;
Route::get('/edit/{id}',"StudentController@update") ;
// Route::get('/delete/{id}',"StudentController@delete") ;
Route::get('/show/{id}',"StudentController@show") ;
Route::get('/create',"StudentController@create") ;
Route::post('/store',"StudentController@store") ;
// Route::post('/update/{id}',"StudentController@update") ;

	Route::get('/', ['as' => 'home', 'uses' => 'StudentController@index']);
    Route::group(['prefix' => 'task'], function() {
        Route::get('/tasks',['as' => 'task.index', 'uses' => 'StudentController@index']);
        Route::post('/save', ['as' => 'task.save', 'uses' => 'StudentController@store']);
        Route::post('assign/',['as' => 'task.assign','uses' => 'StudentController@update']);
        Route::delete('/delete', ['as' => 'task.delete', 'uses' => 'StudentController@destroy']);

	});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
