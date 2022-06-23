<?php include 'connexion.php'?>

<?php
// insert review in database
    session_start();
    if(isset($_POST["submit"])){
        $id_user = $_SESSION["id_user"];
        $id_house = $_GET["id_house"];
        $comment = $_POST["commontaire"];
        $sql = "INSERT INTO review (ID_house, ID_client, Note, Commentaire, Date_ajout) VALUES (
                $id_house, $id_user, 5, '$comment', '". date('Y-m-d')."'
       )";
       $sql_run = mysqli_query($conn,$sql);
       $_POST = array();
    }

// select review from database

    $select = "SELECT * FROM review R INNER JOIN clients C ON R.ID_client = C.ID_client";
    $select_run = mysqli_query($conn,$select);
    if($select_run->num_rows>0){

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav_footer/style_nav.css"> 
    <link rel="stylesheet" href="review.css">
    <title>Document</title>
</head>
<body>
    
<nav>
        <div>
            <a href="home.php">Home</a>
            <a href="houses.php">Houses</a>
            <a id="logo" href="">MY<span>HOME</span></a>
            <a href="home.php#about_us">About us</a>
            <a href="galary.php">Galary</a>
            <div>
                <a href="favoris.php" id="favourit"><img src="images/Favorite.png"></a>

                <?php if(!isset($_SESSION["id_user"]) || $_SESSION["id_user"]==""){ ?>
                         <a href="sign_up.php"><img src="images/user.png"></a>
                    <?php } else{ ?>
                         <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    <?php } ?>
            </div>
        </div>
        <section></section>
     </nav>

<div id="border_div">
            <div id="container">
                
                <div class="child_container">
                    <div>
                        <a href="home.php"><h1>MY<span>HOME</span></a>
                    </div>
                    <div>
                        <form action="review.php?id_house=<?php echo $_GET["id_house"] ?>" method="POST">
                            <textarea id="commontaire" name="commontaire" placeholder="commontaire" required></textarea>
                            <input class="submit_rev" type="submit" name="submit">
                        </form>
                    </div>
                    <div>
                         <a href="detail.php?id_house=<?php echo $_REQUEST["id_house"]?>"><button>home information</button></a>
                         <button class="btn_detail">Seller Information</button>
                         <a href=""><button class="btn_detail">review</button></a>
                    </div>
                </div>
                <div class="img_detail">
                    <?php
                            while ($review = mysqli_fetch_assoc($select_run)){
                                echo'
                                <div class="div_review">
                                <h1 class="NameComplete">'.$review["Prenom"]." ".$review["Nom"].'</h1>
                                <p class="review">'.$review["Commentaire"].'</p>
        
                                <div id="rev_stars">
                                    <ul class="stars">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                                ';
                            }
                        ?>
                    
                </div>
                <div id="icon_div">
                    <a href="detail.php"><i class="fa-solid fa-arrow-right-long"></i></a>                                                                                                                          
                    <a href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                </div>


            </div>
        </div>
</body>
</html>