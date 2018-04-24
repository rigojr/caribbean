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
     							<a class="nav-link" href="#">Drinks</a>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-receiver.png">
                    <p>(919) 243-1618</p>
                  </div>
                  <div class="col-sm-12 hid">
                    <a target="_blank" style="text-decoration: none;" href="https://www.facebook.com/CaribbeanDelight.NC/">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png">
                      /CaribbeanDelight
                    </a>
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