<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

 <title>Actions-motards</title>

 <!-- Styles -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 <link href="/css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav class="grey darken-4 navbar-fixed" role="navigation">
    <div class="nav-wrapper container">
    	<a id="logo-container" href="{{ url('/') }}" class="brand-logo">Actions-Motards</a>
    	<ul class="right hide-on-med-and-down text-grey lighten-2">
       <li><a href="{{ url('/region') }}" class="light-blue-text text-lighten-2">Events</a></li>
       
       @if (Auth::guest())
       <li><a href="#modal1" id="trigger-overlay" class="modal-trigger waves-effect waves-light btn light-blue lighten-2">S'inscrire</a></li>
       <li><a href="#connection" id="trigger-overlay" class="modal-connection waves-effect waves-light btn waves-effect waves-light btn light-blue lighten-2">Se connecter</a></li>
       @else
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <div>
            @if( Auth::user()->name  == "Thomas Bricquet")
            <h7 id="user">{{ Auth::user()->name }} (admin) </h7>
              @else 
             <h7 id="user"> {{ Auth::user()->name }} </h7>
            @endif
            <span class="caret"></span>
          </div>
        </a>
        <a href="{{ url('/logout') }}"><h6>Deconnecte-toi</h6></a>
      </li>
      @endif
    </ul>
  </div>
</nav>

<!-- Modal Inscrire -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div class="col s12 center">
      <h3>Inscription</h3>
    </div>
    <div class="row form-inscription">
      <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
       {!! csrf_field() !!}
       <div class="row">
        <div class="input-field col s12 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
          <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}">
          <label for="name">Prénom Nom</label>
          @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 form-group {{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Votre Mot de Passe</label>
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <input id="password" type="password" class="validate" name="password_confirmation">
          <label for="password">Retaper Votre Mot de Passe</label>
          @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
          <label for="email">Email</label>
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Envoyer
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
</div>


<!-- Modal Connection -->
<div id="connection" class="modal">
  <div class="modal-content">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
     {!! csrf_field() !!}
     <div class="row ">
      <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }} ">
        <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}">
        <label for="email">Email</label>
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <div class="input-field col s12">
        <input id="password" name="password" type="password" class="validate">
        <label for="password">Votre Mot de Passe</label>

        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="row center">
      <button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Envoyer
        <i class="material-icons right">send</i>
      </button>
    </div>
  </form>
</div>
</div>

<ul id="nav-mobile" class="side-nav">
 <li><a href="#">Navbar Link</a></li>
</ul>
<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
</div>

@yield('content')

<footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="blue-text text-lighten-2">Actions-Motards</h5>
        <p class="blue-text text-lighten-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper nulla vitae lacus laoreet, id molestie felis tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec interdum, elit sit amet pretium vestibulum, velit augue mollis leo, sed laoreet quam nibh vel diam. Sed hendrerit eu nunc sit amet cursus.</p>
      </div>
      <div class="col l6 s12 center">
        <h5 class="blue-text text-lighten-2">Menu</h5>
        <ul>
          <li><a href="/index.html" class="light-blue-text text-lighten-2 js-scrollTo">A Propos</a></li>
          <li><a href="events.html" class="light-blue-text text-lighten-2">Events</a></li>
          <li><a href="assos.html" class="light-blue-text text-lighten-2">Assos</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col s12 m8">
          &copy; Copyright 2016 / Made with <3  by <a class="blue-text text-lighten-2" href="http://materializecss.com">Thomas Bricquet</a>&nbsp;&amp;&nbsp;<a class="blue-text text-lighten-2" href="http://jeromemouly.com">Jérôme Mouly</a>&nbsp;/&nbsp;Design by <a class="blue-text text-lighten-2" href="http://jeromemouly.com">Jérôme Mouly</a>
        </div>
        <div class="col s12 m4">
          <a class="blue-text text-lighten-2" href="mentions.html">Mentions Légales / Crédits</a>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
  window.cookieconsent_options = {"message":"Ce site utilise des cookie"
    s pour vous assurer d'obtenir la meilleure expérience sur notre site.","dismiss":"Accepter !","learnMore":"Plus d'information","link":"https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi","theme":"dark-bottom"};
  </script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
  <!-- End Cookie Consent plugin -->


  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Montserrat:400,700:latin' | 'Candal::latin' | 'Paytone+One::latin'] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78961338-1', 'auto');
  ga('send', 'pageview');

</script>
    <script src="/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/materialize.js"></script>
    <script src="/js/jquery.vmap.js" type="text/javascript"></script>
    <script src="/js/jquery.vmap.france.js" type="text/javascript"></script>
    <script src="/js/jquery.vmap.colorsFrance.js" type="text/javascript"></script>
    <script src="/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#francemap').vectorMap({
          map: 'france_fr',
          hoverOpacity: 0.75,
          hoverColor: "#000000",
          backgroundColor: "transparent",
          color: "#4fc3f7",
          borderColor: "#212121",
          selectedColor: "#01579b",
          enableZoom: true,
          showTooltip: true,
          onRegionClick: function(element, code, region)
          {
            location.href = "/region/show/" + code;    
          }
        });
      });
    </script>

    <script type="text/javascript">
     WebFontConfig = {
      google: { families: [ 'Montserrat:400,700:latin' | 'Candal::latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>
  </body>
  </html>