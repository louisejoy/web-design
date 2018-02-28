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
            <div class="page-header">
                <h1 style="text-align:center">RESERVATIONS</h1>
            </div>
            <?php include('reserve-header.php'); ?>
                 
                <h3 style="text-align:center;">Total of:     
                <?php
                    include('../db.php');

                    $count="SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=2 AND client_tbl.client_id=date_tbl.client_id";
                    $count1=$conn->query($count);
                            
                    $numrows=mysqli_num_rows($count1);
                    if($numrows>0){
                        echo $numrows;
                    }else{
                        echo 0;
                    }?>
                </h3> 
            <!-- ================================================DENIED=================================================== -->

                <h3 style="text-align:center;">Denied</h3>     
                <?php
                    include("../db.php");
                    $select="SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=2 AND client_tbl.client_id=date_tbl.client_id";
                    $select1=$conn->query($select);
                    
                    $numrows=mysqli_num_rows($select1);
                    if($numrows<=0){
                        echo "<p style='font-size:16px;text-align:center'>No Denied Reservations Found</p>";
                    }else{?>
                            <table id='myTable' class='table table-hover table-bordered'>
                                <tr class='danger'>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>ID no.</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Date and Time Reserved</th>
                                    <th>Form</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                     <?php  

                        $counter = 1;
                        while($row=mysqli_fetch_array($select1)){
                            $clientID=$row['client_id'];
                            $order = $row['client_order'];

                            echo "<tr class='danger'>
                                    <td>".$counter."</td>
                                    <td style='width: 300px;'>".ucwords($row['client_fname'])." ".ucwords($row['client_mname'])." ".ucwords($row['client_lname'])."</td>
                                    <td>".$row['client_id']."</td>
                                    <td>".$row['client_gender']."</td>
                                    <td>".$row['client_email']."</td>
                                    <td>".$row['client_contact']."</td>
                                    <td style='width:500px;'>".date("l, F j, Y ", strtotime($row['date']))." at ".date("h:i a", strtotime($row['time']))."</td>
                                    <td>".ucwords($order)."</td>"?>
                                    <td><a href='formsubmitted.php?clientID=<?php echo $clientID; ?>&&clientOrder=<?php echo $order; ?>'>
                                    <button type='button' name='form' class='btn btn-primary'>Form</button>
                                    </a></td>
                                    <td>
                                    <a href="delete.php?delReservation=<?php echo $clientID; ?>&&delOrder=<?php echo $order; ?>" onclick="javascript: return confirm('Confirm Deletion?')" style='color: black;'>
                                    <button style='background:transparent;border:1px solid transparent' type='button'><span class='glyphicon glyphicon-trash'></span></button></a>
                        <?php echo  "
                                    </td>
                                 </tr>";
                            $counter++;
                        }
                    }
                ?>
                </table>
                <script>
                function myFunction() {
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[1]; // This code only get the first "td" element
                            if (td) {
                                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                             }         
                        }
                }
                </script>
            </div><!-- DENIED TABLE ENDS -->

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

