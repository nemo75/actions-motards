@extends('master')

<h1 class="ui header">Add User</h1>
<form action="/event/add" class="ui form" method="POST">
{{ csrf_field() }}
	<div class="field">
		<label>Association Organisatrice</label>
		<input type="text" id="associaton" name="association">
	</div>
	<div class="field">
		<label>Prix par Casque</label>
		<input type="text" id="prix" name="prix">
	</div>
	<div class="field">
		<label>Lieux</label>
		<input type="text" id="lieux" name="lieux">
	</div>
		<div class="field">
		<label>Date</label>
		<input type="date" id="date" name="date">
	</div>
	<div class="field">
		<label>Heure</label>
		<input type="time" id="time" name="time">
	</div>
	<div class="field">
		<label>region_id</label>
		<input type="text" id="region" name="region_id">
	</div>
	<div class="field">
		<label>Email</label>
		<input type="text" id="email" name="email_asso">
	</div>
	<div class="field">
		<label>Telepehone de l'association</label>
		<input type="text" id="telephone" name="telephone_asso">
	</div>
	<div class="field">
		<label>Site de l'association</label>
		<input type="text" id="site" name="site_asso">
	</div>

	<div class="field">
		<label>Description</label>
		<textarea type="text" id="description" name="description"></textarea>
	</div>
	<button type="submit" class="ui purple button">Ajoute-moi !</button>
</form>