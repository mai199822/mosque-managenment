<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');
Route::get('/section/{id}','SectionsController@index')->name('section.details');
Route::get('/activity','ActivitiesController@index')->name('activities.all');
Route::get('/activity/{id}','ActivitiesController@show')->name('activity.details');
Route::get('/profile','ProfileController@index')->name('profile.index');
Route::get('/profile/{id}','ProfileController@store')->name('profile.store')->middleware('auth');



Auth::routes([
    'verify' => true,
]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');
