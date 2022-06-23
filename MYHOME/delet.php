<?php
    
    session_start();
    if(isset($_GET["id_house"])){
        $id_user = $_SESSION["id_user"];
        $id_house = $_GET["id_house"];
    
            $sql_delete = "DELETE FROM favori WHERE ID_client = $id_user AND ID_house = $id_house;";
            $delete = mysqli_query($conn, $sql_delete);
        
    }
?>