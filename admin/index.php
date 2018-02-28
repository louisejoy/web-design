<?php
    include("../db.php");
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
        <?php 
            include('header.php');
        ?>


        <div class="navbar page-header">
            <h5 style="float:right;margin-top:-25px;margin-right:30px;"><?php echo date('F d Y, l'); ?></h5>
        </div>
                
        <div class="media" style="margin-top: -10px;">
            <div class="media-left">
                <img src="../resources/icon/admin.png" class="media-object" style="width:150px;padding: 10px;margin-left: 100px;margin-top: -10px;">
            </div>
            <div class="media-body">
                <h4 class="media-heading">Hello Admin</h4>
                <p>This is your profile account.</p>
            </div>
        </div>


        <div class="jumbotron">
            <div style="height:auto;width:900px;margin-left:auto;margin-right:auto;margin-top:15px;margin-bottom:-25px;border:1px solid transparent;">
                <p style="font-size:20px;">Messages</p>
                
            </div>
            <div class="thumbnail" style="padding: 20px;height:280px;width:1100px;margin-left:auto;margin-right:auto;margin-top:20px;margin-bottom:15px;overflow:auto">
                <p style="font-size:20px;">Unread:
                <?php
                    include('../db.php');
                    $cmnt="SELECT * FROM mssg_tbl WHERE mssg_status=0 ORDER BY mssg_date DESC";
                    $cmnt1=$conn->query($cmnt);
                            
                    $numrows=mysqli_num_rows($cmnt1);
                    if($numrows>0){
                        echo $numrows;
                    }else{
                        echo 0;
                    }
                ?>
                <p/>
                <table class="table table-hover" style="margin-top:15px;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                        if($numrows>0){
                            while($row=mysqli_fetch_assoc($cmnt1)){
                                $fn = $row['mssg_fn'];
                                $ln = $row['mssg_ln'];
                                $email = $row['mssg_email'];
                                $subject = $row['mssg_subject'];
                                $comment = $row['mssg_cmnt'];

                                echo "<tr class='warning'>
                                        <td style='width:400px;'>".$fn." ".$ln."</td>
                                        <td style='width:200px;'>".$email."</td>
                                        <td style='width:200px;'>".$subject."</td>
                                        <td style='width:500px;'>".nl2br($comment)."</td>
                                        <td style='width:500px;'>".date("l\, jS \of F Y - h:i:s A", strtotime($row['mssg_date']))."</td>
                                        <td>
                                            <form action='' method='POST'>
                                                <button type='submit' name='read' class='btn btn-warning'>Read</button>
                                        </td>
                                        <td>
                                                <input type='hidden' name='id' value='$row[mssgnum]'/>
                                            </form>
                                        </td>
                                      </tr>";
                            }
                            
                            if(isset($_POST['read'])){
                                $cmntnum=$_POST['id'];
                                
                                $update=$conn->query("UPDATE mssg_tbl SET mssg_status=2 WHERE mssgnum=$cmntnum");
                                
                                if(!$update){
                                    die("<script>
                                            alert('Error');
                                        </script>");
                                }else{
                                    die("<script>
                                            window.location.href='index.php';
                                         </script>");
                                }
                            }
                        }else{
                            echo "<td colspan='7'>No Messages Found</td>";
                        }
                    ?>
                </table>
            </div>
            <div style="height:280px;width:1070px;margin-left:auto;margin-right:auto;margin-top:20px;margin-bottom:15px;overflow:auto">
                <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;Read:
                <?php
                    $cmnt1="SELECT * FROM mssg_tbl WHERE mssg_status=2 ORDER BY mssg_date ASC";
                    $cmnt2=$conn->query($cmnt1);
                            
                    $numrows1=mysqli_num_rows($cmnt2);
                    if($numrows1>0){
                        echo $numrows1;
                    }else{
                        echo 0;
                    }
                ?>
                <p/>
                <table class="table table-hover" style="margin-top:15px;">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                        if($numrows1>0){
                            while($row=mysqli_fetch_assoc($cmnt2)){
                                $fn = $row['mssg_fn'];
                                $ln = $row['mssg_ln'];
                                $email = $row['mssg_email'];
                                $subject = $row['mssg_subject'];
                                $comment = $row['mssg_cmnt'];

                                echo "<tr>
                                        <td style='width:300px;'>".$fn." ".$ln."</td>
                                        <td style='width:200px;'>".$email."</td>
                                        <td style='width:200px;'>".$subject."</td>
                                        <td style='width:400px;'>".nl2br($comment)."</td>
                                        <td style='width:400px;'>".date("l\, jS \of F Y - h:i:s A", strtotime($row['mssg_date']))."</td>
                                        <td>
                                            <form action='' method='POST'>
                                        </td>
                                        <td>
                                            <button style='background:transparent;border:1px solid transparent' type='submit' name='delete'><span class='glyphicon glyphicon-trash'></span></button>
                                            <input type='hidden' name='id' value='$row[mssgnum]'/>
                                            </form>
                                        </td>
                                      </tr>";
                            }
                            
                            if(isset($_POST['delete'])){
                                $cmntnum=$_POST['id'];
                                
                                $delete="DELETE FROM mssg_tbl WHERE mssgnum='$cmntnum'";
                                $delete1=$conn->query($delete);
                                
                                if(!$delete1){
                                    die("<script>
                                            alert('Error encountered, Reloading page');
                                            window.location.href='index.php';
                                         </script>");
                                }else{
                                    die("<script>
                                            alert('Message succesfully deleted');
                                            window.location.href='index.php';
                                         </script>");
                                }
                            }
                        }else{
                            echo "<td colspan='6'>No Messages Found</td>";
                        }
                    ?>
                </table>
            </div><!-- ENDS -->
        </div>


		<div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved</div>
	</div>
</body>
</html>
<?php
    }else{
        die("<script>
                alert('Log in admin account first');
		window.location.href='../admin-login.php';
            </script>".mysqli_error());
    }
?>