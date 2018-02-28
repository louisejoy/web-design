<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Examination</title>
	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="images/file.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">   
        #parentDiv{
           height:auto;
        }

    </style>
</head>
<body>
    <div id="parentDiv">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Student Examination <small>Online</small></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" style="margin-right:5px;"></span>Back to Home</a></li>
                </ul>
            </div>
        </nav>

        <div class="navbar page-header">
            <h5 style="float:right;margin-top:-25px;margin-right:30px;"><?php echo date('d F Y, l'); ?></h5>
            <h1 class="text-center">Student Registration</h1>
        </div>

        <div style="width:500px;height:350px;margin-left:auto;margin-right:auto;margin-top:60px;">
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputNo" class="col-sm-4 control-label">Student. no*</label>
                    <div class="col-sm-8">
                        <input name="num" type="text" class="form-control" id="inputSn" placeholder="Enter Student number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFn" class="col-sm-4 control-label">First Name*</label>
                    <div class="col-sm-8">
                        <input name="fn" type="text" class="form-control" id="inputFn" placeholder="Enter First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMn" class="col-sm-4 control-label">Middle Name*</label>
                    <div class="col-sm-8">
                        <input name="mn" type="text" class="form-control" id="inputMn" placeholder="Enter Middle Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLn" class="col-sm-4 control-label">Last Name*</label>
                    <div class="col-sm-8">
                        <input name="ln" type="text" class="form-control" id="inputLn" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPass" class="col-sm-4 control-label">Password*</label>
                    <div class="col-sm-8">
                        <input name="pass" type="password" class="form-control" id="inputPass" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCp" class="col-sm-4 control-label">Confirm Password*</label>
                    <div class="col-sm-8">
                        <input name="confpass" type="password" class="form-control" id="inputCp" placeholder="Confirm Password">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <input type="submit" name="login" class="btn btn-default" value="Finish!"/>
                    </div>
                 </div>
            </form>
        </div><br><br>

        <?php
         
            if(isset($_POST['login'])){
                include("db.php");
                $std=$_POST['num'];
                $fn=$_POST['fn'];
                $mn=$_POST['mn'];
                $ln=$_POST['ln'];
                $pass=$_POST['pass'];
                
                $login1=$connect->query("INSERT INTO student VALUES ('$std','$pass','$ln','$fn','$mn')");

                
           
            if(!$login1){
                die
                  ("
                      <script>
                          alert('Hindi siya nag save');
                      </script>
                   ");

            }
            else {
                die("
                      <script>
                          alert('Nag save siya');
                      </script>
                    ");
            }   
             }
            
         ?>

        <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved <!-- | <a class="admin" href="admin.php">VLAN Gaming.</a> --></div>
    </div>
</body>
</html>