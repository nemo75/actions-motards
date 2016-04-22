<?php

Route::get('/', function () {
    return view('accueil');
});

Route::post('event/add', 'EventsController@create');
Route::get('event/add', 'EventsController@add');
Route::get('event/', 'EventsController@index');


Route::post('region/add', 'RegionsController@create');
Route::get('region/add', 'RegionsController@add');
Route::get('region/', 'RegionsController@index');
Route::get('region/show/{id}', 'RegionsController@show');
























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