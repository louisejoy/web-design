<?php
    Session_Start();
    Session_Destroy();
    header("location:../admin-login.php");
?>