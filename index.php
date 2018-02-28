<!DOCTYPE html>
<html>
<head>
	<title>Saint Vincent Ferrer Parish</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- responsive menu -->
	<script src="js/jquery-1.12.0.min.js"></script>
  	<script src="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  	<!-- google map api -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="js/googlemap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</head>
<body>

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<!-- 
			navigation bar style
		-->
        <nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/home.jpg'); background-position: bottom center; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;">
	            <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>                        
			        </button>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			        <ul class="nav navbar-nav navbar-right">
			            <!--
			                Dropdowns
			            -->
			            <li class="dropdown"><a style="color: white;" href="about.php">ABOUT</a>
			                <ul class="dropdown-content list-unstyled ">
			                    <li><a href="about.php">WHO ARE WE</a></li>
                    			<li><a href="payment.php">PAYMENT</a></li>
			                    <li><a href="contact-us.php">CONTACT US</a></li>
			                </ul>
			            </li>
			            <li class="dropdown"><a style="color: white;" href="mass.php">RESERVATIONS</a>
			                <ul class="dropdown-content list-unstyled ">
                    			<li><a href="mass.php">MASS</a></li>
			                    <li><a href="wedding.php">WEDDING</a></li>
			                    <li><a href="baptism.php">BAPTISM</a></li>
			                    <li><a href="funeral.php">FUNERAL</a></li> 
			                </ul>
			            </li>
			            <li><a style="color: white;" href="gallery.php">GALLERY</a></li>
			            <li><a style="color: white;" href="events.php">UPCOMING EVENTS</a></li>
			            <li class="dropdown"><a style="color: white;" href="admin-login.php">MEMBERS</a>
			                <ul class="dropdown-content list-unstyled " style="min-width: 118px;">
			                    <li><a href="admin-login.php">ADMIN</a></li>
			                </ul>
			            </li>
			        </ul>
			    </div>
  				<!-- 
  					title 
  				-->
  				<div class="main-title">
	  				<p id="p1">WELCOME TO THE</p>
	  				<p id="p2">SAINT VINCENT FERRER PARISH</p>
	  				<!-- <button type="button" class="btn btn-default btn-lg">WHO ARE WE?</button> -->
  				</div>
  			</div>
		</nav>
		<!-- end ng tile bar -->

		<!-- First Container -->
		<div class="part2">
			<h3>Your presence is welcome</h3>
	        <h1 style="font-family: Edwardian Script ITC; font-size: 60px;">Parokya ng San Vicente Ferrer</h1>
	        <h4>Mayapyap Sur Cabanatuan</h4><br>
	        
	        <!--
	            MADE WITH <3 AND SWEAT
	        -->
	        <div class="container-fluid">
		        <p>
		           Ang malaking pagbabago sa istraktura ng Simbahan ay pinasimulan ni <strong>Fr. Julius Belen</strong>, at ipinagpatuloy ng Butihing Pari na si <strong>Fr. Joey B. Alto</strong>, sa tulong ng mga mananampalataya sa Parokya ng San Vicente Ferrer. Patuloy na lumago at naisaayos ang mga ibat ibang pagawain sa simbahan sa tulong at pamamahala ni <strong>Bro. Arturo C. Mandrid</strong>, Bilang Parish Project Coordinator.
		        </p>

		        <p>
		        	This was made for the reservation of dates in Wedding, Baptismal and Funeral Mass of Saint Vincent Ferrer Parish. Also highlighting the upcoming events happening in Saint Vincent Ferrer Parish.
		        </p>

	        </div>
	       
	        
	        <br><hr><br>
	        <!--
	            LOCATION
	        -->
	        <h1>Location & Meeting Times</h1>
	        <p>Mayapyap Cabanatuan City</p>
	        <h3>
	            Sunday 6am-7am & 8am-9am
	        </h3><br>
	        
			<!-- <div id="map"></div> -->
   			<div>
   				<img src="resources/map.png"><br><br>
   			</div>

	        
		</div>

		<!-- 
			footer
		-->
		<?php include('footer.php'); ?>
	</div>
</body>
</html>