@section('title', 'Actions-Motards')

@section('content')
<div id="index-banner" class="parallax-container overlay">

	<div class="section no-pad-bot">
		<div class="container"><h1 class="header center blue-text text-lighten-2">Les Events en Régions</h1></div>
		<div class="container">
			<div class="row">
				<div class="col s12 center">
					<a class='dropdown-button btn grey darken-4 blue-text text-lighten-2 btn-region' data-beloworigin="true" href='#' data-activates='dropdown1'>Les Régions!</a>
					<!-- Dropdown Structure -->
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href="#ile" class="js-scrollTo">Ile de France</a></li>
						<li class="divider"></li>
						<li><a href="#inord" class="js-scrollTo">Nord Pas de Calais Picardie</a></li>
						<li class="divider"></li>
						<li><a href="#normandie" class="js-scrollTo">Normandie</a></li>
						<li class="divider"></li>
						<li><a href="#bretagne" class="js-scrollTo">Bretagne</a></li>
						<li class="divider"></li>
						<li><a href="#alsace" class="js-scrollTo">Alsace Champage Ardenne Lorraine</a></li>
						<li class="divider"></li>
						<li><a href="#pays" class="js-scrollTo">Pays de la Loire</a></li>
						<li class="divider"></li>
						<li><a href="#bourgogne" class="js-scrollTo">Bourgogne</a></li>
						<li class="divider"></li>
						<li><a href="#centre" class="js-scrollTo">Centre Val de Loire</a></li>
						<li class="divider"></li>
						<li><a href="#aquitaine" class="js-scrollTo">Aquitaine Limousin Poitou-Charente</a></li>
						<li class="divider"></li>
						<li><a href="#rhone" class="js-scrollTo">Auvergne Rhône-Alpes</a></li>
						<li class="divider"></li>
						<li><a href="#lrmp" class="js-scrollTo">Languedoc-Roussilon Midi-Pyrénées</a></li>
						<li class="divider"></li>
						<li><a href="#paca" class="js-scrollTo">Provence Alpes Côte-d'Azur</a></li>
						<li class="divider"></li>
						<li><a href="#corse" class="js-scrollTo">Corse</a></li>
						<li class="divider"></li>
						<li><a href="#guyane" class="js-scrollTo">Guyane</a></li>
						<li class="divider"></li>
						<li><a href="#martinique" class="js-scrollTo">Martinique</a></li>
						<li class="divider"></li>
						<li><a href="#guadeloupe" class="js-scrollTo">Guadeloupe</a></li>
						<li class="divider"></li>
						<li><a href="#mayotte" class="js-scrollTo">Mayotte</a></li>
						<li class="divider"></li>
						<li><a href="#reunion" class="js-scrollTo">Réunion</a></li>
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
			
			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>

					<h4>Evénement à venir en {{$region->name}}</h4>

				</div>
			</div>
			<div class="row">
				<div class="col s12 center">
					<div class="card large">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/theo.jpg"	>
						</div>
						@foreach($region->events as $event)
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{{$event->association}} organise La Balade pour les Réves de Théo - {{$event->date}}<i class="material-icons right">more_vert</i></span>
							<p><a href="{{$event->site_asso}}">Inscrit toi !</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$event->association}} organise La Balade pour les Réves de Théo<i class="material-icons right">close</i></span>
							<p>{{$event->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

<div class="parallax-container valign-wrapper overlay">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header col s12 blue-text text-lighten-2">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="/images/biker_kid.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
	<div class="section">

		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>Evénements passés</h4>
				

				<div class="col s12 m4">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/moto.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m4">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/moto.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="/images/moto.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							<p><a href="#">This is a link</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
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