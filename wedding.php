<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>

	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- show/hide content -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<!-- css -->
	<link rel="stylesheet" href="css/reservation.css">
</head>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<body>

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<!-- 
			navigation bar style
		-->
		<nav class="navbar navbar-default text-center" style="background:url('resources/backgrounds/reserve3.jpg'); background-position: center center; background-attachment: fixed; background-repeat: no-repeat;background-size: 100%">
            <div id="bg-overlay" class="container-fluid" style="position: relative;">

                <?php include('header.php'); ?>
  				<!-- 
  					title 
  				-->
  				<div class="main-title" style="color: white;">
	  	            <p id="p2">WEDDING</p>
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
			        <li class="active" style="font-size: 13px; padding: 0px 0px"><a href="wedding.php">WEDDING</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="baptism.php">BAPTISM</a></li>
			        <li style="font-size: 13px; padding: 0px 0px"><a href="funeral.php">FUNERAL</a></li>
			      </ul>
			    </nav>

				<div class="part2 col-md-10" style="text-align: left;">
					<!-- ========== WEDDING INTRO ========= -->
					<h2 style="text-align: center;">Wedding Venue</h2><br>
					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;Those looking for a small but beautiful wedding venue will adore Saint Vincent Ferrer Parish! If you lived in Mayapyap Cabanatuan City and looking for a place to hold your wedding then, this church is the nearest to your home. It was built on july 3, 1974 and still stands today with a few renovations here and there. The former church is a stunning setting for your ceremony.</p>
					</div>

					<div class="row">
						<div class="col-md-7 col-md-offset-3">
						    <div class="thumbnail">
							    <img src="resources/wedding/wed3.jpg" alt="Lights" style="width:100%">
							    <!-- <div class="caption">
							    	<p>Saint Vincent Ferrer Parish</p>
							    </div> -->
						    </div>
						</div>
					</div>

					<div class="container-fluid" style="text-align: left">
						<p>&emsp;&emsp;&emsp;&emsp;&emsp;If you've made up your mind to hold your wedding in this church, you are required to fill up the form below. Please don't leave any boxes blank especially the phone number so we can inform you if there are any updates about your transaction and to verify if you are a true client. If you have more questions contact us <a href="contact-us.php">here</a>.</p><br>
					</div>

					<!-- ======== WEDDING FORM ========= -->
					
                    <div class="form-group">
                        <a class="btn btn-default col-md-12" style="color: black;" data-toggle="collapse" href="#collapseContent1" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-exclamation-sign"></span> MGA DAPAT ISUMITENG PAPELES:</a>
						<div class="collapse col-md-12" id="collapseContent1">
							<div class="card card-body col-md-12">
                                <h4> 1,NSO/PSA Birth Certificate (Bagong Certificate)</h4>
	                            <h4> 2,Baptismal Certficate (for Marriage purpose,Pagkakabinyag)</h4>
	                            <h4> 3,Confirmation Certificate (Pagkukumpil for Marriage purpose)</h4>
	                            <h4> 4,CENOMAR(Certificate of No Marriage)</h4>
	                            <h4> 5,Marriage License</h4>
	                            <h4> 6,Marriage Banns (no less than three (3)weeks)</h4>
	                            <h4> 7,List of Sponsor(invitation)</h4>
	                            <h4> 8,2x2 picture (Bride and Groom 3 copies each)</h4>
	                            <h4> 9,Sedula</h4>
	                            <h4> 10,Permit from respective parish</h4>
	                            <h4> 11,Certificate of no record if not yet baptized and confimed</h4>
							</div>
						</div><br>
					</div><br>
					<div class="form-group">
						<a class="btn btn-default col-md-12" style="color: black;" data-toggle="collapse" href="#collapseContent2" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-exclamation-sign"></span> MGA DAPAT DALUHANG SEMINAR: </a>
						<div class="collapse col-md-12" id="collapseContent2">
							<div class="card card-body col-md-12">
	                            <h4>1, Seminar of Pre-cana</h4>
	                            <h4>2, Seminar of Confimation,Baptism</h4>
	                            <h4>3, Confirmation and Baptism</h4>
	                            <h4>4, Kumpisal</h4>
	                            <h4>5, Interview by the Parish </h4>
                        	</div>
						</div><br>
					</div><br>
					<div class="form-group">
						<a class="btn btn-default col-md-12" style="color: black;" data-toggle="collapse" href="#collapseContent3" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-exclamation-sign"></span> 
						    MGA DAPAT IHANDA SA KASAL - Belo, Kurdon <br>MGA DAPAT BAYARAN
						</a>
						<div class="collapse col-md-12" id="collapseContent3">
							<div class="card card-body col-md-12">
	                            <h4>1, Nupital Wedding(No Mass)</h4>
	                            <h4>2, Nupital with mass</h4>
	                            <h4>3, Certificae</h4>
	                            <h4>4, Organist</h4>
	                            <h4>5, Kumpil</h4>
	                            <h4>6, Binyag</h4>
	                            <h4>7, Kandila</h4>
	                            <h4>8, Singer</h4>
	                            <h4>9, Seminar of Pre-Cana</h4>
	                            <h4>10, Video,VCR,(Kung gagamit ng kuryente)</h4>
	                        </div>
						</div><br>
					</div><br><br>

                    <dt><h4 style="font-family:Arial Black;">Paalala:</h4></dt>
                    <h5>1, Ang hindi makadalo sa mga seminar, hindi makapagpasa ng anumang kinakailangang papeles at hindi makakapag bayad sa takdang araw bago ang kasal ay maaring hindi maikasal.</h5>
                    <h5>2, Dumating ng Labinglimang minuto bago ikasal upang hindi maatrasado ng kasal(15 minutes before the wedding). Kayo din po ay mayroon lamamg ma 50 minutes sa loob ng simbahan para sa picture taking at upang maihanda pa ang mga susunod pang schedule sa parokya.</h5>
                    <h5>3, Ang mga ring bearers,flower girl ay dapat limang taong gulang pataas at ng hindi na ito inaakay ng magulang sa bridal enthourage. Upang maiwasan din ang pagka atrasado ng kasal.</h5>
                    <h5>4, Ang mga ninong ata ninang , dapat ito ay may asawa na, at binyagan sa katoliko.</h5>
                    <h5>5, Pakisabihan din po ang mga dadalo sa kasal na panatilihin ang katahimikan sa loob ng simbahan upang maging solemno ang sakramento, gayundin ang pagkain sa loob ng simbahan ay mahigpit na pinagbabawal. </h5><br>
                    
                    <a type="button" class="btn btn-default btn-lg" href="weddingform.php" style="display: block;margin-left: auto;margin-right: auto">Wedding Form <span class="glyphicon glyphicon-edit"></span></a>
                </div>
            </div>
        </div>

        <?php 

        ?>
		

		<!-- 
			footer
		-->
		<?php include('footer.php'); ?>
	</div>
</body>
</html>