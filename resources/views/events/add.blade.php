@extends('master')

<h1 class="ui header">Add User</h1>
<form action="/event/add" class="ui form" method="POST">
{{ csrf_field() }}
	<div class="field">
		<label>Association</label>
		<input type="text" id="name" name="association">
	</div>
	<div class="field">
		<label>Prix</label>
		<input type="text" id="name" name="prix">
	</div>
	<div class="field">
		<label>Lieux</label>
		<input type="text" id="name" name="lieux">
	</div>
		<div class="field">
		<label>region_id</label>
		<input type="text" id="name" name="region_id">
	</div>
		<button type="submit" class="ui purple button">Ajoute-moi !</button>
</form>