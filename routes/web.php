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

//Route::get('/', function () {
//    return view('HomePage');
//});
Route::get('/loginz', function () {
    return view('regpage1');
});
Route::get('/def', ['middleware' => 'auth', function() {
    // Только аутентифицированные пользователи могут зайти..getRegister.
    return view('forlogers');
}]);
Route::get('/logout', function () {
     Auth::logout();
    return view('HomePage');
});

Route::get('auth/register', 'Auth\RegisterController@getRegister');

Route::get('aboutus', 'BestController@aboutus');

Route::get('categories', 'BestController@categories');

Route::get('/', 'BestController@HomePage');




//Route::get('/aboutus', function () {
//
//
//    return view('aboutus');
//
//});
//
//
//Route::get('/categories', function () {
//    return view('categories');
//});




Auth::routes();
//Route::get('/login', 'HomeController@regpage1')->name('regpage1');
//Route::get('/', 'HomeController@HomePage')->name('HomePage');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/def', 'HomeController@defindex')->name('defindex');
//test


// Маршруты аутентификации...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Маршруты регистрации...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');
