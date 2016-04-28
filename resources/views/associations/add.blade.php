@extends('master')

@section('content')
<h1 class="ui header">Add Association</h1>
<form action="/association/add" class="ui form" method="POST">
{{ csrf_field() }}
	<div class="field">
		<label>Nom de l'association</label>
		<input type="text" id="name" name="name">
	</div>
	<div class=" two fields">
		<div class="field">
			<label>Poste du responsable </label>
			<input type="text" id="poste" name="poste">
		</div>
		<div class="field">
			<label>Responsable </label>
			<input type="text" id="contact" name="contact">
		</div>
	</div>
	<div class="two fields">
		<div class="field">
			<label>Email de contact</label>
			<input type="email" id="email" name="email">
		</div>		
		<div class="field">
			<label>Telephone de contact</label>
			<input type="text" id="telephone" name="telephone">
		</div>
	</div>
	<div class="field">
		<label>Adresse de l'association</label>
		<input type="text" id="adresse" name="adresse">
	</div>	
	<div class="field">
		<label>Date de creation de l'association</label>
		<input type="date" id="date_creation" name="date_creation">
	</div>	
	<div class="field">
		<label>Site de l'association</label>
		<input type="text" id="site" name="site">
	</div>
	<div class="field">
		<label>Region id</label>
		<input type="text" id="region_id" name="region_id">
	</div>
	<div class="field">
		<label for="">Description</label>
		<textarea name="description" id="description" cols="30" rows="10"></textarea>	
	</div>
		<button type="submit" class="ui purple button">Ajoute-moi !</button>
</form>
@endsection