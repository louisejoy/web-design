<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wedding Form</title>
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
<script type="text/javascript"> 
    function readURL(input) { /*para makita mo yung iuupload na image*/
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
<body>
    <div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
        <div class="modal-header">
            <h4 class="modal-title col-md-8">Wedding Form</h4>
            <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="wedding.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
        </div>

        <div class="modal-body">
            <dl style="text-align: left;">
                <dt>
                    <h4 style="font-family:Arial Black">MGA PATAKARAN SA KASAL</h4>
                </dt>
                <form action="" method="POST" enctype="multipart/form-data" role="form" id="formfield" onsubmit="return validateForm();">
                    <input type="hidden" name="action" value="add_form" /> 
                    <div class="form-group col-md-13 dontprint">
                        <h5>Choose your 2x2 picture. Each for the Bride and Groom</h5>
                        <img id="blah" src="resources/icon/placeholder.png" alt="your image" style="width: 200px; height: 200px;" />
                        <input type='file' name="file" accept="image/*" onchange="readURL(this);" /><br>
                        <button class="btn btn-default" type="submit" name="upload_it">Upload</button>
                    </div>
                    <div class="col-md-6">
                    <?php  
                        include('db.php'); /*pag upload sa database*/
                        if(isset($_POST['upload_it'])){
                        $allowedExts = array("gif", "jpeg", "jpg", "png");
                          $temp = explode(".", $_FILES["file"]["name"]);
                          $extension = end($temp);
                          if ((($_FILES["file"]["type"] == "image/gif")
                          || ($_FILES["file"]["type"] == "image/jpeg")
                          || ($_FILES["file"]["type"] == "image/jpg")
                          || ($_FILES["file"]["type"] == "image/pjpeg")
                          || ($_FILES["file"]["type"] == "image/x-png")
                          || ($_FILES["file"]["type"] == "image/png"))
                          && ($_FILES["file"]["size"] < 100000000000)
                          && in_array($extension, $allowedExts)){
                            if ($_FILES["file"]["error"] > 0){
                              echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                            }
                            else{
                                $temp[0] = rand(0, 1000000); //Set to random number
                                $fileName = $temp[0].".".$temp[1];              

                              if (file_exists("ew/" . $_FILES["file"]["name"])){
                                echo $_FILES["file"]["name"] . " already exists. ";
                              }
                              else{
                                $moved_img = move_uploaded_file($_FILES["file"]["tmp_name"], "image_upload/" .$fileName . $_FILES["file"]["name"]);
                                    if($moved_img){
                                        $img_link = 'image_upload/'.$fileName.$_FILES["file"]["name"];

                                        $uploaded = $conn->query("INSERT INTO img_upload(img_link, ordertype)values('$img_link',1)");
                                        if($uploaded){
                                            echo("<script>alert('Successufully uploaded!');</script>");
                                        }
                                    }
                                }
                              }
                            }
                            else{
                                echo("<script>alert('Invalid File!');</script>");
                            }

                            $selectimg = $conn->query("SELECT img_upload.img_id, img_upload.img_link FROM img_upload ORDER BY img_id DESC LIMIT 2");
                            while($row = mysqli_fetch_array($selectimg)){
                                echo "<img  style='width: 200px; height: 200px;float: left;' src='".$row['img_link']."'/>";
                            }
                        }
                        ?>
                    </div>
                    <div class="form-group col-md-12" style="margin-left: -15px">
                        <h5 for="inputUser" class="control-label" style="font-family:Lucida Calligraphy">Name of Groom and Bride</h5>
                        <div class="col-md-6" style="margin-left: -15px">
                            <input name="inputGroom" type="text" class="form-control" id="inputGroom" placeholder="Name of Groom" >
                        </div>
                        <div class="col-md-6">
                            <input name="inputBride" type="text" class="form-control" id="inputBride" placeholder="Name of Bride">
                        </div>
                    </div><br><br>

                    <div class="form-group">
                        <div class="col-md-4">
                            <h5 class="control-label" style="font-family:Lucida Calligraphy;margin-left: -15px">Contact Number:</h5> 
                            <input style="margin-left: -15px" type="text" class="form-control" name="cnum" id="cnum" placeholder="Enter Contact #" >
                        </div>
                        <div class="col-md-4">
                            <h5 class="control-label" style="font-family:Lucida Calligraphy;margin-left: -15px">Petsa ng Kasal:</h5>
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
                            <h5 for="inputDate" class="control-label" style="font-family:Lucida Calligraphy;">Oras: </h5>
                            <select type="text" name="time" id="time" class="form-control">
                                <option>Select time</option>
                                <option value="08:00">8:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="14:00">2:00 PM</option>
                            </select>
                        </div>
                    </div><br><br><br>

                    <div class="form-group col-md-12">
                        <h4><span class="glyphicon glyphicon-exclamation-sign"></span> <b>MGA DAPAT ISUMITENG PAPELES:</b><small> (Please check if you already have the following)</small></h4>
                        <div style="margin-left: 30px">
                            <h4>Bride & Groom&nbsp;  1,NSO/PSA Birth Certificate (Bagong Certificate)</h4>
                            <h4>Bride & Groom&nbsp;  2,Baptismal Certficate (for Marriage purpose,Pagkakabinyag)</h4>
                            <h4>Bride & Groom&nbsp;  3,Confirmation Certificate (Pagkukumpil for Marriage purpose)</h4>
                            <h4>Bride & Groom&nbsp;  4,CENOMAR(Certificate of No Marriage)</h4>
                            <h4>Bride & Groom&nbsp;  5,Marriage License</h4>
                            <h4>Bride & Groom&nbsp;  6,Marriage Banns (no less than three (3)weeks)</h4>
                            <h4>Bride & Groom&nbsp;  7,List of Sponsor(invitation)</h4>
                            <h4>Bride & Groom&nbsp;  8,2x2 picture (Bride and Groom 3 copies each)</h4>
                            <h4>Bride & Groom&nbsp;  9,Sedula</h4>
                            <h4>Bride & Groom&nbsp;   10,Permit from respective parish</h4>
                            <h4>Bride & Groom&nbsp;   11,Certificate of no record if not yet baptized and confimed</h4>
                        </div>
                    </div><br>

                    <div class="form-group col-md-12">
                        <h4><span class="glyphicon glyphicon-exclamation-sign"></span> <b>MGA DAPAT DALUHANG SEMINAR:</b></h4>
                        <div style="margin-left: 30px">
                            <h4>1, Seminar of Pre-cana</h4>
                            <h4>2, Seminar of Confimation,Baptism</h4>
                            <h4>3, Confirmation and Baptism</h4>
                            <h4>4, Kumpisal</h4>
                            <h4>5, Interview by the Parish </h4>
                        </div>
                    </div><br>

                    <div class="form-group col-md-12">
                        <h4><span class="glyphicon glyphicon-exclamation-sign"></span> <b>MGA DAPAT IHANDA SA KASAL - Belo, Kurdon <br>MGA DAPAT BAYARAN</b></h4>
                        <div style="margin-left: 30px">
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
                    </div><br><br>

                    <dt><h4 style="font-family:Arial Black">Paalala:</h4></dt>
                    <h5>1, Ang hindi makadalo sa mga seminar, hindi makapagpasa ng anumang kinakailangang papeles at hindi makakapag bayad sa takdang araw bago ang kasal ay maaring hindi maikasal.</h5>
                    <h5>2, Dumating ng Labinglimang minuto bago ikasal upang hindi maatrasado ng kasal(15 minutes before the wedding). Kayo din po ay mayroon lamamg ma 50 minutes sa loob ng simbahan para sa picture taking at upang maihanda pa ang mga susunod pang schedule sa parokya.</h5>
                    <h5>3, Ang mga ring bearers,flower girl ay dapat limang taong gulang pataas at ng hindi na ito inaakay ng magulang sa bridal enthourage. Upang maiwasan din ang pagka atrasado ng kasal.</h5>
                    <h5>4, Ang mga ninong ata ninang , dapat ito ay may asawa na, at binyagan sa katoliko.</h5>
                    <h5>5, Pakisabihan din po ang mga dadalo sa kasal na panatilihin ang katahimikan sa loob ng simbahan upang maging solemno ang sakramento, gayundin ang pagkain sa loob ng simbahan ay mahigpit na pinagbabawal. </h5><br>

                    <div class="dontprint"><input name="done" value="Finish" id="submitBtn" type="button" style="display: block; margin-right: auto; margin-left: auto;" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"> </div>
                      

                    <script>
                        function myFunction() {
                            window.print();
                        }
                    </script>

                    <button style="display:block;margin-left:auto;margin-top:-50px" id="printPageButton" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button><br>
                    <p class="dontprint col-md-4 col-md-offset-8">**Print your form first before you hit the finish button otherwise it will reset all your entered info.</p><br><br>
            </dl><br>  
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
            $('#gname').text($('#inputGroom').val());
            $('#bname').text($('#inputBride').val());
            $('#wdate').text($('#datepicker').val());
            $('#wtime').text($('#time').val());
            $('#contact').text($('#cnum').val());
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
                                <th>Name of Groom</th>
                                <td id="gname"></td>
                            </tr>
                            <tr>
                                <th>Name of Bride</th>
                                <td id="bname"></td>
                            </tr>
                            <tr>
                                <th>Wedding Date</th>
                                <td id="wdate"></td>
                            </tr>
                            <tr>
                                <th>Wedding Time</th>
                                <td id="wtime"></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td id="contact"></td>
                            </tr>
                        </table>

                        <label>**Please put your info below so we can contact you for any updates regarding your reservation. Thank you</label>
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
                                $gname = $_POST['inputGroom'];
                                $bname = $_POST['inputBride'];
                                $wdate = $_POST['datepicker'];
                                $wtime = $_POST['time'];

                                $cfname = $_POST['fname'];
                                $cmname = $_POST['mname'];
                                $clname = $_POST['lname'];
                                $cgender = $_POST['gender'];
                                $contact = $_POST['cnum'];
                                $cemail = $_POST['email'];
                                
                                $wdate_array = array();
                                $wtime_array = array();
                                
                                $q=$conn->query("SELECT date, time FROM date_tbl");
                    
                                    while($row=mysqli_fetch_array($q)){
                                        $wdate_array[]=$row['date'];
                                        $wtime_array[]=$row['time'];
                                    }
                                    if(in_array($wdate, $wdate_array)) {
                                        die ("<script>alert('Schedule is not available! Please pick another date');
                                            window.location.href='weddingform.php';
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
                $insertClient=$conn->query("INSERT INTO client_tbl (client_id, client_fname, client_mname, client_lname, client_gender, client_contact, client_email, submitted, client_order) VALUES ('','$cfname','$cmname','$clname','$cgender','$contact','$cemail',NOW(),'wedding')");
                
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
                        $insertDate=$conn->query("INSERT INTO date_tbl (date_id, date, time, ordertype, client_id) VALUES ('','$wdate','$wtime',0,'$clientID')");
            
                        if(!$insertDate){
                            die('date error');
                        }else{
                            $insertWed=$conn->query("INSERT INTO wed_tbl (wed_id, wed_groom, wed_bride, client_id) VALUES ('','$gname','$bname','$clientID')");
                            if(!$insertClient && !$insertWed){
                                die("<script>
                                        alert('Error encountered, Reloading page');
                                        window.location.href='weddingform.php';
                                     </script>");
                            }
                            else{
                                $setin = $conn->query('SET foreign_key_checks = 1');
                                Session_Destroy();
                                die("<script>
                                        alert('Your reservation is succesfully sent. It will go through a verification process. You will receive updates in your cellphone number or by email. Thank you!');
                                        window.location.href='wedding.php';
                                     </script>");
                            }
                        }
                    }
                }
            }
        }
    if(isset($_POST['cancel'])){
        die("<script>
                window.location.href='weddingform.php';
             </script>");
    }
    ?>

</body>
</html>


