@extends('master')

@section('content')
<div id="index-banner" class="parallax-container img-hero overlay">
  <div class="section no-pad-bot">
   <div class="container text-hero">
     <br><br>
     <h1 class="header center blue-text text-lighten-2">Action - Motard</h1>
     <div class="row center">Chaque mois des sorties motos amicales sont proposés en faveur d’association pour but de récolter des fonds. Actions motard, c’est avant tout une communauté de motard qui a pour but d’être les héros a deux roues pour ceux qui en ont besoin.
    </div>
    <div class="row center">
      <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light grey darken-4 blue-text text-lighten-2">En Savoir Plus ...</a>
    </div>
    <br><br>

  </div>
</div>
<div class="parallax"><img src="images/biker.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h4>A Propos</h4>
      </div>
    </div>
    <!--   Icon Section   -->
    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
          <h5 class="center">Speeds up development</h5>

          <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">group</i></h2>
          <h5 class="center">User Experience Focused</h5>

          <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
          <h5 class="center">Easy to work with</h5>

          <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="parallax-container valign-wrapper overlay">
  <div class="section no-pad-bot">
   <div class="container">
     <div class="row center">
      <h5 class="header col s12 blue-text text-lighten-2">A modern responsive front-end framework based on Material Design</h5>
    </div>
  </div>
</div>
<div class="parallax"><img src="images/biker_kid.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
  <div class="section">

   <div class="row">
    <div class="col s12 center">
     <h3><i class="mdi-content-send brown-text"></i></h3>
     <h4>Les Régions</h4>
     <img src="images/carte_france.jpg" class="carte_france">
   </div>
 </div>

</div>
</div>


<div class="parallax-container valign-wrapper overlay">
  <div class="section no-pad-bot">
   <div class="container">
     <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="parallax"><img src="images/harley_sun.jpg" alt="Unsplashed background img 3"></div>
</div>
</div>
@endsection
