<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Carlos Fco. Villaseñor A. - Softwae Engineer / Photographer</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <div class="intro-text">
              <h1>Carlos Villaseñor</h1>
              <p>Softwae Engineer / Photographer </p>
              <a href="#proyects" class="btn btn-custom btn-lg page-scroll">Proyects</a> 
			  <a href="#portfolio" class="btn btn-custom btn-lg page-scroll">Portfolio</a> 
			  <a href="#contact" class="btn btn-custom btn-lg page-scroll">About Me</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Proyects Section -->
<div id="proyects">
  <div class="container">
    <div class="section-title">
      <h2>Proyects</h2>
    </div>
    <div class="categories">
      <ul class="cat2">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".app">Play Store</a></li>
            <li><a href="#" data-filter=".web">Web</a></li>
            <li><a href="#" data-filter=".others">Others</a></li>
          </ol>
        </li>
      </ul>
    </div>
	
	
	
    <div class="row">
      <div class="portfolio-items2">
        <div class="col-sm-4 col-md-5 web">
          <div class="portfolio-item2">
			  <h3>Introducction</h3>
			  <iframe width="448" height="252" src="https://www.youtube.com/embed/GQTMXdsRuPM" frameborder="0" allowfullscreen></iframe>
			  <p>Some of the proyects and tecnologies that i have been working with.</p>
          </div>
        </div>
        <div class="col-sm-4 col-md-5 app">
          <div class="portfolio-item2">
		  <h3>Asteroids</h3>
		  <iframe width="448" height="252" src="https://www.youtube.com/embed/AQlGGCx6nwI" frameborder="0" allowfullscreen></iframe>  
          <p>This is a game for google VR where the main objective is to save a grup of planets from the incoming asteroids.</p>  
		 </div>
        </div>    
      </div>
    </div>

<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".ballet">Ballet</a></li>
            <li><a href="#" data-filter=".pinup">Pin Up</a></li>
            <li><a href="#" data-filter=".adipiscing">Adipiscing Elit</a></li>
          </ol>
        </li>
      </ul>
    </div>
    <div class="row">
	<div class="portfolio-items">
		<?php
		$dir = glob("img/portfolio2/ballet/{*.JPG}",GLOB_BRACE );
		foreach ($dir as $value)
		{
		?>
        <div class="col-sm-6 col-md-4 ballet">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo $value; ?>" title="<?php echo $value; ?>" data-lightbox-gallery="gallery1">
			
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Ballet</h4>
                  </div>
                </div>
              </div>
              <img src="<?php echo $value; ?>" class="img-responsive" alt="<?php echo $value; ?>"> </a> 
			 </div>
          </div>
        </div>
		<?php
		}
		?>
		
		<?php
		$dir = glob("img/portfolio2/pinup/{*.JPG}",GLOB_BRACE );
		foreach ($dir as $value)
		{
		?>
        <div class="col-sm-6 col-md-4 pinup">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo $value; ?>" title="<?php echo $value; ?>" data-lightbox-gallery="gallery1">
			
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Pin Up</h4>
                  </div>
                </div>
              </div>
              <img src="<?php echo $value; ?>" class="img-responsive" alt="<?php echo $value; ?>"> </a> 
			 </div>
          </div>
        </div>
		<?php
		}
		?>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <h2>About Me</h2>
    <div class="col-md-6">
      <div class="section-title">
        <div class="row"> <img src="img/about.jpg" class="img-responsive pull-left" alt="">
          <p>I am a graduate student fron ESCOM IPN from México city, i am pasionate of tecnology algays looking for new knowledge.</p>
          <p>I started with photography in colage as a hobby and selflern de basis then enter to couses to espanf my potencial, i love to share the beauty of life thru my photos.</p>
          <div class="social">
            <ul>
              <li><a href="https://www.facebook.com/carlosfrancisco.villasenoraltamirano"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/sanson_04"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/sanson_04/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.pinterest.com.mx/carlosfva_1990/"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
      <div class="section-title">
        <p>For inquiries or collaborations please contact me by email at <strong>carlosfva1990@gmail.com</strong></p>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>&copy; 2018 Carlos Francisco Villaseñor Altamirano All rights reserved. logo designed based on Freepik work. </p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
