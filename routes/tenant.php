<?php

Route::post('projects', 'ProjectController@store')->name('projects.store');
Route::get('projects/{project}', 'ProjectController@show')->name('projects.show');
Route::delete('projects/{id}', 'ProjectController@destroy')->name('projects.delete');
Route::get('{company}', 'DashboardController');
