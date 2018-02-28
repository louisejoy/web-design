<?php
    session_start();
    if(isset($_SESSION['admin_user'])){
    header("location:admin/index.php");
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="resources/icon/church.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<link rel="stylesheet" href="css/admin-login.css">
</head>
<body style="background: url(resources/backgrounds/bg-login.jpg) top no-repeat;">

	<!-- 
		whole page 
	-->
	<div id="parent-div">
		<div id="position" class="main-title">
            <h1>Admin Log In
				<span id="icon" class="glyphicon glyphicon-log-in"></span>
			</h1><br><br>
                        
                     

			<a href="index.php">RETURN TO HOME</a>
        </div>

        <div id="login">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Username
                    </label>
                    <div class="col-sm-9">
                        <input name="user" type="text" class="form-control" id="inputUser" placeholder="Enter admin username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPass" class="col-sm-2 control-label">Password
                    </label>
                    <div class="col-sm-9">
                        <input name="pass" type="password" class="form-control" id="inputPass" placeholder="Enter admin password">
                    </div>
                </div>
                <div class="form-group" style="text-align: center;">
                    <div class="col-sm-offset-1 col-sm-10">
                        <input type="submit" name="login" class="btn btn-default btn-lg" value="Sign In"/>
                        <br>
                        <a href="forgot.php">Forgot Password?</a>
                        
                    </div>
                </div>
            </form>
        </div>
        <?php 
            if(isset($_POST['login'])){
                    include("db.php");
                    $admin_user = $_POST['user'];
                    $admin_pass = md5($_POST['pass']);

                    $login="SELECT * FROM admin_tbl WHERE admin_user='$admin_user' AND admin_pass='$admin_pass'";

                    $login1=$conn->query($login);

                    $numrows=mysqli_num_rows($login1);

                    if(empty ($admin_user) || empty ($admin_pass)){
                        die("<script>
                                alert('All fields are required');
                                window.location.href='admin-login.php';
                             </script>");
                    }
                    if($numrows>0){
                        while($row = mysqli_fetch_array($login1)){
                            $_SESSION['admin_user']=$row[0];
                            $_SESSION['admin_pass']=$row[1];
                        }

                        header("location:admin/index.php");
                    }else{
                        die("<script>
                                alert('Username or Password is Incorrect');
                                window.location.href='admin-login.php';
                             </script>");
                    }
                }
        ?>

      	<!-- 
      		footer 
      	-->
        <footer class="container-fluid bg text-center" style="padding-top: 70px; padding-bottom: 70px">
			<h5><?php echo date('F d Y, l'); ?></h5>
		</footer>
	</div>
</body>
</html>
<?php } ?>