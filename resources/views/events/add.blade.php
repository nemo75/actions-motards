@extends('master')
	
@if( Auth::user()->name == "Thomas Bricquet")
<div class="addEvent" style="width: 30%; margin: auto; margin-top: 5%;">
	<h1 class="ui header">Ajout d'evenements</h1>
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
		<div class="field ui dropdown">
			<label>region_id</label>
			<ul name="region_id" class="ui dropdown">
				<li value="7">Alsace 7</li>
				<li value="12">Aquitaine 12</li>
				<li value="20">Auvergne 20</li>
				<li value="3">Base Normandie 3</li>
				<li value="10">Bourgogne 10</li>
				<li value="5">Bretagne 5</li>
				<li value="9">Centre 9</li>
				<li value="6">Champagne-Ardenne 6</li>
				<li value="14">Corse 14</li>
				<li value="22">Franche-comte 22</li>
				<li value="2">Haute Normandie 2</li>
				<li value="4">Ile de france 4</li>
				<li value="16">Languedoc-Rousillon 16</li>
				<li value="19">Limousin 19</li>
				<li value="17">Lorraine 17</li>
				<li value="15">Midi-Pyrenes 15</li>
				<li value="21">Nord-Pas-De-Calais 21</li>
				<li value="8">Pays de la Loire 8</li>
				<li value="1">Picardie 1</li>
				<li value="18">Poitou-charente 18</li>
				<li value="13">PACA 13</li>
			</ul>
			<input type="text" name="region_id" id="region_id">
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
			<label>image</label>
			<input type="text" id="email" name="path">
		</div>
		<div class="field">
			<label>Description</label>
			<textarea type="text" id="description" name="description"></textarea>
		</div>
		<button type="submit" class="ui  button">Ajoute-moi !</button>
	</form>
</div>
@endif