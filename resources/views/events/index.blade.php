@extends('master')

@section('content')

<div id="index-banner" class="parallax-container parallax-hero-events overlay">

  <div class="section no-pad-bot">
    <div class="container"><h1 class="header center blue-text text-lighten-2">Les Events en Régions</h1></div>
    <div class="container">
      <div class="row">
        <div class="col s12 center">
          <a class='dropdown-button btn grey-text text-darken-4 light-blue lighten-2 btn-region' data-beloworigin="true" href='#' data-activates='dropdown1'>Les Régions!</a>
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

    <div class="parallax"><img src="/images/harley_street.jpg" alt="Unsplashed background img 1"></div>
  </div>
@endsection