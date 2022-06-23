<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav_footer/style_nav.css"> 
    <link rel="stylesheet" href="Seller.css">
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

    <main>
        <div id="border_div">
            <div id="container">
                
                <div class="child_container">
                    <a href="home.php"><h1>MY<span>HOME</span></a>
                    <h3 class="title_detail">ELON MUSK</h3>
                    <p>137 Rue Joliot Curie, 69005 Lyon</p>
                    <p class="para">Lorem ipsum dolor sit amet. 
                        Et voluptatibus doloremque ad error expedita 
                        eum laudantium natus id do. </p>
                        <h4>06 01 60 15 44</h4>
                        <div id="social_media">
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-solid fa-at"></i></a>
                        </div>

                    <a href="detail.php?id_house=<?php echo $_REQUEST["id_house"]?>"><button>home information</button></a>
                    <button class="btn_detail">Seller Information</button>
                    <a href="review.php?id_house=<?php echo $_REQUEST["id_house"]?>"><button class="btn_detail">review</button></a>
                </div>
                <div class="img_detail">
                    <img src="images/seller_elonmask.png">
                </div>
                <div id="icon_div">
                    <a href="detail.php"><i class="fa-solid fa-arrow-right-long"></i></a>plmlo                                                                                                                             
                    <a href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>