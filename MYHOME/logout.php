<?php 
    session_start();
    $_SESSION["id_user"] = "";

    header ("location: home.php");
?>