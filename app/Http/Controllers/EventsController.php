<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Region;

class EventsController extends Controller
{
	public function index()
	{
		$regions = Region::all();
		$events = Event::all();
		return view('events.index', compact('events', 'regions'));
	}
	public function add()
	{
		return view('events.add');
	}
	public function create(Request $request)
	{
		$this->validate($request, [
			'association'=> 'required',
			'prix'=> 'required',
			'lieux'=> 'required',
			'region_id'=> 'required',
		]);

		Event::insert([
			'association'=> $request->association,
			'prix'=> $request->prix,
			'lieux'=> $request->lieux,
			'region_id'=> $request->region_id,
			]);

		return redirect('event');
	}

}
