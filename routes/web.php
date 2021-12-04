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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');

Route::name('users.')->group(function() {
    Route::post('users/registration', 'UserController@registration')->name('registration');
    Route::post('users/authorization', 'UserController@authorization')->name('authorization');
    Route::get('users/show', 'UserController@show')->name('show');
    Route::delete('users/delete', 'UserController@delete')->name('delete');
});


  Route::resource('tasks', TasksController::class);
