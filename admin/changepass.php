<?php
    session_Start();
    if(isset($_SESSION['admin_user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Account</title>

	<!-- web page icon -->
	<link rel="shortcut icon" type="image/png" href="../resources/icon/church.png">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../bootstrap/Bootstrap 3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
	<!-- css -->
	<!-- <link rel="stylesheet" href="../css/admin-account.css"> -->
</head>
<body>

	<!-- 
		whole page 
	-->
        <div id="parentDiv">
                 <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                    <a id="nav" class="navbar-brand" href="../index.php">St Vincent Ferer Parish Church<small>&nbsp(Admin)</small></a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="accountset.php"><span class="glyphicon glyphicon-circle-arrow-left" style="margin-right:5px;"></span>Go Back</a></li>
                        <li><a id="nav" href="logout.php"><span class="glyphicon glyphicon-off" style="margin-right:5px;"></span>Log out</a></li>
                    </ul>
              </div>
            </nav>
                        <div class="modal-content" style="width:500px;margin-left:auto;margin-right:auto;margin-top:50px;margin-bottom:88px;">
                <div class="modal-header">
                    <h4 class="modal-title">Password</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                    <?php
                        include("../db.php");

                        $db1="SELECT * FROM admin_tbl";
                        $select1=$conn->query($db1);

                        while($row=mysqli_fetch_array($select1)){
                            $passw=$row['admin_pass'];
                        }
                    ?>
                    <input type="password" class="form-control" value="" name="oldpass" placeholder="Enter Old Password"/>
                    <input style="margin-top:5px;" type="password" class="form-control" value="" name="newpass" placeholder="Enter New Password"/>
                    <input style="margin-top:5px;" type="password" class="form-control" value="" name="repass" placeholder="Re-Enter New Password"/>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="save" class="btn btn-primary" value="Save Changes"/>
                    <?php
                        if(isset($_POST['save'])){
                            $oldpass=md5($_POST['oldpass']);
                            $newpass=md5($_POST['newpass']);
                            $repass=md5($_POST['repass']);
                            
                            $newpassw=strlen($newpass);
                            
                            if(empty ($oldpass)){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> Old password is required</p>";
                            }else if(empty ($newpass)){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> New password is required</p>";
                            }else if(empty ($repass)){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> Please re-enter new password</p>";
                            }else if($newpass != $repass){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> New password did not match</p>";
                            }else if($newpassw <= 7){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> New password must be 8 characters and above</p>";
                            }else if($oldpass != $passw){
                                echo "<br/><p style='text-align:center;'><span class='glyphicon glyphicon-warning-sign'></span> Old password is incorrect</p>";
                            }else{
                                $update="UPDATE admin_tbl SET admin_pass='$newpass'";
                                $update1=$conn->query($update);
                                
                                if(!$update1){
                                    die("<script>
                                        alert('Error encountered, Reloading page');
                                        window.location.href='changeuser.php';
                                     </script>");
                                }else{
                                    die("<script>
                                        alert('Admin password changed succesfully');
                                        window.location.href='accountset.php';
                                     </script>");
                                }
                                
                            }
                        }
                    ?>

                </form>
            </div>
        </div>
        <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved</div>
        
</body>
</html>
<?php

}
?>