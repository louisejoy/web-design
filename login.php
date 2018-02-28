<?php
    include('db.php');
     session_start();
     if(isset($_SESSION['stud_num'])){
         header("location:student.php");
     }
    
     if(isset($_SESSION['emp_num'])){
         header("location:adminaccount.php");
     }
    
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
            <h1 class="text-center">Login <span class=" glyphicon glyphicon-log-in"></span></h1><br>
        </div>

        <div style="width:500px;height:350px;margin-left:auto;margin-right:auto;margin-top:45px;">
            <form role="form" action="" method="POST">
                <div class="form-group">
                    <label for="id">Student / Employee number</label>
                    <input type="text" name="id" class="form-control" id="id" placeholder="Enter Student/Employee Number" required/>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter Password" required/>
                </div>
                <button type="submit" name="login" class="btn btn-default">Log In</button>
            </form>
        </div>
        
        <?php
            if(isset($_POST['login'])){
                $id=addslashes($_POST['id']);
                $pass=addslashes($_POST['pass']);

                $checkStudent=$connect->query("SELECT *
                                               FROM student
                                               WHERE stud_no='$id' && stud_pass='$pass'");

                $checkEmployee=$connect->query("SELECT *
                                                FROM employee
                                                WHERE emp_no='$id' && emp_pass='$pass'");

                $studentNum=mysqli_num_rows($checkStudent);
                $employeeNum=mysqli_num_rows($checkEmployee);

                if($studentNum>0){
                    while($rw=mysqli_fetch_array($checkStudent)){
                        $_SESSION['stud_no']=$rw['stud_no'];
                        $_SESSION['stud_pass']=$rw['stud_pass'];
                    }

                    die("<script>
                            window.location.href='timer.php';
                        </script>");
                }else if($employeeNum>0){
                    while($rw=mysqli_fetch_array($checkEmployee)){
                        $_SESSION['emp_no']=$rw['emp_no'];
                        $_SESSION['emp_pass']=$rw['emp_pass'];
                    }

                    die("<script>
                            window.location.href='teacher.php';
                        </script>");
                }else{
                    die("<script>
                            window.alert('Invalid Data');
                            window.location.href='login.php';
                         </script>");
                }    
            }
        ?>
        <div class="well"><center>Copy Right &#xA9 2017. All Rights Reserved</center></div>
    </div>
</body>
</html>