<!DOCTYPE html>
<html lang="en">
<head>
	<title>Caribbean Delight</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
  <div class="bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/First-View.jpg');">
  	<header id="navbar">
  		<div class="container">
  			<div class="row">
  				<nav class="col-sm-12 navigation">
  					<ul class="nav justify-content-center">
    						<li class="nav-item">
      						<a class="nav-link" id="home" href="#">Home</a>
    						</li>
    						<li class="nav-item">
      						<a class="nav-link" id="menuN" href="#menu">Menu</a>
    						</li>
    						<li class="nav-item hid">
     							<a class="nav-link" href="#drinks">Drinks</a>
    						</li>
    						<li class="nav-item hid">
      						<a class="nav-link" href="#">Catering</a>
    						</li>
    						<li class="nav-item hid">
      						<a class="nav-link" href="#">About</a>
    						</li>
    						<li class="nav-item hid">
      						<a id="myBtnS" class="nav-link" href="#">Contact</a>
    						</li>
                <li class="nav-item hid">
                  <div class="vSeparator"></div>
                </li>
                <li class="nav-item"> 
                  <div class=" col-sm-12 hid">
                    <img class="display-img-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-receiver.png">
                    <img class="display-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-receiver-blue.png">
                    <p>(919) 243-1618</p>
                  </div>
                  <div class="col-sm-12 hid">
                    <img class="display-img-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png">
                    <img class="display-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo-blue.png">
                    <p>
                    <a target="_blank" style="text-decoration: none;" href="https://www.facebook.com/CaribbeanDelight.NC/" class="especial-a">
                      /CaribbeanDelight.NC
                    </a>
                    </p>
                  </div>
                  <a target="_blank" class="fbMo" style="text-decoration: none;" href="https://www.facebook.com/CaribbeanDelight.NC/">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png">
                  </a>
                </li>
  					</ul>
  				</nav>
  			</div>
  		</div>
  	</header>

    <div class="pos-f-t mobile-navigation">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h4 class="text-white">Main Menu</h4>
        <span class="text-muted">Call us on (919) 243-1618
          <div class="rrssB">
            <a class="nav-link rs" href="https://www.facebook.com/Gruptech-Cloud-Innovations-162171117764577/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="facebook logo">
            </a>
            <a class="nav-link rs psh" href="https://www.instagram.com/gruptechci/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-logo.png" alt="instagram logo">
            </a>
        </div>
        </span>
        
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" id="homeM" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="menuM" href="#menu">Menu</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>