@extends('master')

@section('content')
<h1> Youpi first goood beebop de la lune</h1>

@foreach($associations as $asso)
	{{$asso->name}}
@endforeach

@endsection