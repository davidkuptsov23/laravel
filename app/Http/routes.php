<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return Redirect::to('auth/login');
});


// Authentication routes...
Route::get('auth/login', [ 'as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', [ 'as' => 'login-post', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', [ 'as' => 'register-post', 'uses' => 'Auth\AuthController@postRegister']);

// Password reset link request routes...
Route::get('password/email', [ 'as' => 'email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', [ 'as' => 'email-post', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', [ 'reset' => 'home', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', [ 'as' => 'reset-post', 'uses' => 'Auth\PasswordController@postReset']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home',[ 'as' => 'home', 'uses' => 'HomeController@index']);
    Route::resource('user', 'UserController');

    Route::resource('house', 'HouseController');
    Route::resource('accounttype', 'AccountTypeController');
    Route::resource('bank', 'BankController');
    Route::resource('insurance', 'InsuranceController');
    Route::resource('saving', 'SavingController');
    Route::resource('blocktype', 'BlockTypeController');
    Route::resource('block', 'BlockController');
    Route::resource('persontype', 'PersonTypeController');
    Route::resource('person', 'PersonController');

});
