<?php
//https://www.youtube.com/watch?v=Gcd5g_2cZCc&t=168s
session_start();
?>

<!DOCTYPE html> 
<html>
    <head>
    <title> Game Manager </title>
        
            <link rel = "stylesheet" type="text/css" href = "../css/loginStyle.css">
    </head>
    <body>
    <div class= "containerAnimation">
      <divanimation>WELCOME<br>
               TO <br>
         GAME MANAGER</divanimation>
    </div>
        <div class= "login-box">
            <img src = "../images/logo11.png" class="logo">
            <h1>Login</h1>
            
            <form method="POST" action="login.inc.php">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                <a href = "register.php"> Don't have an account? </a> <br>

            </form>
            <?php
                if(isset($_GET['info']) && $_GET['info'] == 'ParolaGresita') {
                    echo '<p style="text-align: center;"> Parola este gresita';
                }
            ?>
    
        </div>
    </body>
</html>