<html>
<head>
	<title>Funeral Form</title>

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
    <div class="modal-content" style="width: 900px;margin-left: auto;margin-right: auto">
        <div class="modal-header">
            <h4 class="modal-title col-md-8">Funeral Form</h4>
            <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="funeral.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
            
        </div>
        
        <div class="modal-body">
            <form action="" method="POST">
                <div class="form-group" style="margin-left: -15px">
                    
                    <div class="col-md-6">
                        <h5 style="font-family:Lucida Calligraphy">Name of Deceased:</h5>
                        <input type="text" class="form-control" name="funeral_name" id="funeral_name" placeholder="Enter Name of Deceased" required="">
                    </div>

                    <div class="col-md-6">
                        <h5 style="font-family:Lucida Calligraphy">Relationship to Deceased:</h5> 
                        <input type="text" class="form-control" name="funeral_relationship" id="funeral_relationship" placeholder="Relationship to the Deceased" required="">
                    </div>
                    
                    <div class="col-md-4">
                        <h5 style="font-family:Lucida Calligraphy">Contact Number:</h5> 
                        <input type="text" class="form-control" name="funeral_contact" id="funeral_contact" placeholder="Enter Contact #" required="">
                    </div>
                    
                    <div class="col-md-4">
                        <h5 style="font-family:Lucida Calligraphy">Date:</h5> 
                       <input type="text" name="datepicker" class="form-control" placeholder='Select date' id="datepicker" style="margin-left: -15px"/>
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
                        <h5 style="font-family:Lucida Calligraphy">Time:</h5> 
                        <select type="text" name="time" id="time" class="form-control">
                            <option>Select time</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="13:00">1:00 PM</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <h5 style="font-family:Lucida Calligraphy">Other information or Request</h5>
                        <textarea style="resize: none" name="cmnt" placeholder="Other information.." id="comment" class="form-control col-md-6" rows="3"></textarea>
                    </div>
                </div>
                <p class="help-block">Tell us what's on your mind</p><br>

                <div class="dontprint"><input name="done" value="Finish" id="submitBtn" type="button" style="display: block; margin-right: auto; margin-left: auto;" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"></div>
                
                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>

                <button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button><br>
                <p class="dontprint col-md-4 col-md-offset-8">**Print your form first before you hit the finish button otherwise it will reset all your entered info.</p><br><br>
        </div>
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
            $('#fname').text($('#funeral_name').val());
            $('#frelation').text($('#funeral_relationship').val());
            $('#fcontact').text($('#funeral_contact').val());
            $('#fdate').text($('#datepicker').val());
            $('#ftime').text($('#time').val());
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
                                <th>Name of Deceased:</th>
                                <td id="fname"></td>
                            </tr>
                            <tr>
                                <th>Relationship to Deceased:</th>
                                <td id="frelation"></td>
                            </tr>
                            <tr>
                                <th>Contact Number:</th>
                                <td id="fcontact"></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td id="fdate"></td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td id="ftime"></td>
                            </tr>
                        </table>

						<label>**Please put your info here so we can contact you for any updates regarding your reservation. Thank you</label>
						<div class="modal-body">
                            <h3 style="text-align:center">Personal Information</h3>
                            <div class="form-group">
                                <label for="fname">Name</label>
                                <input style="margin-top:5px;" name="fname" type="text" class="form-control" id="fname" placeholder="Enter First Name" required="">
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
                                $fname = $_POST['funeral_name'];
                                $frelation = $_POST['funeral_relationship'];
                                $fdate = $_POST['datepicker'];
                                $ftime = $_POST['time'];
                                $fcmnt = $_POST['cmnt'];

                                $cfname = $_POST['fname'];
                                $cmname = $_POST['mname'];
                                $clname = $_POST['lname'];
                                $cgender = $_POST['gender'];
                                $contact = $_POST['funeral_contact'];
                                $cemail = $_POST['email'];
                                
                                $fdate_array = array();
                                $ftime_array = array();
                                
                                $q=$conn->query("SELECT date, time FROM date_tbl");
                    
                                    while($row=mysqli_fetch_array($q)){
                                        $fdate_array[]=$row['date'];
                                        $ftime_array[]=$row['time'];
                                    }
                                    if(in_array($fdate, $fdate_array)) {
                                        die ("<script>alert('Schedule is not available! Please pick another date');
                                            window.location.href='funeralform.php';
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
            
                    $insertClient=$conn->query("INSERT INTO client_tbl (client_id, client_fname, client_mname, client_lname, client_gender, client_contact, client_email, submitted, client_order) VALUES ('','$cfname','$cmname','$clname','$cgender','$contact','$cemail',NOW(),'funeral')");
                    
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
                            $insertDate=$conn->query("INSERT INTO date_tbl (date_id, date, time, ordertype, client_id) VALUES ('','$fdate','$ftime',0,'$clientID')");
                
                            if(!$insertDate){
                                die('date error');
                            }else{
                                $insertFuneral=$conn->query("INSERT INTO funeral_tbl (funeral_id, funeral_name, funeral_relation, funeral_other, client_id) VALUES ('','$fname','$frelation','$fcmnt','$clientID')");
                                if(!$insertClient && !$insertFuneral){
                                    die("<script>
                                            alert('Error encountered, Reloading page');
                                            window.location.href='funeralform.php';
                                         </script>");
                                }
                                else{
                                    $setin = $conn->query('SET foreign_key_checks = 1');
                                    Session_Destroy();
                                    die("<script>
                                            alert('Your reservation is succesfully sent. It will go through a verification process. You will receive updates in your cellphone number or by email. Thank you!');
                                            window.location.href='funeral.php';
                                         </script>");
                                }
                            }
                        }
                    }
                }
            }
        
        if(isset($_POST['cancel'])){
            die("<script>
                    window.location.href='funeralform.php';
                 </script>");
        }
        ?>
</body>
</html>

