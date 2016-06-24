@extends('master')

@section('content')
<div id="index-banner" class="parallax-container img-hero overlay">
    <div class="section no-pad-bot">
      <div class="container text-hero">
          <br><br>
          <h1 class="header center blue-text text-lighten-2">Actions-Motards</h1>
          <div class="row center">
              <h5 class="header col s12 light">Nulla vel massa quis mi pellentesque rutrum ac vitae ligula. Vivamus id augue vulputate, sodales risus id, commodo erat. Integer nibh augue, eleifend in convallis fermentum, facilisis eget nisi.</h5>
          </div>
          <div class="row center">
              <a href="#about" id="download-button" class="btn-large waves-effect waves-light grey darken-4 blue-text text-lighten-2 js-scrollTo">En Savoir Plus ...</a>
          </div>
          <div class="row center"><a href="#about" class="js-scrollTo"><i class="medium material-icons icon-home">play_for_work</i></a></div>
      </div>
    </div>
    <div class="parallax"><img src="images/biker.jpg" alt="Unsplashed background img 1"></div>
</div>

<section id="about">
<div class="container">
  <div class="section">

    <div class="row menu-scroll">
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
</section>

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

<div class="container carte">
    <div class="section">

      <div class="row center">
        <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Les Régions</h4>        
            <div id="francemap" class="carte_france" style="width: 800px; height: 800px;"></div>
        </div>
      </div>
    </div>
</div>


<div class="parallax-container valign-wrapper overlay form-contact">
    <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">            
                <h2 class="contact-title">Associations Contacter-Nous</h2>
          </div>
          <div class="row menu-scroll">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Nom de l'Association</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Sujet</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Message</label>
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
        <div class="parallax"><img src="images/harley_sun.jpg" alt="Unsplashed background img 3"></div>
  </div>
</div>
@endsection
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
