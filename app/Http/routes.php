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

//Route::get("pass", function () {
//    return bcrypt("123");
//});

Route::get('/', ['as' => 'pecahan', 'uses' => 'PecahanController@index']);
Route::post('/hitung', ['as' => 'pecahan-hitung', 'uses' => 'PecahanController@hitung']);


// // Route::get('/', ['as' => 'login-page', 'uses' => 'LoginController@index']);
//redirect middleware auth
//Route::get('auth/login', function () {
//    return redirect('/');
//});


/*
Route::post('auth/login', ['as' => 'auth-login', 'uses' => 'LoginController@doLogin']);
Route::get('auth/logout', ['as' => 'auth-logout', 'uses' => 'LoginController@doLogout']);



Route::group([
    'prefix' => 'user'], function () {
    Route::get('/', ['as' => 'user-page', 'uses' => 'UsersController@index']);
    Route::post('add', 'UsersController@doAdd');
    Route::post('edit', 'UsersController@doEdit');
    Route::post('delete', 'UsersController@doDelete');
});

Route::group(['middleware' => 'auth'], function () {
    // for principal only
//    Route::group(['middleware' => 'principal'], function () {
        Route::get('dashboard', ['as' => 'dashboard-page', 'uses' => 'DashboardController@index']);
        Route::get('homepage', 'DashboardController@homepage');
//    });
    
});
*/