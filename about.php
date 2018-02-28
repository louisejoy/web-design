<!DOCTYPE html>
<html>
<head>
	<title>About</title>

	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<link rel="stylesheet" href="css/about.css">
</head>
<body>

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<!-- 
			navigation bar style
		-->
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/about.jpg'); background-position: center top; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%;">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;">
                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  					<p id="p2">ABOUT</p>
  				</div>
  			</div>
		</nav>

		<!-- First Container -->
		<div class="container">
  			<div class="row">
				<nav class="col-md-2">
			      <ul class="nav nav-pills nav-stacked" data-offset-top="205">
			      	<li style="margin-left: 10px; color: #545454; font-size: 20px;">About</li>
			        <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="about.php">WHO ARE WE?</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="payment.php">PAYMENT</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="contact-us.php">CONTACT US</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10">
					<h4>Diyosesis ng Cabanatuan</h4>
			        <h1 style="font-family: Edwardian Script ITC; font-size: 60px;">Parokya ng San Vicente Ferrer</h1>
			        <h4>Mayapyap Sur Cabanatuan</h4><br>
			        
			        <!--
			           	INFO
			        -->
				    <div style="text-align: left;">
				        <div class="container-fluid">
				        	<p>
				        		&emsp;&emsp;&emsp;&emsp;&emsp;Ang Parokya ni San Vicente Ferrer ay na-itatag noong ika-3 ng hulyo 1974 ng Lubhang kgg. Vicente P. Reyes, DD Obispo ng Cabanatuan. PASIMULA NOONG 1974 Nnungkulang bilang kura Paroko ang mga sumusunod.
				        	</p>
				        </div>
				        <div class="container-fluid" style="color: red;text-align: center">
				        	<p class="row">
				        		<div class="col-xs-6">
					        		Rev. Fr. Pedro E. Valencia	<br>	
					        		Rev. Fr. Oscar B. Palma  <br>	
					        		Rev. Fr. Francisco O. Algas	 <br>	
					        		Rev. Fr. Apolo De Guzman  <br>
					        		Rev. Fr. Cezar M. Bastol  <br>
					        		Rev. Fr. Rommel Javaluyas	<br>	
					        		Rev. Fr. Julius Belea	<br>		
					        		Rev. Fr. Perfecto P. Aito, Jr.	<br>
					        	</div>	
					        	<div class="col-xs-6">
					        		1974 - 1982 <br>
					        		1982 - 1985 <br>
					        		1985 - 1988 <br>
					        		1988 - 1995 <br>
					        		1995 - 1998 <br>
					        		1998 - 2001 <br>
					        		2001 - 2004 <br>
					        		2004 - 2008 <br>
					        	</div>
				        	</p>
				        </div><br>
				        	<p>
					           &emsp;&emsp;&emsp;&emsp;&emsp;Ang malaking pagbabago sa istraktura ng Simbahan ay pinasimulan ni <strong>Fr. Julius Belen</strong>, at ipinagpatuloy ng Butihing Pari na si <strong>Fr. Joey B. Alto</strong>, sa tulong ng mga mananampalataya sa Parokya ng San Vicente Ferrer. Patuloy na lumago at naisaayos ang mga ibat ibang pagawain sa simbahan sa tulong at pamamahala ni <strong>Bro. Arturo C. Mandrid</strong>, Bilang Parish Project Coordinator.
					        </p><br>

					        <p>
					        	&emsp;&emsp;&emsp;&emsp;&emsp;Ang bagong altar sa Parokya ng Mayapyap ay sa pagsusumikap ni <strong>Fr. Joey B. Alto</strong> at <strong>Bro. Arturo C. Madrid</strong> kasama ang pamayanan ng Mayapyap, katuwang ang <strong>Barangay Pastoral Council</strong>, <strong>WESsTY</strong> ng San Vicente Ferrer at Butihing Mananampalatayang Kristyano sa Parokya ng <strong>San Nicolas de Tolentino Cathedral</strong> ng Cabanatuan, <strong>Sta. Rosa Lima ng Sta. Rosa</strong>, Nueva Ecija, <strong>Holy Cross Parish</strong> ng Gen. Tinio, Nueva Ecija.
					        </p><br>

					        <p>
					        	&emsp;&emsp;&emsp;&emsp;&emsp;Binasbasan ng Lubhang Kgg. Sofronio A. Bancud, SSS, DD. OBISPO NG DIYOSESIS NG CABANATUAN, at Rev. Fr. Joey Alto. Kura Paroko ni San Vicente Ferrer, Mayapyap Sur Cabanatuan City, ngayong ika-23, ng PEBRERO, 2008.
					        </p><br>
					</div>
			    </div>
			</div>
		</div>

		<!-- 
			footer
		-->
		<?php include('footer.php'); ?>
	</div>
</body>
</html>