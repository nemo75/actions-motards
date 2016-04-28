<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

	<title>Actions-motards</title>

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body id="app-layout">
  <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container">
    	<a id="logo-container" href="{{ url('/') }}" class="brand-logo">Logo</a>
    	<ul class="right hide-on-med-and-down text-grey lighten-2">
       <li><a href="{{ url('/') }}" class="light-blue-text text-lighten-2">A Propos</a></li>
       <li><a href="{{ url('/region') }}" class="light-blue-text text-lighten-2">Events</a></li>
       <li><a href="pages/assos.html" class="light-blue-text text-lighten-2">Assos</a></li>
       
       @if (Auth::guest())
       <a class="waves-effect waves-light btn light-blue lighten-2" href="{{ url('/register') }}">S'inscrire</a>
       <a class="waves-effect waves-light btn light-blue lighten-2" href="{{ url('/login') }}">Se connecter</a>
       @else
       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          {{ Auth::user()->name }}
         <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Deconnecte-toi</a></li>
        </ul>
      </li>
    </ul>
      @endif

    <ul id="nav-mobile" class="side-nav">
     <li><a href="#">Navbar Link</a></li>
   </ul>
   <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 </div>
</nav>
	@yield('content')

<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
          <div class="col l6 s12">
              <h5 class="blue-text text-lighten-2">Action Motard</h5>
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
                &copy; Copyright 2016 / Made with <3 by <a class="blue-text text-lighten-2" href="http://materializecss.com">Thomas Bricquet</a>&nbsp;&amp;&nbsp;<a class="blue-text text-lighten-2" href="http://jeromemouly.com">Jérôme Mouly</a>&nbsp;/&nbsp;Design by <a class="blue-text text-lighten-2" href="http://jeromemouly.com">Jérôme Mouly</a>
            </div>
            <div class="col s12 m4">
                <a class="blue-text text-lighten-2" href="mentions.html">Mentions Légales / Crédits</a>
            </div>
          </div>
        </div>
    </div>
</footer>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/semantic.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
            var message = 'Région : "'
                + region 
                + '" || Id : "'
                + code
          + '"';
             
            alert(message);
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