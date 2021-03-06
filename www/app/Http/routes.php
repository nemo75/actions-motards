<?php

Route::get('/', function () {
    return view('accueil');
});

Route::post('event/add', 'EventsController@create');
Route::get('event/add', 'EventsController@add');
Route::get('event/', 'EventsController@index');
Route::get('image/add/{id}', 'EventsController@store');
Route::post('image/add/{id}', 'EventsController@addImage');


Route::post('region/add', 'RegionsController@create');
Route::get('region/add', 'RegionsController@add');
Route::get('region/', 'RegionsController@index');
Route::get('region/show/{id}', 'RegionsController@show');

Route::get('association/', 'AssociationsController@index');
Route::get('association/add', 'AssociationsController@add');
Route::post('association/add', 'AssociationsController@create');






















// Route::get('/75', function () {
// 	$event = Event::all();
//     return view('75')->with('event', $event);
// });

// Route::get('/13', function () {
// 	$event = Event::all();
//     return view('13')->with('event', $event);
// });

// Route::get('blade', function(){
// 	$event = Event::all();
// 	return view('75')->with('event', $event);
// });
Route::auth();

Route::get('/home', 'HomeController@index');
