<!DOCTYPE html>
<html>
<head>
	<title>Upcoming Events</title>

	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<link rel="stylesheet" href="css/events.css">
</head>
<body>

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<!-- 
			navigation bar style
		-->
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/gallery.jpg'); background-position: top center; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;">
                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  					<p id="p2">UPCOMING EVENTS</p>
  				</div>
  			</div>
		</nav>

		<!-- First Container -->
		<div class="part2 font-family-sans-serif"><br>
			<p>Now you can keep track of all upcoming events.<br> Both in Saint Ferrer Parish and the Holidays. All events are listed here</p><br>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-offset-1 col-sm-8">
						<ul class="event-list">
              <?php
                  include("db.php");

                  $select=$conn->query("SELECT * FROM event_tbl WHERE event_order='0'");

                  $select1=mysqli_num_rows($select);

                  if($select1>0){
                      while($rw=mysqli_fetch_array($select)){
                      ?>
							<li>                      
                    <time datetime="2014-07-20 0000">
                    <span class="day"><?php echo $rw['event_day']; ?></span>
                    <span class="month"><?php echo $rw['event_month']; ?></span>
                    </time>
                    <div class="info" style="padding:30px;">
                        <h2 class="title"><?php echo $rw['event_title']; ?></h2>
                        <p class="desc"><?php echo $rw['event_desc']; ?></p>
                    </div><br/>
							</li>
              <?php
                          }
                      }
                  ?>
						</ul>
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