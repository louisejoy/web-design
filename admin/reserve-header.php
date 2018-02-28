<nav class="navbar navbar-default">
  <center>
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="reservation.php">Pending&nbsp;
          <span class="badge" title="Unread" style="background-color: #3a87ad;margin-top: -10px; margin-left: -5px;">
            <?php
                include("../db.php");
                $sql = $conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=0 AND client_tbl.client_id=date_tbl.client_id");
                echo "<small>".$count = mysqli_num_rows($sql)."</small>";
                
            ?>
          </span></a></li>
        <li><a href="approved.php">Approved&nbsp;
          <span class="badge" title="Unread" style="background-color: #468847;margin-top: -10px; margin-left: -5px;">
            <?php
                include("../db.php");
                $sql = $conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=1 AND client_tbl.client_id=date_tbl.client_id");
                echo "<small>".$count = mysqli_num_rows($sql)."</small>";
                
            ?>
          </span></a></li>
        <li><a href="denied.php">Denied&nbsp;
          <span class="badge" title="Unread" style="background-color: #b94a48;margin-top: -10px; margin-left: -5px;">
            <?php
                include("../db.php");
                $sql = $conn->query("SELECT client_tbl.*, date_tbl.* FROM client_tbl, date_tbl WHERE ordertype=2 AND client_tbl.client_id=date_tbl.client_id");
                echo "<small>".$count = mysqli_num_rows($sql)."</small>";
                
            ?>
          </span></a></li>
      </ul>
      <!-- <form class="navbar-form navbar-right">
        <div class="input-group">
          <input style="width: 300px;" class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form> -->
    </div>
  </center>
</nav>