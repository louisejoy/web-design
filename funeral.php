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
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/reserve.jpg'); background-position: center center; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;color: #f5f6f7;">
                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  					<p id="p2">FUNERAL</p>
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
			        <li style="font-size: 13px; padding: 0px 0px"><a href="baptism.php">BAPTISM</a></li>
			        <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="funeral.php">FUNERAL</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10">
					<!-- ========== FUNERAL INTRO ========= -->
					
					<h2>Honoring and remembering every life.</h2><br>
					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;Losing a loved one will never be easy. But Saint Vincent Ferrer Parish eases the burden not only by what we do, but by what we say and how we say it. Always providing solace in our personal interactions with our customers, we go a step further by inviting them to take charge of a process that before left so many feeling helpless.

						<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;By brightening the tone of our message and speaking in a fresh and unexpected way, we ease the trepidation surrounding the topic of death and create a dialogue that empowers people.

						<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;By using modest humor, conversational tone and language that is bold, honest and smart, we not only get people to stop avoiding thinking about the inevitable, we inspire them to write a final chapter that is as beautiful as the ones that came before it.
						</p>
					</div>
					<div class="row">
						<div class="col-md-7 col-md-offset-3">
						    <div class="thumbnail">
							    <img src="resources/funeral/funeral.jpg" alt="Lights" style="width:100%">
							    <!-- <div class="caption">
							    	<p></p>
							    </div> -->
						    </div>
						</div>
					</div>

					<p>&emsp;&emsp;&emsp;&emsp;&emsp;While we recognize that there are a lot of options out there, there is only one opportunity to select the right funeral home. At a time when emotions are tender, receiving guidance by someone who has been around and understands your needs can help you find the perfect service. If you have more questions contact us <a href="contact-us.php">here</a>.</p><br>

					<a type="button" class="btn btn-default btn-lg" href="funeralform.php" style="display: block;margin-left: auto;margin-right: auto">Funeral Form <span class="glyphicon glyphicon-edit"></span></a>
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