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
Route::get('users', 'UsersController@index');
Route::get('users-list', 'UsersController@usersList'); 
  Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
  Route::get('dashboard', 'AuthController@dashboard');
  Route::post('insert-new-problem', 'IndexController@insertdate');  
  Route::get('logout', 'AuthController@logout');
  Route::post('insert-update-problem', 'IndexController@updatedate');
  Route::post('insert-engineer-problem', 'DataController@updateinfo');
  Route::get('/date', ['uses'=>'IndexController@showData', 'as'=>'date']);
  Route::get('/', ['uses'=>'IndexController@showIndex', 'as'=>'index']);
  Route::get('data', 'DataController@showData');
  Route::get('/{id}', ['uses'=>'ApplicationController@viewApplication','as'=>'applicationdetail']);


