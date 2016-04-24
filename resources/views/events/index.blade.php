@extends('master')

@section('title', 'Actions-Motards')




@foreach($events as $event)
		<li> L'association {{$event->association}} venant de {{$event->lieux}} fait payer {{$event->prix}} euros </li>
@endforeach