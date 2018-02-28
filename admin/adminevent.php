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
            <div class="modal-content" style="width: 1200px;margin-left: auto;margin-right: auto;">
                    <div class="modal-header">
                        <h4 class="modal-title" style="text-align: center;">ADDING EVENTS</h4>
                    </div>

                    <div class="modal-body">
                        <form role="form" method="POST" action="">
                            <div class="form-group col-md-6">
                                <h5>Month</h5>
                                <select name="event_month" class="form-control">
                                    <option value="Jan">January</option>
                                    <option value="Feb">February</option>
                                    <option value="Mar">March</option>
                                    <option value="Apr">April</option>
                                    <option value="May">May</option>
                                    <option value="Jun">June</option>
                                    <option value="Jul">July</option>
                                    <option value="Aug">August</option>
                                    <option value="Sep">September</option>
                                    <option value="Oct">October</option>
                                    <option value="Nov">November</option>
                                    <option value="Dec">December</option>
                                </select>
                            </div>
                            <!-- ============================Day============================ -->
                            <div class="form-group col-md-6">
                                <h5>Day</h5>
                                <select name="event_day" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select><br>
                            </div>

                            <div class="form-group">
                                <h5>Add Title</h5>
                                <input type="text" name="event_title" class="form-control" placeholder="Enter Event Title" required><br>
                                <h5>Add Description</h5>
                                <textarea name="event_desc" class="form-control" placeholder="Enter Event Description" required></textarea>
                            </div>

                        <button name="submit" type="submit" class="btn btn-default" style="margin-right: auto;margin-left: auto;display: block;">ADD</button><br>
                        </form>
                    <?php
                        if(isset($_POST['submit'])){
                            $event_month=$_POST['event_month'];
                            $event_day=$_POST['event_day'];
                            $event_title=$_POST['event_title'];
                            $event_desc=$_POST['event_desc'];
                            
                            $insert=$conn->query("INSERT INTO event_tbl VALUES ('','$event_month','$event_day',\"$event_title\",\"$event_desc\",NOW(),0)");
                            
                            if(!$insert){
                                die("<script>
                                        alert('Error');
                                        window.location.href='adminevent.php';
                                     </script>");
                            }else{
                                echo "<script>
                                        alert('Success');
                                        window.location.href='adminevent.php';
                                     </script>";
                            }
                        }
                    ?>
                <br/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>
                                EVENT MONTH
                            </th>
                            <th>
                                EVENT DAY
                            </th>
                            <th>
                                EVENT TITLE
                            </th>
                            <th>
                                EVENT DESRIPTION
                            </th>
                            <th>
                                DATE CREATED
                            </th>
                            <th>
                                
                            </th>
                        </tr>
                    <?php
                        include("../db.php");

                        $select=$conn->query("SELECT * FROM event_tbl WHERE event_order=0");

                        $select1=mysqli_num_rows($select);

                        if($select1>0){
                            while($rw=mysqli_fetch_array($select)){
                    ?>
                        <tr>
                            <td>
                                <?php echo $rw['event_month']; ?>
                            </td>
                            <td>
                                <?php echo $rw['event_day']; ?>
                            </td>
                            <td>
                                <?php echo $rw['event_title']; ?>
                            </td>
                            <td>
                                <?php echo $rw['event_desc']; ?>
                            </td>
                            <td>
                                <?php echo $rw['date_created']; ?>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $rw['event_id']; ?>">
                                    <button type="submit" name="del" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        }
                    }

                    if(isset($_POST['del'])){
                        $eventid=$_POST['id'];
                        
                        $update=$conn->query("UPDATE event_tbl SET event_order=1 WHERE event_id=$eventid");
                        
                        if(!$update){
                            die("<script>
                                    alert('Error');
                                </script>");
                        }else{
                            die("<script>
                                    alert('Successfully removed');
                                    window.location.href='adminevent.php';
                                 </script>");
                        }
                    }
                    ?>
                    </table><br><br>

                    <p style="font-size:20px;">Removed:
                    <?php
                        $selectevent=$conn->query("SELECT * FROM event_tbl WHERE event_order=1 ORDER BY date_created DESC");
                                
                        $numrows1=mysqli_num_rows($selectevent);
                        if($numrows1>0){
                            echo $numrows1;
                        }else{
                            echo 0;
                        }
                    ?>
                    </p>
                    <table class="table table-hover" style="margin-top:15px;">
                        <tr>
                            <th>
                                EVENT MONTH
                            </th>
                            <th>
                                EVENT DAY
                            </th>
                            <th>
                                EVENT TITLE
                            </th>
                            <th>
                                EVENT DESRIPTION
                            </th>
                            <th>
                                DATE CREATED
                            </th>
                            <th></th>
                        </tr>
                        <?php

                    if($numrows1>0){
                        while($row=mysqli_fetch_array($selectevent)){
                            $id = $row['event_id'];
                            $type = $row['event_order'];
                ?>
                        <tr>
                            <td>
                                <?php echo $row['event_month']; ?>
                            </td>
                            <td>
                                <?php echo $row['event_day']; ?>
                            </td>
                            <td>
                                <?php echo $row['event_title']; ?>
                            </td>
                            <td>
                                <?php echo $row['event_desc']; ?>
                            </td>
                            <td>
                                <?php echo date("l\, F j Y - h:i:s A", strtotime($row['date_created'])); ?>
                            </td>
                            <td><a href="delete.php?delEvent=<?php echo $id; ?>&&delType=<?php echo $type; ?>" onclick="javascript: return confirm('Confirm Deletion?')" style='color: black;'>
                                        <button style='background:transparent;border:1px solid transparent' type='button'><span class='glyphicon glyphicon-trash'></span></button></a>
                        <?php echo  "<form action='' method='POST'>
                                        <input type='hidden' name='id' value='$id'/>
                                    </form>
                                    </td>
                                 </tr>";?>
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    </table>
                </div> 
            </div>
            <div class="modal-footer">
                <a href="../events.php" type="button" class="btn btn-primary">View event page <span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
            </div><!-- end of modal content -->
        </div>
                
</body>
</html>
<?php
    }
?>