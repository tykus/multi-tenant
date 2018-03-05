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

Route::group(['middleware' => 'tenant'], function () {
    Route::post('projects', 'Tenant\ProjectController@store')->name('projects.store');
    Route::delete('projects/{id}', 'Tenant\ProjectController@destroy')->name('projects.delete');
    Route::get('{company}', 'Tenant\DashboardController');
});
