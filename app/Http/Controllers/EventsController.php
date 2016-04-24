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
		return view('events.index', compact('events', 'regions'));
	}
	public function add()
	{
		return view('events.add');
	}
	public function addImage(Request $request, $id)
	{
		$event = Event::find($id);
		$image = new Image;
		$image->title = $request->title;
		  if($request->hasFile('image')) {
            $file = $request->file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $image->path = '/images/' . $name;
            $file->move(public_path().'/images/', $name);
        }
        $event->images()->save($image);
		return view('events.add');
	}
	public function create(Request $request)
	{
		 $this->validate($request, [
		 	'association'=> 'required',
		 	'lieux'=> 'required',
		 	'region_id'=> 'required',
			 'date'=> 'required',
			 'time'=> 'required',
			 'description'=> 'required|max:255',
		// 	'prix'=> 'required',
			// 'association'=> 'required',
			// 'email_asso'=> 'required',
			// 'telephone'=> 'required',
			// 'site_asso'=> 'required',
		 ]);

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

		return redirect('event');
	}


}
