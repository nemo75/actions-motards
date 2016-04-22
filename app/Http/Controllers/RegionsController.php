<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Region;
use App\Event;

class RegionsController extends Controller
{
 public function index()
	{
		$regions = Region::all();
		return view('regions.index',compact('regions'));
	}
	 public function add()
	 {	
	 	$regions = Region::all();
	 	return view('regions.add',compact('regions'));
	 }
	 public function create(Request $request)
	 {

	 	 $this->validate($request, [
	 	 	'name'=> 'required|max:255',
	 	 	]);
	 	
	 	Region::insert([
	 		'name'=> $request->name,
	 		]);

	 	return redirect('region');
	 } 

		public function show($id)
	{	
		$events = Region::find($id)->events()->get();
		return view('regions.show',compact('events', 'regions'));

		// return view('events.show',['region'=>Region::findOrfail($id)]);
	}
}
