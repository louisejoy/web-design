<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Baptism Form</title>
	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
    <!-- show/hide content -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- date restriction -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
</head>
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
<body>
    
    <div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
        <div class="modal-header">
            <h4 class="modal-title col-md-8">Baptism Form</h4>
            <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="baptism.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
        </div>
        
        <div class="modal-body" style="text-align: left;">
            <img src="resources/baptism/vincent-ferrer-saint.jpg" style="float: left;width: 100px;height: 150px;">
            <h1 style="font-family:Old English Text MT">St. Vincent Ferer Parish</h1>
            <h3 style="font-family:Kunstler Script">Brgy. Mayapyap Sur Cabanatuan City N.E.</h3><br>
            <h2 style="font-family:Old English Text MT;text-align: center;">Form of the Baptismal receipt</h2>

            <form action="" method="POST" role="form">
                <h5>Name of child:</h5>
                <input type="text" name="childName" id="childName" class="form-control col-md-6" placeholder="Enter Name of Child" required=""><br><br>
                <div class="form-group" style="margin-left: -15px">
                    <div class="col-md-4">
                        <h5>Date of Baptism:</h5>
                        <input type="text" name="datepicker" class="form-control" placeholder='Select date' id="datepicker" required="" />
                        <script>
                            $(function() {
                            $('#datepicker').datepicker({
                            minDate: 0,
                            dateFormat: 'yy-mm-dd'
                            });
                            });
                        </script>
                    </div>
                    <div class="col-md-4">
                        <h5>Time:</h5> 
                        <select type="text" name="time" id="time" class="form-control" required="">
                            <option>Select time</option>
                            <option>-----------</option>
                            <option value="08:00">8:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="17:00">5:00 PM</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact Number:</h5> 
                        <input type="text" name="bapcontact" id="bapcontact" class="form-control col-md-6" placeholder="Enter Number"><br><br>
                    </div>
                </div>

                <div class="form-group" style="margin-left: -15px">
                    <div class="col-md-7">
                        <h5 for="inputDate" class="control-label">Birth Place:</h5>
                        <input type="text" name="bapBplace" id="bapBplace" class="form-control" placeholder="Input Birth Place">
                    </div>

                    <div class="col-md-3">
                        <h5 class="control-label">Birthday:</h5>
                       <input type="date" name="bapBday" id="bapBday" class="form-control" placeholder="YEAR" >
                    </div>

                    <div class="col-md-2">
                        <h5 class="control-label col-md-3">Legitimacy:</h5>
                        <select name="bapStatus" id="bapStatus" class="form-control">
                            <option>Select</option>
                            <option>Civil</option>
                            <option>Catholic</option>
                            <option>Protestant</option>
                            <option>Not Married</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-left: -15px">
                    <div class="col-md-3">
                        <h5>Gender:&nbsp;</h5>
                        <label class="radio-inline">
                            <select style="margin-left: -15px;width: 100px;" type="text" name="bgender" id="bgender" class="form-control">
                                <option>Select</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </label>
                    </div>

                    <div class="col-md-9">
                        <h5>Yrs.old </h5>
                        <label class="radio-inline">
                            <input style="margin-left: -15px" type="number" name="ageyr" id="ageyr" class="form-control" placeholder="Age">
                        </label>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left: -15px">
                    <div class="col-md-6">
                        <h5>Father:</h5>
                        <input type="text" name="bapFather" id="bapFather" class="form-control col-md-6" placeholder="Name of Father" ><br><br>
                    </div>
                    <div class="col-md-6">
                        <h5>Place of Origin:</h5> 
                        <input type="text" name="bapForig" id="bapForig" class="form-control col-md-6" placeholder="Place of Origin" > <br><br>
                    </div>
                </div>
                <div class="form-group" style="margin-left: -15px">
                    <div class="col-md-6">
                        <h5>Mother:</h5>
                        <input type="text" name="bapMother" id="bapMother" class="form-control col-md-6" placeholder="Name of Mother" ><br><br>
                    </div>
                    <div class="col-md-6">
                        <h5>Place of Origin:</h5> 
                        <input type="text" name="bapMorig" id="bapMorig" class="form-control col-md-6" placeholder="Place of Origin" > <br><br>
                    </div>
                </div>

                <h5>Residence:</h5> <input type="text" name="bapParentsplace" class="form-control" placeholder="Input Residence" >

                <hr>

                <h3 style="color:red;text-align: center">S P O N S O R S</h3>

                <hr>

                <label>SPONSOR #1</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name" />
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00" />
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control" />
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence" /><br><hr>
                    </div>
                </div>

                <label>SPONSOR #2</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #3</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #4</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #5</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #6</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #7</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #8</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #9</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><br><hr>
                    </div>
                </div>

                <label>SPONSOR #10</label>
                <div class="form-group">
                    <div class="col-md-6">
                        <h5>Name:</h5> 
                        <input type="text" name="spnsr[]" class="form-control" placeholder="Input Name">
                    </div>
                    <div class="col-md-2">
                        <h5>Age:</h5>
                        <input type="number" name="age[]" class="form-control" placeholder="00">
                    </div>
                    <div class="col-md-4">
                        <h5>Religion:</h5> 
                        <input type="text" name="spnsrreligion[]" placeholder="Religion" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <h5>Residence:</h5> 
                        <input type="text" name="spnsrresidence[]" class="form-control" placeholder="Input Residence"><hr>
                    </div>
                </div>

                <p style="color:red;">Paalala: 1, Itype ng maayos ang mga impormasyon,(SAGUTIN LAHAT NG MGA KATANUNGAN. 2, Obligasyon po na iptala ng lahat ng mga ninong at ninang dumalo man ito o hindi. 3, Kung may mali man ukol sa mahahalagang detalye, maari itong ipaayos kontakin lamang po kami sa loob ng sampung araw. 4, Birth Certificate (NSO) Kung ang bata ay may mahigit isang taong gulang or Local(LCR) Kung ito ay wala pang isang taon, ito ang kailangan papeles sa binyag. 5, Ang takip Binyag at ang mga kandila ay kasama sa mga babayaran sa aming opisina...Maraming Salamt po</p>
                <br>

                <div class="dontprint"><input name="done" value="Finish" id="submitBtn" type="button" style="display: block; margin-right: auto; margin-left: auto;" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"></div>   

                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>

                <button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button><br>
                <p class="dontprint col-md-4 col-md-offset-8">**Print your form first before you hit the finish button otherwise it will reset all your entered info.</p><br><br><br>

        </div><!-- modal form end -->
    </div>

    <div class="dontprint modal-content" style="width: 400px;position: absolute;top: 0px;right: 0px;">
        <div class="modal-header"><label>Taken Dates:</label></div>
        <div class="modal-body">
            <?php 
            include('db.php');
            $sql_2=$conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=1 AND client_tbl.client_id=date_tbl.client_id");

            $sql_1 = $conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=0 AND client_tbl.client_id=date_tbl.client_id");
                
                $numrows=mysqli_num_rows($sql_1);
                if($numrows<=0){
                    echo "<p style='font-size:16px;text-align:center'>No taken dates yet</p>";
                }else{?>
                        <table class='table table-hover table-bordered'>
                            <tr class='warning'>
                                <th>#</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                <?php   
                    $counter = 1;
                    while($row=mysqli_fetch_array($sql_1)){
                            echo "<tr class='warning'>
                                    <td>".$counter."</td>
                                    <td>".date('F d, Y', strtotime($row['date']))."</td>
                                    <td>".date("h:i a", strtotime($row['time']))."</td>
                                 </tr>";
                            $counter++;
                        
                    }
                    while($row=mysqli_fetch_array($sql_2)){
                            echo "<tr class='warning'>
                                    <td>".$counter."</td>
                                    <td>".date('F d, Y', strtotime($row['date']))."</td>
                                    <td>".date("h:i a", strtotime($row['time']))."</td>
                                 </tr>";
                            $counter++;
                        
                    }
                }
            ?>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $('#submitBtn').click(function(){
            // when the button in the form, display the entered values in the modal
            $('#bapchild').text($('#childName').val());
            $('#bapdate').text($('#datepicker').val());
            $('#baptime').text($('#time').val());
            $('#bapc').text($('#bapcontact').val());
            $('#bapBp').text($('#bapBplace').val());
            $('#bapBd').text($('#bapBday').val());
            $('#bapStat').text($('#bapStatus').val());
            $('#bapGender').text($('#bgender').val());
            $('#bapAgeyr').text($('#ageyr').val());
            $('#bapF').text($('#bapFather').val());
            $('#bapM').text($('#bapMother').val());

        });
    </script>
		
        <div id="myModal" class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
                        <h4 class="modal-title">Please verify the following:</h4>
                    </div>
					<!-- dialog body -->
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal">×</button>
                        Are you sure you want to submit the following details?
                        <table class="table">
                            <tr>
                                <th>Name of Child</th>
                                <td id="bapchild"></td>
                            </tr>
                            <tr>
                                <th>Child's Birthday</th>
                                <td id="bapBd"></td>
                            </tr>
                            <tr>
                                <th>Child's Birthplace</th>
                                <td id="bapBp"></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td id="bapGender"></td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td id="bapAgeyr"></td>
                            </tr>
                            <tr>
                                <th>Legitimacy</th>
                                <td id="bapStat"></td>
                            </tr>
                            <tr>
                                <th>Name of Father</th>
                                <td id="bapF"></td>
                            </tr>
                            <tr>
                                <th>Name of Mother</th>
                                <td id="bapM"></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td id="bapc"></td>
                            </tr>
                            <tr>
                                <th>Baptism Date</th>
                                <td id="bapdate"></td>
                            </tr>
                            <tr>
                                <th>Baptism Time</th>
                                <td id="baptime"></td>
                            </tr>
                        </table>

                        <label>**Please put your info here so we can contact you for any updates regarding your reservation. Thank you</label>
                            <div class="modal-body">
                                <h3 style="text-align:center">Personal Information</h3>
                                <div class="form-group">
                                    <label for="fname">Name</label>
                                    <input style="margin-top:5px;" name="fname" type="text" class="form-control" id="fname" placeholder="Enter First Name">
                                    <input style="margin-top:5px;" name="mname" type="text" class="form-control" id="mname" placeholder="Enter Middle Name">
                                    <input style="margin-top:5px;" name="lname" type="text" class="form-control" id="lname" placeholder="Enter Last name">
                                </div>
                                <div class="form-group">
                                    <label for="add">Email</label>
                                    <input style="margin-top:5px;" name="email" type="email" class="form-control" id="add" placeholder="Enter Email Address">
                                    <p class="help-block">Please enter your "<b>VALID</b>" Email address.</p>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label><br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="inlineRadio1" value="Male"> Male
                                     </label>
                                     <label class="radio-inline">
                                        <input type="radio" name="gender" id="inlineRadio2" value="Female"> Female
                                    </label>
                                </div>
                            </div>
                    </div>
                    <!-- dialog buttons -->
                    <div class="modal-footer">
                            <button name="reserve" type="submit" class="btn btn-primary">Reserve</button>
                            <button name="cancel" type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <?php 
                            include('db.php');
                            if(isset($_POST['reserve'])){
                                $cname = $_POST['childName'];
                                $bage = $_POST['ageyr'];
                                $bdad = $_POST['bapFather'];
                                $bmom = $_POST['bapMother'];

                                $bdate = $_POST['datepicker'];
                                $btime = $_POST['time'];

                                $bday = $_POST['bapBday'];
                                $bplace = $_POST['bapBplace'];
                                $bgender = $_POST['bgender'];
                                $blegit = $_POST['bapStatus'];
                                $bdadorigin = $_POST['bapForig'];
                                $bmomorigin = $_POST['bapMorig'];
                                $parentsplace = $_POST['bapParentsplace'];

                                $spnsr_name = $_POST['spnsr'];
                                $spnsr_age = $_POST['age'];
                                $spnsr_religion = $_POST['spnsrreligion'];
                                $spnsr_place = $_POST['spnsrresidence'];

                                $cfname = $_POST['fname'];
                                $cmname = $_POST['mname'];
                                $clname = $_POST['lname'];
                                $cgender = $_POST['gender'];
                                $contact = $_POST['bapcontact'];
                                $cemail = $_POST['email'];
                                
                                $bdate_array = array();
                                $btime_array = array();
                                
                                $q=$conn->query("SELECT date, time FROM date_tbl");
                    
                                    while($row=mysqli_fetch_array($q)){
                                        $bdate_array[]=$row['date'];
                                        $btime_array[]=$row['time'];
                                    }
                                    if(in_array($btime, $btime_array)) {
                                        die ("<script>alert('Schedule is not available! Please pick another date');
                                            window.location.href='baptismform.php';
                                            </script>");
                                    }else{
                            
                                
                            ?>
						</form>
					</div>
				</div>
			</div>
		</div>
    <?php 
            $setout = $conn->query('SET foreign_key_checks = 0');
                if(!$setout){
                    die('error');
                }
                else{
                   
                    $insertClient=$conn->query("INSERT INTO client_tbl (client_id, client_fname, client_mname, client_lname, client_gender, client_contact, client_email, submitted, client_order) VALUES ('','$cfname','$cmname','$clname','$cgender','$contact','$cemail',NOW(),'baptism')");
                    
                    if(!$insertClient){
                        die('client error');
                    }else{

                        $selectClient=$conn->query("SELECT client_id FROM client_tbl");

                        $clientRow=mysqli_num_rows($selectClient);
                        if($clientRow>0){
                            while($row=mysqli_fetch_array($selectClient)){
                                $clientID=$row['client_id'];
                            }
                        }else{
                            die('no rows!');
                        }
                        $insertDate=$conn->query("INSERT INTO date_tbl (date_id, date, time, ordertype, client_id) VALUES ('','$bdate','$btime',0,'$clientID')");
                    
                        if(!$insertDate){
                            die('date error');
                        }else{

                            $insertBap=$conn->query("INSERT INTO bap_tbl (bap_id, bap_child, bap_age, bap_father, bap_mother, child_birthday, child_birthplace, child_gender, legitimacy, father_origin, mother_origin, parent_residence, client_id) VALUES ('','$cname','$bage','$bdad','$bmom','$bday','$bplace','$bgender','$blegit','$bdadorigin','$bmomorigin','$parentsplace','$clientID')");

                            $selectBap=$conn->query("SELECT bap_id FROM bap_tbl");

                            $bapRow=mysqli_num_rows($selectBap);
                            if($bapRow>0){
                                while($brow=mysqli_fetch_array($selectBap)){
                                    $bapID=$brow['bap_id'];
                                }
                            }else{
                                die('no rows :(');
                            }     
                                for($i = 0;$i < count($spnsr_name);$i++){
                                    $name = $conn->real_escape_string($spnsr_name[$i]);
                                    $age = $conn->real_escape_string($spnsr_age[$i]);
                                    $religion = $conn->real_escape_string($spnsr_religion[$i]);
                                    $place = $conn->real_escape_string($spnsr_place[$i]);
                                    
                                     if (!empty($name) and !empty($age)){
                                    
                                    $insertSpons=$conn->query("INSERT INTO bap_sponsors (sponsors_name, sponsors_age, sponsors_religion, sponsors_residence, bap_id) VALUES ('$name','$age','$religion','$place','$bapID')");
                                    }
                                }
                                if(!$insertInfo && !$insertSpons){
                                    die("<script>
                                            alert('Error encountered, Reloading page');
                                            window.location.href='baptismform.php';
                                         </script>");
                                }
                                else{
                                    $setin = $conn->query('SET foreign_key_checks = 1');
                                    Session_Destroy();
                                    die("<script>
                                            alert('Your reservation is succesfully sent. It will go through a verification process. You will receive updates in your cellphone number or by email. Thank you!');
                                            window.location.href='baptism.php';
                                         </script>");
                                }
                            }
                        }
                    }
                }
            }

        if(isset($_POST['cancel'])){
            die("<script>
                    window.location.href='baptismform.php';
                 </script>");
        }
        ?>
</body>
</html>