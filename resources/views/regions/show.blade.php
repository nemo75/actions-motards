@extends('master')

<h1>Liste de tout les evenements sur {{$region->name}}</h1>


@foreach($region->events as $event)
		<h1>EVENEMENT LALALALALALA</h1>
		<li> L'association : {{$event->association}}</li>
		<li> Lieux : {{$event->lieux}}</li>
		<li> Prix par casque :{{$event->prix}} euros </li>
		<li> Date :{{$event->date}} euros </li>
		<li> Heure :{{$event->time}} euros </li>
		<li> Email :{{$event->email_asso}} euros </li>
		<li> Telephone :{{$event->telephone_asso}} euros </li>
		<li> Site :{{$event->site_asso}} euros </li>
		<li> Description :{{$event->description}} euros </li>
@endforeach