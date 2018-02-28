<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>

	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<link rel="stylesheet" href="css/reservation.css">
</head>
<body>

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<!-- 
			navigation bar style
		-->
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/reserve3.jpg'); background-position: center center; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;color: #f5f6f7;">
                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  					<p id="p2">BAPTISM</p>
  				</div>
  			</div>
		</nav>

		<!-- First Container -->
		<div class="container font-family-sans-serif">
  			<div class="row">
				<nav class="col-md-2">
			      <ul class="nav nav-pills nav-stacked" data-offset-top="205">
			      	<li style="margin-left: 10px; color: #545454; font-size: 20px;">Reservations</li>
                    <li style="font-size: 13px; padding: 0px 0px"><a href="mass.php">MASS</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="wedding.php">WEDDING</a></li>
			        <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="baptism.php">BAPTISM</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="funeral.php">FUNERAL</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10">
					<!-- ========== BAPTISM INTRO ========= -->
					<h2>This is the part where you find out who you are.</h2><br>
					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;Baptism does three things: it initiates us into the grace of Jesus Christ; it is the sign of our unity with Christ’s community, the church; and it expresses our desire to be disciples of Christ. Just as the birth of a child is important to the entire family, the baptism of the child is important to the parish family.</p>
					</div>

					<div class="row">
						<div class="col-md-7 col-md-offset-3">
						    <div class="thumbnail">
							    <img src="resources/baptism/baptism2.jpg" alt="Lights" style="width:100%">
							    <!-- <div class="caption">
							    	<p></p>
							    </div> -->
						    </div>
						</div>
					</div>

					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;For this reason, baptisms at Saint Vincent Ferrer Parish Church are typically held on Sundays during our regular mass times. While we realize this isn’t always possible, we do ask that you try to schedule your child’s baptism three months in advance. Baptismal preparation sessions are held monthly for new parents. To schedule a baptism, make arrangements for baptism preparation sessions just fill up the form below. If you have more questions contact us <a href="contact-us.php">here</a>.</p>
					</div><br>  
					<!-- ======== BAPTISM FORM ========= -->
					 <a type="button" class="btn btn-default btn-lg" href="baptismform.php" style="display: block;margin-left: auto;margin-right: auto">Baptism Form <span class="glyphicon glyphicon-edit"></span></a>
					<!-- ========== BAPTISM FORM ENDS =========== -->
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