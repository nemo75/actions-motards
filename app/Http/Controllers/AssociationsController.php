<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Association;

class AssociationsController extends Controller
{
    public function index()
    {
    	$associations = Association::all();
    	return view('associations.index', compact('associations', 'regions'));
    }
    public function add()
    {
    	return view('associations.add');
    }
    public function create(Request $request)
    {
    	Association::insert([
    		'name'=>$request->name,
            'poste'=>$request->poste,
    		'contact'=>$request->contact,
    		'description'=>$request->description,
    		'email'=>$request->email,
    		'telephone'=>$request->telephone,
    		'adresse'=>$request->adresse,
    		'date_creation'=>$request->date_creation,
            'site'=>$request->site,
    		'region_id'=>$request->region_id,
    	]);
    	return redirect('association');
    }
}
