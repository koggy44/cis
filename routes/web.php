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


Route::resource('reports', 'ReportsController');
Route::resource('news', 'NewsController');
Route::resource('incidents', 'IncidentsController');
Route::resource('pages', 'IncidentTypeController');
Route::resource('places', 'ResidentsController');
Route::resource('view', 'ViewallController');


Auth::routes();
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/home', 'HomeController@index');
Route::get('/place/{category}', 'PlacesController@show');
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login')->middleware(['guest']);
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/{news}', 'HomeController@show');
Route::get('/user/profile/{id}','UserController@show')->middleware('auth:admin');
