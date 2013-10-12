<!DOCTYPE HTML>
<html>
     <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="basic-jquery-slider/bjqs.css">
     <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
     <link href="favicon.ico" rel="shortcut icon">
     <link rel="apple-touch-icon" href="favicon.ico" sizes="57x57"> 
     <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
     <script src="basic-jquery-slider/js/bjqs-1.3.min.js"></script>
     <script type="text/javascript">
       document.createElement("'header'");
       document.createElement("'nav'");
       document.createElement("'section'");
	    document.createElement("'aside'");
       document.createElement("'footer'");
     </script>
     <!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
     <title>Ajualuv : Ascension Essentials</title>
     </head>

     <body>
<div class="wrapper clearfix">
       <header class="clearfix">
    <div class="header-images"> <img src="img/reiki-symbols-left.jpg" class="power-left hide" alt="reiki power symbols">
           <h1><span>Ajualuv Ascension Essentials</span><img src="img/ajualuv-logo.gif" class="logo" alt="logo image"></h1>
           <img src="img/reiki-symbols-right.jpg" class="power-right hide" alt="reiki power symbols"> </div>
    <nav>
           <ul class="nav-left">
        <li class="current"><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="http://ajualuv.me" target="_blank">BLOG</a></li>
        <li><a href="events.html">EVENTS</a></li>
      </ul>
           <ul class="nav-right">
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="testimonials.html">TESTIMONIALS</a></li>
        <li><a href="http://ajualuv.storenvy.com" target="_blank">SHOP</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
         </nav>
  </header>
       <div class="content"> 
    <!--home carousel-->
    <div id="banner-fade">
           <ul class="bjqs">
        <li><img src="basic-jquery-slider/img/slider-shine-bright.jpg" title="Be like the sun - rise and shine bright!" alt="sunny photo montage"></li>
        <li><a href="services.html"><img src="basic-jquery-slider/img/slider-services.jpg" title="Treat your mind, body, and spirit to a relaxing energy healing session. Click image for more details." alt="energy healing montage"></a></li>
        <li><a href="services.html"><img src="basic-jquery-slider/img/slider-art-therapy.jpg" title="Meditate and create. Inquire into our individual and group art therapy programs. Click image for more details." alt="art-therapy-montage"></a></li>
        <li><a href="http://ajualuv.storenvy.com"><img src="img/shop-slider-image.jpg" title="Find goddess gear, personalized rituals, and grounding tools at Ajualuv's Ascension Essentials on Storenvy! Click image to shop." alt="images of ajualuv products"></a></li>
      </ul>
         </div>
    <!--end home carousel-->
    <div class="mantra-box clearfix"><img src="img/quote-pic-250x142.jpg" class="shadow" alt="ajua's mantra photo">
           <p class="mantra-quote">"Your body is your temple, fill it with love" - Ajua A. Hawkins</p>
         </div>
  </div>
       <!--/*end content*/--> 
     </div>
<!--end wrapper-->
<?php include ('_footer.php'); ?>
<script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 320,
            width       : 1000,
            responsive  : true
          });
        });
      </script>
</body>
</html>
