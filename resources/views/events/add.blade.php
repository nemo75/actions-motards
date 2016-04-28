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
		<select name="region_id" class="ui fluid dropdown">
			<option value="1">Alsace</option>
			<option value="2">Aquitaine</option>
			<option value="3">Auvergne</option>
			<option value="4">Base Normandie</option>
			<option value="5">Bourgogne</option>
			<option value="6">Bretagne</option>
			<option value="7">Centre</option>
			<option value="8">Champagne-Ardenne</option>
			<option value="9">Corse</option>
			<option value="10">Franche-comte</option>
			<option value="11">Haute Normandie</option>
			<option value="12">Ile de france</option>
			<option value="13">Lamguedoc-Rousillon</option>
			<option value="14">Limousin</option>
			<option value="15">Lorraine</option>
			<option value="16">Midi-Pyrenes</option>
			<option value="17">Nord-Pas-De-Calais</option>
			<option value="18">Pays de la Loire</option>
			<option value="19">Picardie</option>
			<option value="20">Poitou-charente</option>
			<option value="21">PACA</option>
			<option value="22">Rhone-Alpes</option>
			<option value="23">Guadeloupe</option>
			<option value="24">Martinique</option>
			<option value="25">Guyane</option>
			<option value="26">La reunion</option>
			<option value="27">Mayotte</option>
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




<form method="POST" action="/image/add" class="ui form">
   {{ csrf_field() }}
   <div class="field">
       <label for="title">Title</label>
       <inputname="title" type="text" id="title">
   </div>
   <div class="field">
       <label for="image">Choose an Image: </label>
       <input name="image" type="file" id="image">
   </div>
   <div class="field">
       <input type="submit" value="Save">
   </div>
</form>