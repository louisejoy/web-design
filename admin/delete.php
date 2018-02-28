<?php
include('../db.php');
if(isset($_GET['delReservation'])){
	$clientID = $_GET['delReservation'];
    $order = $_GET['delOrder'];

    // ================================================DELETE WEDDING====================================================
    if($order=='wedding'){       
        $set = $conn->query('SET foreign_key_checks = 0');  
        if(!$set){
            die('error');
        }else{    
        	$sql = "DELETE FROM wed_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM date_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM client_tbl WHERE client_id='$clientID'";

        	if ($conn->multi_query($sql) === TRUE) {

                $set1 = $conn->query('SET foreign_key_checks = 1');  
    		    die("<script>
                        alert('Records succesfully deleted');
                        window.location.href='reservation.php';
                    </script>");
    		} 

    		else {
    		    die("<script>
                        alert('Error encountered, Reloading page');
                        window.location.href='reservation.php';
                    </script>");
    		}
        }
    }

    // ================================================DELETE BAPTISM======================================================
    if($order=='baptism'){ 
        $selectBap=$conn->query("SELECT * FROM bap_tbl");

        while($row=mysqli_fetch_array($selectBap)){
            $bapID = $row['bap_id'];
        }
        $set = $conn->query('SET foreign_key_checks = 0');  
        if(!$set){
            die('error');
        }else{
            $sql = "DELETE FROM bap_sponsors WHERE bap_id='$bapID';";
            $sql .= "DELETE FROM bap_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM date_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM client_tbl WHERE client_id='$clientID'";

            if ($conn->multi_query($sql) === TRUE) {

                $set1 = $conn->query('SET foreign_key_checks = 1');  
                die("<script>
                        alert('Records succesfully deleted');
                        window.location.href='reservation.php';
                    </script>");
            } 

            else {
                die("<script>
                        alert('Error encountered, Reloading page');
                        window.location.href='reservation.php';
                    </script>");
            }
        }
    }

    // ================================================DELETE FUNERAL======================================================
    if($order=='funeral'){
        $set = $conn->query('SET foreign_key_checks = 0');  
        if(!$set){
            die('error');
        }else{   
            $sql = "DELETE FROM funeral_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM date_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM client_tbl WHERE client_id='$clientID'";

            if ($conn->multi_query($sql) === TRUE) {

                $set1 = $conn->query('SET foreign_key_checks = 1');  
                die("<script>
                        alert('Records succesfully deleted');
                        window.location.href='reservation.php';
                    </script>");
            } 

            else {
                die("<script>
                        alert('Error encountered, Reloading page');
                        window.location.href='reservation.php';
                    </script>");
            }
        }
    }

     // ================================================DELETE MASS======================================================
    if($order=='mass'){
        $set = $conn->query('SET foreign_key_checks = 0');  
        if(!$set){
            die('error');
        }else{   
            $sql = "DELETE FROM mass_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM date_tbl WHERE client_id='$clientID';";
            $sql .= "DELETE FROM client_tbl WHERE client_id='$clientID'";

            if ($conn->multi_query($sql) === TRUE) {

                $set1 = $conn->query('SET foreign_key_checks = 1');  
                die("<script>
                        alert('Records succesfully deleted');
                        window.location.href='reservation.php';
                    </script>");
            } 

            else {
                die("<script>
                        alert('Error encountered, Reloading page');
                        window.location.href='reservation.php';
                    </script>");
            }
        }
    }

}

// ====================================================DELETE EVENT=================================================
if(isset($_GET['delEvent'])){
    $id = $_GET['delEvent'];
    $type = $_GET['delType'];

    if($type==1){
        $set = $conn->query('SET foreign_key_checks = 0');  
        if(!$set){
            die('error');
        }else{
            $sql = $conn->query("DELETE FROM event_tbl WHERE event_id='$id'");

            if(!$sql){
                die("<script>
                        alert('Error encountered, Reloading page');
                        window.location.href='adminevent.php';
                    </script>");
            }else{
                $set1 = $conn->query('SET foreign_key_checks = 1');  
                die("<script>
                        alert('Records succesfully deleted');
                        window.location.href='adminevent.php';
                    </script>");
            }
        }
    }
}
?>