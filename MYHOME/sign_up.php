<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab021e0629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup_login.css"> 
    <link rel="stylesheet" href="nav_footer/style_nav.css"> 
    <title>Document</title>
</head>
<body>
<?php include 'connexion.php'?>

<?php

// validation sign in 
    if(isset($_POST["signup"])){
        $err_valid = 0;
    
    // variabl and error mssg sign in

        $firstName = $_POST["fname"];
        $err_fname = "";

        $lastName = $_POST["lname"];
        $err_lname = "";
        
        $number = $_POST["number"];
        $err_number = "";

        $email = $_POST["email"];
        $err_email = "";

        $cin = $_POST["cin"];
        $err_cin = "";

        $pass = $_POST["pass"];
        $err_pass = "";

        $confirm_pass = $_POST["confirm_pass"];
        $err_confirm_pass = "";

        // validation_inputs

        if(!preg_match('/[a-zA-Z]{3,25}/', $firstName)){
            $err_fname = "first name must be 3 or more characters";
            $err_valid++;
        }

        if(!preg_match('/[a-zA-Z]{3,25}/', $lastName)){
            $err_lname = "last name must be 3 or more characters";
            $err_valid++;
        }

        if(!preg_match('/(06)[0-9]{8}/', $number)){
            $err_number = "invalid phone number";
            $err_valid++;
        }

        if(!preg_match('/([a-zA-Z0-9]{4,})@gmail\.com/', $email)){
            $err_email = "invalid email";
            $err_valid++;
        }

        if(!preg_match('/[A-Z]{2}[0-9]{6}/', $cin)) {
            $err_cin = "invalid CIN";
            $err_valid++;
        }

        if(!preg_match('/[a-zA-Z0-9]{8,}/', $pass)){
            $err_pass = "password must be 8 or more characters";
            $err_valid++;
        }

        if($confirm_pass != $pass){
            $err_confirm_pass = "doesn't match the password!";
            $err_valid++;
        }

        // insert into database 
        if($err_valid == 0){
            $sql = "INSERT INTO clients (Nom,Prenom,cin,number,email,pass) VALUES  ('$firstName', '$lastName', '$cin','$number' ,'$email' , '$pass')";
            $result = mysqli_query($conn,$sql);

            if($result){
                echo "
                    <script>
                    var button = document.getElementById('login_btn');
                    var stop = false;
                    setInterval(function(){
                        if(stop == false){
                            login_btn.click();
                            stop = true;
                        }
                    },1)
                    </script>
                ";
            }
        }

    }   

// log in part
    session_start();

    if(isset($_POST["login"])){
        $login_email = $_POST["login_email"];
        $login_pass = $_POST["login_pass"];

        $sql = "SELECT * FROM clients WHERE email = '$login_email' AND pass = '$login_pass'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($result);

        if($result->num_rows > 0){
            $_SESSION["id_user"] = $data["ID_client"];
            header("location: home.php");

        }
    }
?>
<?php include "../MYHOME/nav_footer/navbar.php"?>

    <main>
            <div id="container">
                <form method="POST" class="sigup_login sign_div">
                    
                    <h1 class="signup_child">sign up</h1>
                    <div class="input signup_child">

                    <input type="text" name="fname" placeholder="First name">
                    <span class="span_err"><?php if(isset($_POST["signup"])){echo $err_fname;} ?></span> 

                    <input type="text" name="lname" placeholder="last name">
                    <span class="span_err"><?php if(isset($_POST["signup"])){echo $err_lname;} ?></span> 

                    </div>

                    <input class="signup_child" name="number" type="text" placeholder="number">
                    <span class="span_err"><?php if(isset($_POST["signup"])){echo $err_number;} ?></span> 

                    <input class="signup_child" name="email" type="text" placeholder="email address">
                    <span class="span_err"><?php if(isset($_POST["signup"])){echo $err_email;} ?></span> 

                    <input class="signup_child" name="cin" type="text" placeholder="cin">
                    <span class="span_err"> <?php if(isset($_POST["signup"])){echo $err_cin;} ?></span> 

                    <input class="signup_child" name="pass" type="text" placeholder="Password">
                    <span class="span_err"> <?php if(isset($_POST["signup"])){echo $err_pass;} ?></span> 

                    <input class="signup_child" name="confirm_pass" type="text" placeholder="confirm Password">
                    <span class="span_err"> <?php if(isset($_POST["signup"])){echo $err_confirm_pass;} ?></span>

                    <button type="submit" class="signup_child sign_button" name="signup">signup</button>
                    <h1 id="signup_h1" class="up_down">need an account ?</h1>
                    <button id="signup_btn" class="down_up sign_button" type="button">signup</button>
                    
                </form>
        
                <form method="POST" class="sigup_login login_div">

                    <h1 class="signup_child opacity">log in</h1>
                    <input class="login_child opacity" name="login_email" type="text" placeholder="Email">
                    <input class="login_child opacity" name="login_pass" type="text" placeholder="Password">
                    <button type="submit" class="login_child opacity sign_button" name="login">log in</button>
                    <h1 id="login_h1" class="up_down up_initial">Already have an account ?</h1>
                    <button id="login_btn" class="down_up down_initial sign_button" type="button">log in</button>

                </form>
            </div>
        
    </main>

    <script src="main.js"></script>
</body>
</html>