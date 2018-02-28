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
                    <label for="inputUser" class="col-sm-2 control-label">UserKey
                    </label>
                    <div class="col-sm-8">
                        <input name="user" type="text" class="form-control" id="inputUser" placeholder="Please Enter Your User Admin Key">
                    </div>
                        <a href="admin-login.php" title="Go back">
                        <button style='background:transparent;border:1px solid transparent' class="btn-lg" type='button'><span class='glyphicon glyphicon-new-window'></span></button></a>
                </div>
               
                <div class="form-group" style="text-align: center;">
                    <div class="col-sm-offset-1 col-sm-10">
                        <input type="submit" name="login" class="btn btn-default btn-lg" value="Sign In"/>
                   
                    </div>
                </div>
            </form>
        </div>
        <?php 
            if(isset($_POST['login'])){
                    include("db.php");
                    $admin_key = $_POST['user'];
                    

                    $login="SELECT * FROM admin_tbl WHERE admin_key='$admin_key'";

                    $login1=$conn->query($login);

                    $numrows=mysqli_num_rows($login1);

                    if(empty ($admin_key)){
                        die("<script>
                                alert('All fields are required');
                                window.location.href='forgot.php';
                             </script>");
                    }
                    if($numrows>0){
                        while($row = mysqli_fetch_array($login1)){
                            $_SESSION['admin_user']=$row[0];
                            
                        }

                        header("location:admin/index.php");
                    }else{
                        die("<script>
                                alert('Userkey is Incorrect');
                                window.location.href='forgot.php';
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