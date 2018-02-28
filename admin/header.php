
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a id="nav" class="navbar-brand" href="../index.php">St. Vincent Ferer Parish Church<small>&nbsp;(Admin)</small></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a id="nav" href="index.php"><span class="glyphicon glyphicon-dashboard" style="margin-right:5px;"></span>Dashboard&nbsp;
                <span class="badge" title="Unread" style="background-color: #3a87ad;margin-top: -10px; margin-left: -5px;">
                    <?php
                        include("../db.php");
                        $sql = $conn->query("SELECT * FROM mssg_tbl WHERE mssg_status=0 ORDER BY mssg_date DESC");
                        echo "<small>".$count = mysqli_num_rows($sql)."</small>";
                        
                    ?>
                </span></a></li>
            <li><a id="nav" href="reservation.php"><span class="glyphicon glyphicon-list" style="margin-right:5px;"></span>Reservation&nbsp;
                <span class="badge" title="Pending" style="background-color: #f89406;margin-top: -10px; margin-left: -5px;">
                    <?php
                        $sql = $conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=0 AND client_tbl.client_id=date_tbl.client_id");
                        echo "<small>".$count = mysqli_num_rows($sql)."</small>";
                        
                    ?>
                </span></a></li>
            <li><a id="nav" href="adminevent.php"><span class="glyphicon glyphicon-edit" style="margin-right:5px;"></span>Events</a></li>
            <li><a id="nav" href="accountset.php"><span class="glyphicon glyphicon-cog" style="margin-right:5px;"></span>Account Settings</a></li>
            <li><a id="nav" href="logout.php"><span class="glyphicon glyphicon-off" style="margin-right:5px;"></span>Log out</a></li>
        </ul>
    </div>
</nav>


