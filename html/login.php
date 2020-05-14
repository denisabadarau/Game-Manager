<?php
session_start();
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Welcome</title>
            <link rel = "stylesheet" type="text/css" href = "../css/loginStyle.css">
    </head>
    <body>
        <div class= "login-box">
            <img src = "../images/logo11.png" class="logo">
            <h1>Login</h1>
            <form method= "POST" action="login.inc.php">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="text" name="password" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                <a href = "#"> Don't have an account? </a> <br>

            </form>
            <?php
                if(isset($_GET['info']) && $_GET['info'] == 'ParolaGresita') {
                    echo '<p style="text-align: center;"> Parola este gresita';
                }
            ?>
    
        </div>
    </body>
</html>