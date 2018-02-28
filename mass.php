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
	  					<p id="p2">THANKSGIVING MASS</p>
  				</div>
  			</div>
		</nav>

		<!-- First Container -->
		<div class="container font-family-sans-serif">
  			<div class="row">
				<nav class="col-md-2">
			      <ul class="nav nav-pills nav-stacked" data-offset-top="205">
			      	<li style="margin-left: 10px; color: #545454; font-size: 20px;">Reservations</li>
                    <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="mass.php">MASS</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="wedding.php">WEDDING</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="baptism.php">BAPTISM</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="funeral.php">FUNERAL</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10">
					<!-- ========== FUNERAL INTRO ========= -->
					
					<h2>Happy Thanksgiving</h2><br>
					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;Thanksgiving is the time of the year to celebrate with friends and family so dear. 
						Come join us for dinner and cocktails and let us express a warm thank you!
						We request the pleasure of your company at the Thanksgiving dinner and dessert served at our home. Your gracious presence is sure to make our celebration a special one!
						It's Thanksgiving and the perfect time to count the many blessings in our lives! Please be our guest as we celebrate with a holiday meal and drinks. You're cordially invited to share in the harvest dinner!.
						</p>
					</div>
					<div class="row">
						<div class="col-md-7 col-md-offset-3">
						    <div class="thumbnail">
							    <img src="resources/backgrounds/thanks.jpg" alt="thanksgiving" style="width:100%">
							    <!-- <div class="caption">
							    	<p></p>
							    </div> -->
						    </div>
						</div>
					</div>

					<p>&emsp;&emsp;&emsp;&emsp;&emsp;As we celebrate this time of the year and count the blessings we've received, please join us for a harvest dinner with turkey roast on Thanksgiving. Your presence on this festive occasion is sure to delight us!. If you have more questions contact us <a href="contact-us.php">here</a>.</p><br>

                    <a type="button" class="btn btn-default btn-lg" href="massform.php" style="display: block;margin-left: auto;margin-right: auto">Mass Form <span class="glyphicon glyphicon-edit"></span></a>
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