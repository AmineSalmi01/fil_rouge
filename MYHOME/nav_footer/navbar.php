<?php
        if(!isset($_SESSION)){
            session_start(); 
        }
     ?>

<nav>
        <div>
            <a href="home.php">Home</a>
            <a href="houses.php">Houses</a>
            <a id="logo" href="">MY<span>HOME</span></a>
            <a href="home.php#about_us">About us</a>
            <a href="galary.php">gallery</a>
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

