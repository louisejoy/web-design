<?php  
    Session_Start();
    include('db.php');
    
?>
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
            <h1 class="text-center">Teacher Registration</h1>
        </div>

        <div style="width:500px;height:350px;margin-left:auto;margin-right:auto;margin-top:60px;">
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputNo" class="col-sm-4 control-label">Employee. no*</label>
                    <div class="col-sm-8">
                        <input name="num" type="text" class="form-control" id="inputSn" placeholder="Enter Employee number">
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
                <!-- <div class="form-group">
                    <label for="inputCp" class="col-sm-4 control-label">Confirm Password*</label>
                    <div class="col-sm-8">
                        <input name="confpass" type="text" class="form-control" id="inputCp" placeholder="Confirm Password">
                    </div>
                </div><br> -->
                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-10">
                        <input type="submit" name="login" class="btn btn-default" value="Finish!"/>
                    </div>
                 </div>
            </form>
        </div><br><br>

        <?php  
            if(isset($_POST['login'])){
                $emp_num = $_POST['num'];
                $emp_fn = $_POST['fn'];
                $emp_mn = $_POST['mn'];
                $emp_ln = $_POST['ln'];
                $emp_pass = $_POST['pass'];

                $data = $connect->query("INSERT INTO employee VALUES ('$emp_num', '$emp_pass', '$emp_ln', '$emp_fn', '$emp_mn')");

                if(!$data){
                    die("<script>
                            alert('Error encountered, Reloading page');
                            window.location.href='teacher-signup.php';
                         </script>");
                }else{
                    Session_Destroy();
                    die("<script>
                        alert('Your registration is succesfully!. You can now login your account. Thank you!');
                        window.location.href='teacher-signup.php';
                        </script>");
                }
            } 
        ?>

        <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved <!-- | <a class="admin" href="admin.php">VLAN Gaming.</a> --></div>
    </div>
</body>
</html>