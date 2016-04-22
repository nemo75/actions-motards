
@extends('master')

@section('title', 'Actions-Motards')


@foreach($event as $e)
	@if($e->lieux == "paris")
		<li> L'association {{$e->association}} venant de {{$e->lieux}} fait payer {{$e->prix}} euros </li>
	@endif
@endforeach