<?php include 'connexion.php'?>

<?php 
  $query_prod = "SELECT * FROM house INNER JOIN galary ON house.ID_house = galary.ID_house LIMIT 3";
  $data = mysqli_query($conn, $query_prod);
  $house = mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav_footer/style_nav.css">
    <title>Document</title>
</head>
<?php include "../MYHOME/nav_footer/navbar.php"?>
<header>
        <div class="H1">
            <h2>Lorem ipsum dolor sit amet. Et voluptatibus ibu <br>
                doloremque ad error expedita eum laudantium <br> natus id do. </h2>
                <button>BUY NOW</button>
        </div>

        <div id="cont">   
            <div class="hover_div">
                <div class="service">
                    <i class="fa-solid fa-earth-asia"></i>
                    <span class="text_service">Lorem ipsum dolor sit amet.<br> Et voluptatibus doloremqu. </span>
                </div>
            </div>
            <div class="hover_div">
                <div class="service">
                    <i class="fa-solid fa-user-plus"></i>
                    <span class="text_service">Lorem ipsum dolor sit amet.<br> Et voluptatibus doloremqu. </span>
                </div>
            </div>
            <div class="hover_div">
                <div class="service">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <span class="text_service">Lorem ipsum dolor sit amet.<br> Et voluptatibus doloremqu. </span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h1 id="titre1">Lorem ipsum dolor sit amet</h1>
        <h2 class="titre1_1">onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut</h2>

        <div id="cont_1">
            <div class="text_1">
                <h2>our services</h2>
                <p  >Lorem ipsum dolor sit amet. Et voluptatibusum <br> 
                doloremque ad error expedita eum laudantium <br> 
                natus id do.doloremque ad error expedita eum <br> 
                laudantium natus id do.</p>
                <button>show more</button>
            </div>
            <img class="img_main" src="images/Rectangle 73.png">
            <img class="img2_main" src="images/Rectangle 14 (1).png">
        </div>

         <div id="rank">
             <div class="rank1"><h1>10 000</h1></div>
             <div class="rank1"><h1>500</h1></div>
             <div><h1>+95%</h1></div>
        </div>

        <h2 class="titre1_1 titre1_2" >Lorem ipsum dolor sit ..</h2>  

        <div id="cont_2">
            <div class="img_catégorie">
                <a href="houses.php?cat=apartment"><img src="images/1.png"></a>
                <span class="name_catégorie">apartment</span>
            </div>
            <div class="img_catégorie">
                <a href="houses.php?cat=villa"><img src="images/2.png"></a>
                <span class="name_catégorie">villa</span>
            </div>
            <div class="img_catégorie">
                <a href="houses.php?cat=house"><img src="images/3.png"></a>
                <span class="name_catégorie">house</span>
            </div>
            <div class="img_catégorie">
                <a href="houses.php?cat=duplex"><img src="images/4.png"></a>
                <span class="name_catégorie">duplex</span>
            </div>
        </div>

        <h2 class="titre1_1 titre1_3">More than 9 out of 10 customers recommend us</h2>

        
            <div id="rev_stars">
                <span>4.5</span>
                <ul id="stars">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star-half"></i></li>
                </ul>
            </div>

            <div id="rev_container">
                <div class="rev_child">
                    <div>
                        <img src="images/imgreview.png">
                        <p class="para_review">“The ideal solution to buy and sell at the same time.
                            We were able to buy the house of our dreams with the
                            br certainty of selling our apartment.”</p>
                    </div>
                    <div id="stars_client">
                        <ul id="client_review">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span class="para_review2">jean_pierre et martine</span>
                    </div>
                </div>

                <div class="rev_child">
                    <div>
                        <img src="images/imgreview 2.png">
                        <p class="para_review">“The ideal solution to buy and sell at the same time.
                            We were able to buy the house of our dreams with the
                            br certainty of selling our apartment.”</p>
                    </div>
                    <div id="stars_client">
                        <ul id="client_review">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span class="para_review2">Bertolin</span>
                    </div>
                </div>

                <div class="rev_child">
                    <div>
                        <img src="images/imgreview 3.png">
                        <p class="para_review">“The ideal solution to buy and sell at the same time.
                            We were able to buy the house of our dreams with the
                            br certainty of selling our apartment.”</p>
                    </div>
                    <div id="stars_client">
                        <ul id="client_review">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <span class="para_review2">Dominique</span>
                    </div>
                </div>
            </div>

            <div id="cont_3">
            <img class="img_main3" src="images/background_main.png">
            <img class="img3_main3" src="images/img_main.png">
            <div class="text_3">
                <h2>What if we found your future home?</h2>
                <h3><i class="fa-solid fa-check"></i>  Properties checked by our experts</h3>
                <h3><i class="fa-solid fa-check"></i>  Well-managed condominiums</h3>
                <h3><i class="fa-solid fa-check"></i>  At market price</h3>
                <button>See all our properties for sale</button>
            </div>
        </div>

        <h1 id="titre4">Our latest</h1>

        <div id="sales_houses">
        <i class="fa-solid fa-angle-left icone_slide"></i>
        <?php
               do{
                echo '
                <div class="child_houses">
                        <div class="houses_img">
                            <img src="images/'.$house["image"].'">
                        </div>
                        <div class="price_description">
                            <h3>'.$house["price"].' $</h3>
                            <h4>'.$house["adress"].'</h4>
                            <p>'.$house["title"].'</p>
                             <a href="detail.php?id_house='.$house["ID_house"].'"><button>more Information</button></a> 
                        </div>
                    </div>
                    
                ';
               }while ($house = mysqli_fetch_assoc($data))
               
            ?>
                    <i class="fa-solid fa-angle-right icone_slide"></i>
                </div>
            <div id="about_us">
                <div class="text_about">
                    <h3>About us</h3>
                    <span>Lorem ipsum dolor sit amet. Et voluptatibus 
                         doloremque ad error expedita eum laudantium natus id do. 
                         doloremque ad error expedita eum laudantium natus id do
                         doloremque ad error expedita eum laudantium natus id do.</span>
                </div>
                <img src="images/aboutus_img.png">
            </div>
        </main>
    <?php include "../MYHOME/nav_footer/footer.php"?>

</body>
</html>