<?php
    include('db.php');
    // session_start();
    // if(isset($_SESSION['emp_num'])){
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
                    <a id="nav" class="navbar-brand" href="index.php">Student Examination <small>Online</small></a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a id="nav" href="#tile"><span class="glyphicon glyphicon-list" style="margin-right:5px;"></span>Exam Title</a></li>
                        <li><a id="nav" href="#code"><span class="glyphicon glyphicon-edit" style="margin-right:5px;"></span>Exam Code</a></li>
                        <li><a id="nav" href="#quest"><span class="glyphicon glyphicon-pencil" style="margin-right:5px;"></span>Test Q</a></li>
                        <li><a id="nav" href="#score"><span class="glyphicon glyphicon-file" style="margin-right:5px;"></span>Scores</a></li>
                        <li><a id="nav" href="logout.php"><span class="glyphicon glyphicon-log-out" style="margin-right:5px;"></span>Log Out</a></li>
                    </ul>
              </div>
            </nav>

            <div class="navbar page-header">
                <h5 style="float:right;margin-top:-25px;margin-right:30px;"><?php echo date('d F Y, l'); ?></h5>
            </div>
            
            <div class="media">
                <div class="media-left">
                  <img src="images/teacher-icon.png" class="media-object" style="width:150px;padding: 10px;margin-left: 100px;">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Hello Professor <?php ?></h4>
                  <p>This is your profile account where you can add examination tests.</p>
                </div>
            </div>
            <hr>
            
            <!-- =====================================================EXAMINATION ADDING========================================================= -->
            <div class="navbar page-header">
                <h1 class="text-center">Examination</h1>
            </div>

            <div style="width:800px;height:auto;margin-left:auto;margin-right:auto;margin-top:60px;">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-3 ">
                            <input name="code" type="text" class="form-control" id="excode" placeholder="Enter Exam Code">
                        </div>
                        <div class="col-xs-6 col-sm-3 ">
                            <input name="title" type="text" class="form-control" id="extitle" placeholder="Enter Exam Title">
                        </div>
                        <div class="col-xs-6 col-sm-3 ">
                            <select name = "subject_code" class="form-control">
                            <option value="0" selected="selected">Choose subject</option>
                            <option disabled="disabled">---------------------------------</option>
                            <?php 
                                $subj = $connect->query("SELECT subject_code FROM subject");
                                while($row1 = mysqli_fetch_array($subj)){
                                    echo "<option value = $row1[subject_code]>$row1[subject_code]</option>";
                                } 
                            ?>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 ">
                            <input type="submit" name="add" class="btn btn-default" value="Add"/>
                        </div>
                    </div>
                </form>
            </div>
            
            <?php 
                if(isset($_POST['add'])){
                    $exam_code = $_POST['code'];
                    $exam_title = $_POST['title'];

                    $data = $connect->query("INSERT INTO exam (exam_code, exam_title) values ('$exam_code', '$exam_title')");
                    if(!$data){
                        die("Adding Record Failed");
                    }
                    else{
                        header("location:teacher.php");
                        }
                }

            ?>
            <!--  =====================================================EXAMINATION ADDING========================================================= -->

            <a name="title"></a>
            <div class="navbar page-header">
                <h1 class="text-center">Examination Title</h1>
            </div>

            <div style="height:50px;width:1100px;margin-left:auto;margin-right:auto">
                <p style="font-size:17px;text-align:center;">Here is where you can edit the examination titles. You can only change 1 title at a time by clicking the save icon in the right side of that row.</p>
            </div>
            
             <?php 
            ?>

            <hr>
            <!-- =====================================================EXAMINATION CODE========================================================= -->
            <a name="code"></a>
            <div class="navbar page-header">
                <h1 class="text-center">Examination Codes</h1>
            </div>

            <div style="height:50px;width:1100px;margin-left:auto;margin-right:auto">
                <p style="font-size:17px;text-align:center;">Here is where you can edit the examination titles. You can only change 1 title at a time by clicking the save icon in the right side of that row.</p>
            </div>

             <?php 
            ?>

            <hr><!-- =====================================================EXAMINATION CODE ENDS========================================================= -->

            <!-- =====================================================TEST QUESTION========================================================= -->
            <a name="quest"></a>
            <div class="navbar page-header">
                <h1 class="text-center">Test Questions</h1>
            </div>

            <div style="width:800px;height:auto;margin-left:auto;margin-right:auto;margin-top:60px;">
                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputNo" class="col-md-4 control-label">Add Examination Code*</label>
                        <div class="col-md-4">
                            <input name="num" type="text" class="form-control" id="inputSn" placeholder="Enter Exam code">
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <input type="submit" name="add" class="btn btn-default" value="Add"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php 
                
            ?>

            <div style="height:50px;width:1100px;margin-left:auto;margin-right:auto">
                <p style="font-size:17px;text-align:center;">Here is where you can edit the examination titles. You can only change 1 title at a time by clicking the save icon in the right side of that row.</p>
            </div>

            <hr><!-- =====================================================TEST QUESTION ENDS========================================================= -->

            <!-- =====================================================STUDENT'S SCORES========================================================= -->
            <a name="score"></a>
            <div class="navbar page-header">
                <h1 class="text-center">Student's Scores</h1>
            </div>

            <div style="height:50px;width:1100px;margin-left:auto;margin-right:auto">
                <p style="font-size:17px;text-align:center;">Here is where you can edit the examination titles. You can only change 1 title at a time by clicking the save icon in the right side of that row.</p>
            </div>

            <?php 
                
            ?>

            <hr><!-- =====================================================STUDENT'S SCORES ENDS========================================================= -->

            <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved <!-- | <a class="admin" href="admin.php">VLAN Gaming.</a> --></div>
        </div>
</body>
</html>
<?php
    // }else{
    //     die("<script>
    //             alert('Log in your account first');
    //     window.location.href='login.php';
    //         </script>".mysqli_error());
    // }
?>