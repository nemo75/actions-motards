@extends('master')

@section('content')
<h1 class="ui header">Add Region</h1>
<form action="/region/add" class="ui form" method="POST">
{{ csrf_field() }}
	<div class="field">
		<label>nom</label>
		<input type="text" id="name" name="name">
	</div>
		<button type="submit" class="ui purple button">Ajoute-moi !</button>
</form>
@endsection