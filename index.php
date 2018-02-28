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
                        <li><a id="nav" href="admin-login.php"><span class="glyphicon glyphicon-user" style="margin-right:5px;"></span>Admin</a></li>
                    </ul>
              </div>
            </nav>

            <div class="navbar page-header">
                <h5 style="float:right;margin-top:-25px;margin-right:30px;"><?php echo date('d F Y, l'); ?></h5>
                <h1 class="text-center">WELCOME</h1>
            </div>
            
            <div style="height:100px;width:800px;margin-left:auto;margin-right:auto;margin-top:30px;">
                <ul style="font-size:15px;text-align:left;"> 
                    <li>If you're a <strong>student</strong> you must create an account to take the exam; click the box below labeled as <i>student</i>.</li>
                    <li>If you're an employee <strong>teacher</strong> you must create an account to input your exam; click the box below labeled as <i>teacher</i>.</li>
                    <li>If you're the <strong>admin</strong> just click the admin menu on the right side corner to login your account.</li>
                </ul>
            </div><br/>
            
            <div class="jumbotron text-center">
                <h2 style="margin-top:-5px;">Register as<!-- <span class="label label-default" style="background:red;">HOT</span> --></h2><br/><br>
                                            <center>
                <table class="row" style="display: block; ">
                	<tr class="col-md-3 col-md-offset-4 ">
                        <td>
                            <div class="thumbnail" style="padding: 50px">
                              <a href="student-signup.php">
                                <img src="images/student-icon.png" alt="Student" style="width:100%">
                                <div class="caption">
                                  <p>STUDENT</p>
                                </div>
                              </a>
                            </div>
                            </td>
                            <td style="padding: 80px;">OR</td>
                	    <td class="col-md-3">
						    <div class="thumbnail" style="padding: 50px">
						      <a href="teacher-signup.php">
						        <img src="images/teacher-icon.png" alt="Teacher" style="width:100%">
						        <div class="caption">
						          <p>TEACHER</p>
						        </div>
						      </a>
					   		</div>
					    </td>
				    </tr>
                                    
                </table><br></center>

                <h5>Already have an account? Login <a href="login.php">here</a></h5>
            </div>
            
            <div class="well" style="text-align:center;margin-bottom:0px;">Copy Right &#xA9 2017. All Rights Reserved <!-- | <a class="admin" href="admin.php">VLAN Gaming.</a> --></div>
        </div>
</body>
</html>