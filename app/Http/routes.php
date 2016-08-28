<?php

Route::get('/', function () {
    return view('accueil');
});

Route::post('event/add', 'EventsController@create');
Route::get('event/add', 'EventsController@add');
Route::get('event/', 'EventsController@index');
Route::get('image/add/{id}', 'EventsController@store');
Route::post('image/add/{id}', 'EventsController@addImage');
Route::get('region/delete/{id}', 'EventsController@delete');



Route::get('association/', 'AssociationsController@index');
Route::get('association/add', 'AssociationsController@add');
Route::post('association/add', 'AssociationsController@create');

Route::auth();
Route::get('mentions', 'HomeController@mentions' );

Route::post('region/add', 'RegionsController@create');
Route::get('region/add', 'RegionsController@add');
Route::get('region/', 'RegionsController@index');
Route::get('region/show/{id}', 'RegionsController@show');


//Route::get('/home', 'HomeController@index');
