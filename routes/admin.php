<?php

use Illuminate\Support\Facades\Route;



 Route::get('/sections','SectionsController@index')->name('sections');
 Route::get('/sections/creat','SectionsController@creat')->name('sections.creat');
 Route::post('/sections','SectionsController@insert')->name('sections.insert');
 Route::get('/sections/{id}','SectionsController@edit')->name('sections.edit');
 Route::put('/sections/{id}','SectionsController@update')->name('sections.update');
 Route::delete('/sections/{id}','SectionsController@delete')->name('sections.delete');

 Route::resource('activities', 'ActivitiesController')->names([
     'index' => 'activities', 
     'destroy' => 'activities.delete',
     'store' => 'activities.insert',
 ]);
/* Route::get('/activities','ActivitiesController@index')->name('activities');
 Route::get('/activities/creat','ActivitiesController@creat')->name('activities.creat');
 Route::post('/activities','ActivitiesController@insert')->name('activities.insert');
 Route::get('/activities/{id}','ActivitiesController@edit')->name('activities.edit');
 Route::put('/activities/{id}','ActivitiesController@update')->name('activities.update');
 Route::delete('/activities/{id}','ActivitiesController@delete')->name('activities.delete');*/