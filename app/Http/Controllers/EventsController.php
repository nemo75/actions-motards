<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Image;
use Carbon\Carbon;

class EventsController extends Controller
{
	public function index()
	{
		$events = Event::all();
		return view('events.index', compact('events'));
	}
	public function add()
	{
		return view('events.add');
	}	

	public function store($id)
	{
		$events = Event::find($id);
		return view('images.add', compact('events'));
	}
	
	public function create(Request $request)
	{
		Event::insert([
			'association'=> $request->association,
			'prix'=> $request->prix,
			'lieux'=> $request->lieux,
			'region_id'=> $request->region_id,
			'date'=> $request->date,
			'time'=> $request->time,
			'description'=> $request->description,
			'email_asso'=> $request->email_asso,
			'telephone_asso'=> $request->telephone_asso,
			'site_asso'=> $request->site_asso,
			]);

		return redirect('region');
	}
	public function delete ($id)
	{
		 $event = Event::find($id);
		 $event->delete();

		 return redirect('region');
	}

}
