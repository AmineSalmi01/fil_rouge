<?php include 'connexion.php'?>

<?php

    session_start();
    if(isset($_GET["id_house"])){
        $id_user = $_SESSION["id_user"];
        $id_house = $_GET["id_house"];
    
        $sql_check = "SELECT * FROM favori WHERE ID_client = $id_user AND ID_house = $id_house;";
        $check = mysqli_query($conn, $sql_check);
    
        if($check->num_rows > 0){
            $sql_delete = "DELETE FROM favori WHERE ID_client = $id_user AND ID_house = $id_house;";
            $delete = mysqli_query($conn, $sql_delete);
        }
        else{
            $query = "INSERT INTO favori (ID_client, ID_house, Date_ajouter) VALUES ($id_user, $id_house,'". date('Y-m-d')."')";
            $query_run = mysqli_query($conn,$query);
        }
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="favoris.css">
    <link rel="stylesheet" href="nav_footer/style_nav.css">
    <title>Document</title>
</head>
<body>
    <?php include "../MYHOME/nav_footer/navbar.php"?>

    <header>
         <h1>Favoris</h1>
    </header>

    <main>
        <?php
            $id_user = $_SESSION["id_user"];
            $select = "SELECT * FROM favori F INNER JOIN clients C ON F.ID_client = C.ID_client INNER JOIN
            house H ON F.ID_house = H.ID_house INNER JOIN galary ON H.ID_house = galary.ID_house WHERE C.ID_client = $id_user
            GROUP BY H.ID_house;
            ";
            $select_run = mysqli_query($conn,$select);
        ?>

        
        
            <?php
                $rows = array();
                while($favoris = mysqli_fetch_assoc($select_run)){
                    $rows[] = $favoris;
                }
                for($i = 0; $i < count($rows); $i++){
                    echo'
                    <div id="detail_favoris">
                    <a href="favoris.php?id_house='.$rows[$i]["ID_house"].'" class="ic_favoris"><i class="fa-solid fa-xmark"></i></a>   
                    <img src="images/'.$rows[$i]["image"].'">
                    <div id="contonu">
                        <h3>'.$rows[$i]["title"].' </h1>
                        <span>'.$rows[$i]["Date_ajouter"].'</span>
                        <h2>'.$rows[$i]["price"].'$</h2>
                        <h4>'.$rows[$i]["description"].'</h4>
                        <a href="detail.php?id_house='.$rows[$i]["ID_house"].'"><button>more Information</button></a>
                    </div>
                    </div>   ';
                }
            ?>
        
    </main>

    <?php include "../MYHOME/nav_footer/footer.php"?>
</body>
</html>