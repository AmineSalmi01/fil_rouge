<?php include 'connexion.php'?>

<?php 
$cat = "";
if(isset($_GET["cat"])){
    $cat = $_GET["cat"];
}
  $query_prod = "SELECT DISTINCT H.ID_house, H.adress, H.description, H.price, galary.image FROM house H INNER JOIN galary ON H.ID_house = galary.ID_house INNER JOIN Catégorie C ON C.ID_catégorie = H.ID_catégorie WHERE C.Nom_catégorie LIKE '%".$cat."%' GROUP BY H.ID_house";
  $data = mysqli_query($conn, $query_prod);
//   $house = mysqli_fetch_assoc($data);
  if($data->num_rows>0){

  }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="houses.css">
        <link rel="stylesheet" href="nav_footer/style_nav.css"> 
        <title>Document</title>
    </head>
    <body>
    <?php include "../MYHOME/nav_footer/navbar.php"?>
        <header>
            <div id="header_text">
                <h1>houses</h1>
                <h2>Lorem ipsum dolor sit amet. Et voluptatibus dol.</h2>
                <div class="searsh">
                     <i class="fa-solid fa-circle-chevron-right"></i>
                     <input type="text">
                </div>
            </div>
        </header>
        
        <main>
            <div id="title_houses">
                 <h2 class="title_houses">9 properties put up for sale for your search</h2>
                 <h2 class="title_houses">APPARTMENT<i class="fa-solid fa-angle-down ic"></i></h2>
            </div>
            <div id="sales_houses">
            <?php
               while ($house = mysqli_fetch_assoc($data)){
                $description = $house["description"];
                if(strlen($house["description"]) > 70){
                    $description = substr($house["description"], 0, 70);
                }
                echo '
                <div class="child_houses">
                        <div class="houses_img">
                            <img src="images/'.$house["image"].'">
                        </div>
                        <div class="price_description">
                            <h3>'.$house["price"].' $</h3>
                            <h4>'.$house["adress"].'</h4>
                            <p>'.$description.'</p>
                           
                           <a href="detail.php?id_house='.$house["ID_house"].'"><button>more Information</button></a>
                           <a href="favoris.php?id_house='.$house["ID_house"].'" class="ic_favoris"><i class="fa-solid fa-heart"></i></a> 
                        </div>
                </div>
                    
                ';
               }
               
               

            ?>
            </div>
        </main>

        <?php include "../MYHOME/nav_footer/footer.php"?>
    </body> 
    </html>