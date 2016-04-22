@extends('master')

@foreach($regions as $region)
	{{$region->name}}
	</br>
@endforeach
