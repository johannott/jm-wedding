<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maeve & Johanns Wedding</title>
 
  <!-- <link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'> 
 -->
  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  {{ HTML::style('http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo')}}
  {{ HTML::style('assets/css/foundation.css') }}
  {{ HTML::style('assets/css/normalize.css')}}
  {{ HTML::style ('assets/css/main.css')}}

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4TUrE8Fv9jlAwOSui1OV1s4jAjZJVexM&sensor=true"></script>
 
  <script src="{{ URL::asset('assets/js/modernizr.js') }}"></script>

</head>
<body class="jm">
 
  <!-- body content here -->


  <!-- Top bar -->
<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">Maeve & Johann</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section jo-top">
      
      <!-- Left Nav Section -->
      <ul class="right">
        <li><a class="jo" data-scroll-nav="0" >M + J</a></li>
        <li><a data-scroll-nav="1" >Wedding Party</a></li>
        <li><a data-scroll-nav="2" >Getting There</a></li>
        <li><a data-scroll-nav="3" >Accomadation</a></li>
        <li><a data-scroll-nav="4" >RSVP</a></li>
        <!-- <li><a data-scroll-nav="4" >Photos</a></li> -->
      </ul>
    </section>
  </nav>
</div>

<section class="row" data-scroll-index='0'>
  <div class='content ourstory'>
    <span>Maeve & Johann</span>

    <span>28th Dec 2014</span>
  </div>
</section>
 
<section class="row" data-scroll-index='1'>
  <div class='content weddingparty'>
      <div class="panel wp large-12 columns">
          <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-3 large-block-grid-4" data-clearing>
              <li><a class="th" href="/assets/img/wed/JM.jpg"><img src="/assets/img/wed/JM.jpg"></a></li>
              <li><a class="th" href="/assets/img/wed/Johann.jpg"><img src="/assets/img/wed/Johann.jpg"></a></li>
              <li><a class="th" href="/assets/img/wed/Maeve.jpg"><img src="/assets/img/wed/Maeve.jpg"></a></li>
              <li><a class="th" href="/assets/img/wed/Corm.jpg"><img src="/assets/img/wed/Corm.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Keira.jpg"><img src="assets/img/wed/Keira.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Keith.jpg"><img src="assets/img/wed/Keith.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Eimir.jpg"><img src="assets/img/wed/Eimir.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Rhino.jpg"><img src="assets/img/wed/Rhino.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Claire.jpg"><img src="assets/img/wed/Claire.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Greg.jpg"><img src="assets/img/wed/Greg.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Lisa.jpg"><img src="assets/img/wed/Lisa.jpg"></a></li>
              <li><a class="th" href="assets/img/wed/Henry.jpg"><img src="assets/img/wed/Henry.jpg"></a></li>
          </ul>
      </div>
</section>
 
<section class="row" data-scroll-index='2'>
  <div class='content gettingthere large-12 columns'>
      <dl class="tabs row" data-tab>
          <dd class="active small-6 large-6 columns"><a href="#panel1">Event Info</a></dd>
          <dd class="small-6 large-6 columns"><a href="#panel2">Directions</a></dd>
      </dl>
      <div class="tabs-content">
          <div class="content active" id="panel1">
              <p>Wedding Ceremony @ 2 @ Furbo Church</p>
              <p>Dinner & Dancing after @ Salthill Hotel</p>
          </div>
          <div class="content" id="panel2">
              <p>Map will go here</p>
                  <!-- Responsive iFrame -->
      <!--    <div class="flexible-container" id="flexible-container"> -->
          </div>
      </div>

  </div>
</section>
  
<section class="row" data-scroll-index='3'>
  <div class='content accom large-12 small-12 columns'>
     <p>List of hotels & B&Bs</p>
  </div>
</section>

<section class="row" data-scroll-index='4'>
  <div id="rsvp" class='content rsvp large-12 small-12 columns'>
  
   <div class="large-12 small-12 columns">
      {{ $content }}
     </div>   
        
  </div>
</section>
 
<section class="row" data-scroll-index='5'>
  <div class='content photos'>
    <h2>Photos of our special day! Coming soon...</h2>
  </div>
</section>

<footer class="row footer">
  OTT Design Labs 2014
  <!-- <a href="#" class="svg webicon twitter">Follow us on Twitter</a> -->
</footer>
 
  <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
  <script src="{{ URL::asset('assets/js/scrollIt.js') }}"></script>
  <script src="{{ URL::asset('assets/js/flowtype.js') }}"></script>
  <script src="{{ URL::asset('assets/js/foundation.min.js') }}"></script>
  <script src="{{ URL::asset('components/vendor/foundation/js/foundation/foundation.clearing.js') }}"></script>
  <script>
    $(document).foundation();

    $(function() { 
      $.scrollIt({
        upKey: 38,             // key code to navigate to the next section
        downKey: 40,           // key code to navigate to the previous section
        easing: 'linear',      // the easing function for animation
        scrollTime: 600,       // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null    // function(pageIndex) that is called when page is changed
      }); 
    });

    $('body').flowtype({
       minimum   : 300,
       maximum   : 1000,
       minFont   : 12,
       maxFont   : 40,
       fontRatio : 30
    });

  </script>
</body>
</html>