<?php 
	session_start();
 ?>
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
	<link rel="stylesheet" href="css/contact-us.css">
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
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/contact-us.jpg'); background-position: center top;background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
			<!-- 
				buttons 
			-->
  			<div id="bg-overlay" class="container-fluid" style="position: relative;">
                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  					<p id="p2">CONTACT US</p>
  				</div>
  			</div>
		</nav>

		<!-- First Container -->
		<div class="container font-family-sans-serif">
  			<div class="row">
				<nav class="col-md-2">
			      <ul class="nav nav-pills nav-stacked" data-offset-top="205">
			      	<li style="margin-left: 10px; color: #545454; font-size: 20px;">About</li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="about.php">WHO ARE WE?</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="payment.php">PAYMENT</a></li>
			        <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="contact-us.php">CONTACT US</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10">
					<h2>Location & Contact Information</h2>
			        <h5>Phone: 	(+63)907 261 5579</h5>
			        <h5>Address: Purok Everlasting Cabanatuan City</h5>
			        <br>
			        
					<!-- <div id="map"></div> -->
					<div>
		   				<img src="resources/map.png"><br><br>
		   			</div>

					<br><hr><br>

					<h2>Send Us A Message</h2><br>
					<form action="" method="POST" class="form-horizontal" role="form">
					 	<div class="form-group">
					 		<label for="inputUser" class="col-md-1 control-label">Name*
                    		</label><br><br>
							<div class="col-sm-4">
		                        <input name="fn" type="text" class="form-control" id="inputUser" placeholder="First Name" required="">
		                    </div>
		                    <div class="col-sm-4">
		                        <input name="ln" type="text" class="form-control" id="inputUser" placeholder="Last Name" required="">
		                    </div>
						</div><br>
						<div class="form-group">
		                    <label for="inputPass" class="col-md-8 control-label" style="text-align: left">Email Address*
		                    </label><br><br>
		                    <div class="col-sm-4">
		                        <input name="email" type="email" class="form-control" id="inputPass" placeholder="Email" required="">
		                    </div>
		                </div><br>
		                <div class="form-group">
		                    <label for="inputPass" class="col-md-8 control-label" style="text-align: left">Subject*
		                    </label><br><br>
		                    <div class="col-sm-4">
		                        <input name="subj" type="text" class="form-control" id="inputPass" placeholder="Subject" required="">
		                    </div>
		                </div><br>
		                <div class="form-group">
						    <label for="comment" class="col-md-8 control-label" style="text-align: left">Message*</label><br><br>
						    <textarea class="form-control" name="cmnt" rows="5" id="comment" placeholder="Tell us what's on your mind" required="" style="width: 70%; margin-left: 15px; resize: none"></textarea>
					    </div>
						<input type="submit" value="Send" name="send" class="btn btn-default"/>
					</form>
			    </div>
			</div>
		</div>

		<?php 
			include('db.php');
            if(isset($_POST['send'])){
                $fn = $_POST['fn'];
                $ln = $_POST['ln'];
                $email = $_POST['email'];
                $subject = $_POST['subj'];
                $comment = $_POST['cmnt'];

		        $cmnt="INSERT INTO mssg_tbl VALUES ('','$fn','$ln','$email','$subject','$comment',NOW(),0)";
		        $cmnt1=$conn->query($cmnt);
		           
		        if(!$cmnt1){
		            die("<script>
		                    alert('Error encountered, Reloading page');
		                    window.location.href='contact-us.php';
		                    </script>");
		        }else{
		            die("<script>
		                    alert('Your comments/suggestions are succesfully sent');
		                    window.location.href='contact-us.php';
		                    </script>");
		        } 
            }
        ?>

		<!-- 
			footer
		-->
		<?php include('footer.php'); ?>
	</div>
</body>
</html>