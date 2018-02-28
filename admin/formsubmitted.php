<?php
include("../db.php");
if(isset($_GET['clientOrder'])){
    $order = $_GET['clientOrder'];
    $id = $_GET['clientID'];

    // ================================================WEDDING FORM===============================================
    if($order=='wedding'){
        $data = $conn->query("SELECT client_tbl.client_order, client_tbl.client_fname, client_tbl.client_lname, client_tbl.client_contact, client_tbl.client_email, date_tbl.date, date_tbl.time, wed_tbl.wed_groom, wed_tbl.wed_bride FROM client_tbl INNER JOIN date_tbl ON client_tbl.client_id=date_tbl.client_id INNER JOIN wed_tbl ON client_tbl.client_id=wed_tbl.client_id WHERE client_tbl.client_id='$id'");

        while($row = mysqli_fetch_assoc($data)){
            $fname      =$row['client_fname'];
            $lname      =$row['client_lname'];
            $contact    =$row['client_contact'];
            $email      =$row['client_email'];
            $date       =$row['date'];
            $time       =$row['time'];

            $groom      =$row['wed_groom'];
            $bride      =$row['wed_bride'];
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submitted Form</title>
	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="../resources/icon/church.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
</head>
<style type="text/css" media="print">
.dontprint
{ display: none; }
</style>
<body>
	<div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
        <div class="modal-header">
            <h4 class="modal-title col-md-8">WEDDING FORM</h4>
            <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="reservation.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
        </div>

        <div class="modal-body">
            <div class="modal-title">FROM</div>
            <p><b>Name:</b> <?php echo "$fname"." "."$lname"; ?> <br>
                <b>Email:</b> <?php echo "$email"; ?> <br>
                <b>Contact:</b> <?php echo "$contact"; ?>
            </p>
        </div>
            <div class="modal-body">
              <!--   <div class="col-md-12">
                    <?php 
                    $selectimg = $conn->query("SELECT img_upload.img_id, img_upload.img_link FROM img_upload ORDER BY img_id DESC LIMIT 2 "); /*pag litaw ng picture galing sa database*/
                        while($row = mysqli_fetch_array($selectimg)){
                            echo "<img  style='width: 200px; height: 200px;float: left;' src='".$row['img_link']."'/>";
                        }
                     ?>
                </div> -->
                <h4 style="font-family:Arial Black">MGA PATAKARAN SA KASAL</h4>

                <form action="">
                    <div class="form-group col-md-12" style="margin-left: -15px">
                        <h5 for="inputUser" class="control-label" style="font-family:Lucida Calligraphy">Name of Groom and Bride</h5>
                        <div class="col-md-6" style="margin-left: -15px">
                            <input name="groom" type="text" class="form-control" value="<?php echo $groom; ?>" disabled="">
                            <p class="help-block">Groom Name</p>
                        </div>
                        <div class="col-md-6">
                            <input name="bride" type="text" class="form-control" value="<?php echo $bride; ?>" disabled="">
                            <p class="help-block">Bride Name</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <h5 class="control-label" style="font-family:Lucida Calligraphy;margin-left: -15px">Contact Number:</h5> 
                            <input style="margin-left: -15px" type="text" class="form-control" name="cnum" value="<?php echo $contact; ?>" disabled="">
                        </div>
                        <div class="col-md-4">
                            <h5 class="control-label" style="font-family:Lucida Calligraphy;margin-left: -15px">Petsa ng Kasal:</h5>
                            <input type="text" name="datepicker" class="form-control" value="<?php echo date("F j, Y ", strtotime($date)); ?>" disabled="" style="margin-left: -15px"/>
                        </div>
                        <div class="col-md-4">
                            <h5 for="inputDate" class="control-label" style="font-family:Lucida Calligraphy;">Oras: </h5>
                            <input type="text" name="time" value="<?php echo date('h:i a', strtotime($time)); ?>" disabled="" class="form-control">
                        </div>
                    </div>

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

                    <h4 style="font-family:Arial Black">Paalala:</h4>
                    <h5>1, Ang hindi makadalo sa mga seminar, hindi makapagpasa ng anumang kinakailangang papeles at hindi makakapag bayad sa takdang araw bago ang kasal ay maaring hindi maikasal.</h5>
                    <h5>2, Dumating ng Labinglimang minuto bago ikasal upang hindi maatrasado ng kasal(15 minutes before the wedding). Kayo din po ay mayroon lamamg ma 50 minutes sa loob ng simbahan para sa picture taking at upang maihanda pa ang mga susunod pang schedule sa parokya.</h5>
                    <h5>3, Ang mga ring bearers,flower girl ay dapat limang taong gulang pataas at ng hindi na ito inaakay ng magulang sa bridal enthourage. Upang maiwasan din ang pagka atrasado ng kasal.</h5>
                    <h5>4, Ang mga ninong ata ninang , dapat ito ay may asawa na, at binyagan sa katoliko.</h5>
                    <h5>5, Pakisabihan din po ang mga dadalo sa kasal na panatilihin ang katahimikan sa loob ng simbahan upang maging solemno ang sakramento, gayundin ang pagkain sa loob ng simbahan ay mahigpit na pinagbabawal. </h5><br>
  
                </form>
            </div>
            <script>
                function myFunction() {
                    window.print();
                }
            </script>
            <div class="modal-footer">
                <br><br><br><button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
            </div>
    </div>
<?php 
    }

    // ================================================BAPTISM FORM===============================================
    if($order=='baptism'){
        $data = $conn->query("SELECT client_tbl.client_order, client_tbl.client_fname, client_tbl.client_lname, client_tbl.client_contact, client_tbl.client_email, date_tbl.date, date_tbl.time, bap_tbl.bap_id, bap_tbl.bap_child, bap_tbl.bap_age, bap_tbl.bap_father, bap_tbl.bap_mother, bap_tbl.child_birthday, bap_tbl.child_birthplace, bap_tbl.child_gender, bap_tbl.legitimacy, bap_tbl.father_origin, bap_tbl.mother_origin, bap_tbl.parent_residence FROM client_tbl INNER JOIN date_tbl ON client_tbl.client_id=date_tbl.client_id INNER JOIN bap_tbl ON client_tbl.client_id=bap_tbl.client_id WHERE client_tbl.client_id='$id'");

        while($row = mysqli_fetch_array($data)){
            $fname      =$row['client_fname'];
            $lname      =$row['client_lname'];
            $contact    =$row['client_contact'];
            $email      =$row['client_email'];
            $date       =$row['date'];
            $time       =$row['time'];

            $bapID              =$row['bap_id'];
            $childName          =$row['bap_child'];
            $childAge           =$row['bap_age'];
            $childFather        =$row['bap_father'];
            $childMother        =$row['bap_mother'];

            $childBday          =$row['child_birthday'];
            $childBplace        =$row['child_birthplace'];
            $childGender        =$row['child_gender'];
            $childStatus        =$row['legitimacy'];
            $fatherOrigin       =$row['father_origin'];
            $motherOrigin       =$row['mother_origin'];
            $parentResidence    =$row['parent_residence'];

        }

    ?>
        <head>
            <title>Submitted Form</title>
            <!-- web page icon -->
            <link rel="shortcut icon" type="image/png" href="../resources/icon/church.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- bootstrap -->
            <link rel="stylesheet" type="text/css" href="../bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
        </head>
        <style type="text/css" media="print">
        .dontprint
        { display: none; }
        </style>
            <div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
                <div class="modal-header">
                    <h4 class="modal-title col-md-8">BAPTISM FORM</h4>
                    <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="reservation.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
                </div>

                <div class="modal-body">
                    <div class="modal-title">FROM</div>
                    <p><b>Name:</b> <?php echo "$fname"." "."$lname"; ?> <br>
                        <b>Email:</b> <?php echo "$email"; ?> <br>
                        <b>Contact:</b> <?php echo "$contact"; ?>
                    </p>
                </div>
                    <div class="modal-body">
                        <img src="../resources/baptism/vincent-ferrer-saint.jpg" style="float: left;width: 100px;height: 150px;">
                        <h1 style="font-family:Old English Text MT">St. Vincent Ferer Parish</h1>
                        <h3 style="font-family:Kunstler Script">Brgy. Mayapyap Sur Cabanatuan City N.E.</h3><br>
                        <h2 style="font-family:Old English Text MT;text-align: center;">Form of the Baptismal receipt</h2>

                        <form action="" method="POST" role="form">
                            <h5>Name of child:</h5>
                            <input type="text" name="childName" class="form-control col-md-6" value="<?php echo $childName; ?>" disabled=""><br><br>
                            <div class="form-group" style="margin-left: -15px">
                                <div class="col-md-4">
                                    <h5>Date of Baptism:</h5>
                                    <input type="text" name="datepicker" class="form-control" value="<?php echo date("F j, Y ", strtotime($date)); ?>" disabled="" />
                                </div>
                                <div class="col-md-4">
                                    <h5>Time:</h5> 
                                    <input type="text" name="time" class="form-control" value="<?php echo date('h:i a', strtotime($time)); ?>" disabled="">
                                </div>
                                <div class="col-md-4">
                                    <h5>Contact Number:</h5> 
                                    <input type="text" name="bapcontact" class="form-control col-md-6" value="<?php echo $contact; ?>" disabled=""><br><br>
                                </div>
                            </div>

                            <div class="form-group" style="margin-left: -15px">
                                <div class="col-md-7">
                                    <h5 for="inputDate" class="control-label">Birth Place:</h5>
                                    <input type="text" name="bapBplace" class="form-control" value="<?php echo $childBplace; ?>" disabled="">
                                </div>

                                <div class="col-md-3">
                                    <h5 class="control-label">Birthday:</h5>
                                   <input type="date" name="bapBday" class="form-control" value="<?php echo $childBday; ?>" disabled="" >
                                </div>

                                <div class="col-md-2">
                                    <h5 class="control-label col-md-3" style="margin-left: -15px">Legitimacy:</h5>
                                    <input name="bapStatus" class="form-control" value="<?php echo $childStatus; ?>" disabled="">
                                </div><br><br>
                            </div>

                            <div class="form-group" style="margin-left: -15px">
                                <div class="col-md-3">
                                    <h5>Gender:&nbsp;</h5>
                                    <label class="radio-inline">
                                        <input style="margin-left: -15px" type="text" class="form-control" name="gender" value="<?php echo $childGender; ?>" disabled="" >
                                    </label>
                                </div>

                                <div class="col-md-9">
                                    <h5>Yrs.old </h5>
                                    <label class="radio-inline">
                                        <input style="margin-left: -15px" type="number" name="ageyr" class="form-control" value="<?php echo $childAge; ?>" disabled="">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" style="margin-left: -15px">
                                <div class="col-md-6">
                                    <h5>Father:</h5>
                                    <input type="text" name="bapFather" class="form-control col-md-6" value="<?php echo $childFather; ?>" disabled="" ><br><br>
                                </div>
                                <div class="col-md-6">
                                    <h5>Place of Origin:</h5> 
                                    <input type="text" name="bapForig" class="form-control col-md-6" value="<?php echo $fatherOrigin; ?>" disabled="" > <br><br>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: -15px">
                                <div class="col-md-6">
                                    <h5>Mother:</h5>
                                    <input type="text" name="bapMother" class="form-control col-md-6" value="<?php echo $childMother; ?>" disabled="" ><br><br>
                                </div>
                                <div class="col-md-6">
                                    <h5>Place of Origin:</h5> 
                                    <input type="text" name="bapMorig" class="form-control col-md-6" value="<?php echo $motherOrigin; ?>" disabled="" > <br><br>
                                </div>
                                <div class="col-md-12">
                                    <h5>Residence:</h5> 
                                    <input type="text" name="bapParentsplace" class="form-control" value="<?php echo $parentResidence; ?>" disabled="" > <br><br>
                                </div>
                            </div>

                            <hr>

                            <h3 style="color:red;text-align: center">S P O N S O R S</h3>

                            <hr>

                            <?php 
                            $spnsrArr = $conn->query("SELECT bap_sponsors.* FROM bap_sponsors WHERE bap_id='$bapID'");

                            $i = 0;
                            while ($row = mysqli_fetch_array($spnsrArr)) {
                                $spnsrName = $row['sponsors_name'];
                                $spnsrAge = $row['sponsors_age'];
                                $spnsrReligion = $row['sponsors_religion'];
                                $spnsrPlace = $row['sponsors_residence'];
                                $i++;

                             ?>


                            <label>SPONSOR #<?php echo $i;?></label>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <h5>Name:</h5> 
                                    <input type="text" name="spnsName[]" class="form-control" value="<?php echo $spnsrName; ?>" disabled="" />
                                </div>
                                <div class="col-md-2">
                                    <h5>Age:</h5>
                                    <input type="number" name="age[]" class="form-control" value="<?php echo $spnsrAge; ?>" disabled="" />
                                </div>
                                <div class="col-md-4">
                                    <h5>Religion:</h5> 
                                    <input type="text" name="spnsrreligion[]" class="form-control" value="<?php echo $spnsrReligion; ?>" disabled="" />
                                </div>
                                <div class="col-md-12">
                                    <h5>Residence:</h5> 
                                    <input type="text" name="spnsrresidence[]" class="form-control" value="<?php echo $spnsrPlace; ?>" disabled=""/><br><hr>
                                </div>
                            </div>

                            <?php } ?>

                            <p style="color:red;">Paalala: 1, Itype ng maayos ang mga impormasyon,SAGUTIN LAHAT NG MGA KATANUNGAN. 2, Obligasyon po na iptala ng lahat ng mga ninong at ninang dumalo man ito o hindi. 3, Kung may mali man ukol sa mahahalagang detalye, maari itong ipaayos kontakin lamang po kami sa loob ng sampung araw. 4, Birth Certificate (NSO) Kung ang bata ay may mahigit isang taong gulang or Local(LCR) Kung ito ay wala pang isang taon, ito ang kailangan papeles sa binyag. 5, Ang takip Binyag at ang mga kandila ay kasama sa mga babayaran sa aming opisina...Maraming Salamt po</p>
                            <br> 
                    </form>
                </div>
                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>
                <div class="modal-footer">
                    <br><br><br><button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                </div>
            </div>
<?php 
    } 
    
    // ================================================FUNERAL FORM===============================================
    if($order=='funeral'){

        $data = $conn->query("SELECT client_tbl.client_order, client_tbl.client_fname, client_tbl.client_lname, client_tbl.client_contact, client_tbl.client_email, date_tbl.date, date_tbl.time, funeral_tbl.funeral_name, funeral_tbl.funeral_relation, funeral_tbl.funeral_other FROM client_tbl INNER JOIN date_tbl ON client_tbl.client_id=date_tbl.client_id INNER JOIN funeral_tbl ON client_tbl.client_id=funeral_tbl.client_id WHERE client_tbl.client_id='$id'");

        while($row = mysqli_fetch_assoc($data)){
            $fname          =$row['client_fname'];
            $lname          =$row['client_lname'];
            $contact        =$row['client_contact'];
            $email          =$row['client_email'];
            $date           =$row['date'];
            $time           =$row['time'];

            $deadName       =$row['funeral_name'];
            $deadRelation   =$row['funeral_relation'];
            $comment        =$row['funeral_other'];

        }
    ?>
         <head>
            <title>Submitted Form</title>
            <!-- web page icon -->
            <link rel="shortcut icon" type="image/png" href="../resources/icon/church.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- bootstrap -->
            <link rel="stylesheet" type="text/css" href="../bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
        </head>
        <style type="text/css" media="print">
        .dontprint
        { display: none; }
        </style>
            <div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
                <div class="modal-header">
                    <h4 class="modal-title col-md-8">FUNERAL FORM</h4>
                    <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="reservation.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
                </div>

                <div class="modal-body">
                    <div class="modal-title">FROM</div>
                    <p><b>Name:</b> <?php echo "$fname"." "."$lname"; ?> <br>
                        <b>Email:</b> <?php echo "$email"; ?> <br>
                        <b>Contact:</b> <?php echo "$contact"; ?>
                    </p>
                </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group" style="margin-left: -15px">
                                
                                <div class="col-md-6">
                                    <h5 style="font-family:Lucida Calligraphy">Name of Deceased:</h5>
                                    <input type="text" class="form-control" name="funeral_name" value="<?php echo $deadName; ?>" disabled="">
                                </div>

                                <div class="col-md-6">
                                    <h5 style="font-family:Lucida Calligraphy">Relationship to Deceased:</h5> 
                                    <input type="text" class="form-control" name="funeral_relationship" value="<?php echo $deadRelation; ?>" disabled="">
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Contact Number:</h5> 
                                    <input type="text" class="form-control" name="funeral_contact" value="<?php echo $contact; ?>" disabled="">
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Date:</h5> 
                                   <input type="text" name="datepicker" class="form-control" value="<?php echo date("F j, Y ", strtotime($date)); ?>" disabled=""/>
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Time:</h5> 
                                    <input type="text" name="time" value="<?php echo date('h:i a', strtotime($time)); ?>" disabled="" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <h5 style="font-family:Lucida Calligraphy">Other information or Request</h5>
                                    <textarea style="resize: none" name="cmnt" disabled="" class="form-control col-md-6" rows="4"> <?php echo nl2br($comment); ?></textarea> 
                                </div>
                            </div>
                            <p class="help-block">Client's comment</p><br>
                        </form>
                    </div>
                    <script>
                        function myFunction() {
                            window.print();
                        }
                    </script>
                    <div class="modal-footer">
                        <br><br><br><button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                    </div>
            </div>


<?php }
    if($order=='mass'){

        $data = $conn->query("SELECT client_tbl.client_order, client_tbl.client_fname, client_tbl.client_lname, client_tbl.client_contact, client_tbl.client_email, date_tbl.date, date_tbl.time, mass_tbl.mass_name, mass_tbl.mass_type, mass_tbl.mass_other FROM client_tbl INNER JOIN date_tbl ON client_tbl.client_id=date_tbl.client_id INNER JOIN mass_tbl ON client_tbl.client_id=mass_tbl.client_id WHERE client_tbl.client_id='$id'");

        while($row = mysqli_fetch_assoc($data)){
            $fname          =$row['client_fname'];
            $lname          =$row['client_lname'];
            $contact        =$row['client_contact'];
            $email          =$row['client_email'];
            $date           =$row['date'];
            $time           =$row['time'];

            $massName       =$row['mass_name'];
            $massType       =$row['mass_type'];
            $comment        =$row['mass_other'];

        }
    ?>
        <head>
            <title>Submitted Form</title>
            <!-- web page icon -->
            <link rel="shortcut icon" type="image/png" href="../resources/icon/church.png">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- bootstrap -->
            <link rel="stylesheet" type="text/css" href="../bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
        </head>
        <style type="text/css" media="print">
        .dontprint
        { display: none; }
        </style>
            <div class="modal-content" style="width: 1000px;margin-left: auto;margin-right: auto">
                <div class="modal-header">
                    <h4 class="modal-title col-md-8">MASS FORM</h4>
                    <h5 class="dontprint modal-title col-md-4" style="text-align: right;"><a href="reservation.php" style="text-decoration: none;color: black;"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back</a></h5>
                </div>

                <div class="modal-body">
                    <div class="modal-title">FROM</div>
                    <p><b>Name:</b> <?php echo "$fname"." "."$lname"; ?> <br>
                        <b>Email:</b> <?php echo "$email"; ?> <br>
                        <b>Contact:</b> <?php echo "$contact"; ?>
                    </p>
                </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group" style="margin-left: -15px">
                                
                                <div class="col-md-6">
                                    <h5 style="font-family:Lucida Calligraphy">Name of Client:</h5>
                                    <input type="text" class="form-control" name="Name_of_Client" value="<?php echo $massName; ?>" disabled="">
                                </div>

                                <div class="col-md-6">
                                    <h5 style="font-family:Lucida Calligraphy">Type of Thankgiving Mass:</h5> 
                                    <input type="text" name="type" class="form-control" value="<?php echo $massType; ?>" disabled="">
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Contact Number:</h5> 
                                    <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>" disabled="">
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Date:</h5> 
                                   <input type="text" name="datepicker" class="form-control" value="<?php echo date("F j, Y ", strtotime($date)); ?>" disabled=""/>
                                </div>
                                
                                <div class="col-md-4">
                                    <h5 style="font-family:Lucida Calligraphy">Time:</h5> 
                                    <input type="text" name="time" value="<?php echo date('h:i a', strtotime($time)); ?>" disabled="" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <h5 style="font-family:Lucida Calligraphy">Other information or Request</h5>
                                    <textarea style="resize: none" name="cmnt" disabled="" class="form-control col-md-6" rows="4"> <?php echo nl2br($comment); ?></textarea> 
                                </div>
                            </div>
                            <p class="help-block">Client's comment</p><br>
                        </form>
                    </div>
                    <script>
                        function myFunction() {
                            window.print();
                        }
                    </script>
                    <div class="modal-footer">
                        <br><br><br><button style="display:block;margin-left:auto;margin-top:-50px" class="btn btn-primary btn-lg hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                    </div>
            </div>


<?php }

}

?>

</body>
</html>