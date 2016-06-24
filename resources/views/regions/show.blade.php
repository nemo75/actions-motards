@section('title', 'Actions-Motards')


@section('content')
<?php
$date = date("d-m-Y");
$heure = date("H:i");
?>
<div id="index-banner" class="parallax-container overlay">
	<div class="section no-pad-bot">
		<div class="container"><h1 class="header center blue-text text-lighten-2">Les Events en Régions</h1></div>
		<div class="container">
			<div class="row">
				<div class="col s12 center">
					<a class='dropdown-button btn grey darken-4 blue-text text-lighten-2 btn-region' data-beloworigin="true" href='#' data-activates='dropdown2'>Les Régions!</a>
					<!-- Dropdown Structure -->
					<ul id='dropdown2' class='dropdown-content'>
						<li><a href="/region/show/4" class="js-scrollTo">Ile de France</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/21" class="js-scrollTo">Nord Pas de Calais</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/3" class="js-scrollTo">Basse Normandie</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/2" class="js-scrollTo">Haute Normandie</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/5" class="js-scrollTo">Bretagne</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/7" class="js-scrollTo">Alsace</a></li>
						<li class="divider"></li>        
						<li><a href="/region/show/6" class="js-scrollTo"> Champage Ardenne</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/17" class="js-scrollTo"> Lorraine</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/8" class="js-scrollTo">Pays de la Loire</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/1" class="js-scrollTo">Picardie</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/10" class="js-scrollTo">Bourgogne</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/9" class="js-scrollTo">Centre</a></li> 
						<li class="divider"></li>
						<li><a href="/region/show/8" class="js-scrollTo"> Pays de la Loire</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/12" class="js-scrollTo">Aquitaine</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/19" class="js-scrollTo">Limousin</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/18" class="js-scrollTo">Poitou-Charente</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/20" class="js-scrollTo">Auvergne</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/11" class="js-scrollTo">Rhône-Alpes</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/16" class="js-scrollTo">Languedoc-Roussilon Midi-Pyrénées</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/15" class="js-scrollTo">Midi-Pyrénées</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/13" class="js-scrollTo">Provence Alpes Côte-d'Azur</a></li>
						<li class="divider"></li>
						<li><a href="/region/show/14" class="js-scrollTo">Corse</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax"><img src="/images/biker_road.jpg" alt="Unsplashed background img 1"></div>
</div>

<section id="region">
	<div class="container">
		<div class="section">
			@if(sizeOf($region->events) == null)
			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>

					<h4>Evénementss à venir en {{$region->name}}</h4>
					<h5>Aucun Evénement à venir </h5>
				</div>
			</div>
			@elseif($region->events > $date)
			<!--  -->
			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>

					<h4>Evénement à venir en {{$region->name}}</h4>
					<h5>Aucun Evénement à venir </h5>
				</div>
			</div>
			@endif

			@foreach($region->events as $event)
			@if(new DateTime() < new DateTime($event->date)) 
			<div class="row">
				<div class="col s12 center">
					<div class="card large">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/{{$event->path}}" style="width: 100%;">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{$event->association}} - {{$event->date}}<i class="material-icons right">more_vert</i></span>
							<p><a href="{{$event->site_asso}}">Inscrit toi !</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$event->association}}<i class="material-icons right">close</i></span>
							<p>{{$event->description}}</p>
							<img src="/images/{{$event->path}}" alt="" style="width:450px; height:500px;">
						</div>
					</div>
				</div>
			</div>
		</div>

		@endif
		@endforeach

		@if(sizeOf($region->events)  == null)
		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>Evénements passés</h4>
				<h5>Aucun Evénements passés </h5>
			</div>
		</div>
		@else
		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>Evénements passés</h4>
				@endif

				@foreach($region->events as $event)	
				@if(new DateTime() > new DateTime($event->date))
				<div class="col s12 m4">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/{{$event->path}}">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{$event->association}}<i class="material-icons right">more_vert</i></span>
							<p><a href="{{$event->site_asso}}">Lien de l'&eacute;v&egrave;nement</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{ $event->association }}<i class="material-icons right">close</i></span>
							<p>{{$event->description}}</p>
							<img src="/images/{{$event->path}}" alt="" style="width:250px; height:250px;">
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection















































<!-- @extends('master')

@section('content')
<h1>Liste de tout les evenements sur {{$region->name}}</h1>


@foreach($region->events as $event)
		<li> L'association : {{$event->association}}</li>
		<li> Lieux : {{$event->lieux}}</li>
		<li> Prix par casque :{{$event->prix}} euros </li>
		<li> Date :{{$event->date}}</li>
		<li> Heure :{{$event->time}}</li>
		<li> Email :{{$event->email_asso}}</li>
		<li> Telephone :{{$event->telephone_asso}}</li>
		<li> Site :{{$event->site_asso}}</li>
		<li> Description :{{$event->description}}</li>
@endforeach

@foreach($region->associations as $asso)
	<h1>Liste des associations de {{$region->name}}</h1>
	<li>Nom : {{$asso->name}}</li>
	<li>Personne en charge, son poste : {{$asso->poste}} {{$asso->contact}}</li>
	<li>description : {{$asso->description}}</li>
	<li>email : {{$asso->email}}</li>
	<li>telephone : {{$asso->telephone}}</li>
	<li>adresse : {{$asso->adresse}}</li>
	<li>Creation de l'asso : {{$asso->date_creation}}</li>
	<a href="{{$asso->site}}"><li>Site : {{$asso->site}}</li></a>
	<a href="#"> cekjek </a>
@endforeach
	<a href="#"> cekjek </a>

@endsection -->