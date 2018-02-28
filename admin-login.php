<?php
    // Session_Start();
    // if(isset($_SESSION['admin_user'])){
    // header("location:#");
    // }else{
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
            <h1 class="text-center">Admin Login <span class=" glyphicon glyphicon-log-in"></span></h1>
        </div>

        <div style="width:500px;height:350px;margin-left:auto;margin-right:auto;margin-top:75px;">
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input name="user" type="text" class="form-control" id="inputUser" placeholder="Enter admin username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPass" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input name="pass" type="password" class="form-control" id="inputPass" placeholder="Enter admin password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="login" class="btn btn-default" value="Sign In"/>
                     </div>
                </div>
            </form>
        </div>

        <?php
            if(isset($_POST['login'])){
                include("db.php");
                $admin_user=$_POST['user'];
                $admin_pass=$_POST['pass'];

                $login1=$connect->query("SELECT * FROM admin WHERE username='$admin_user' && password='$admin_pass'");

                $numrows=mysqli_num_rows($login1);

                if(empty ($admin_user) || empty ($admin_pass)){
                    die("<script>
                        alert('All fields are required');
                        window.location.href='admin.php';
                        </script>");
                }

                if($numrows>0){

                    while($row = mysqli_fetch_array($login1)){
                        $_SESSION['usename']=$row[0];
                        $_SESSION['password']=$row[1];
                    }

                header("location:admin.php");
                }

                else{
                    die("<script>
                        alert('Username or Password is Incorrect');
                        window.location.href='admin.php';
                        </script>");
                }
            }
        ?>

        <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved <!-- | <a class="admin" href="admin.php">VLAN Gaming.</a> --></div>
    </div>
</body>
</html>
<?php  ?>