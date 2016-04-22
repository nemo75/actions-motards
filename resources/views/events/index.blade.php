@extends('master')

@section('title', 'Actions-Motards')

<h1>Liste de tout les evenements sur {{$regions->name}}</h1>


@foreach($events as $event)
		<li> L'association {{$event->association}} venant de {{$event->lieux}} fait payer {{$event->prix}} euros </li>
@endforeach