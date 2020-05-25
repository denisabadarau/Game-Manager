<!DOCTYPE html> 
<html>
    <head>
        <title>AdelinaPage</title>
            <link rel = "stylesheet" type="text/css" href = "../css/registerStyle.css">
    </head>
    <body>
        <h2>Bine ai venit in GameManager!</h2>

        <div class= "signIn-box">
            <img src = "../images/logo11.png" class="logo">
            <h1>Register</h1>
            <form method = "POST" action="register.inc.php"> 
                <p>Username</p>
                <input type="text" name="username"  placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password"  placeholder="Enter Password">
                <p>Email</p>
                <input type="text" name="email"  placeholder="Enter email">
                
                <input type="submit" name="submit" value="Register">
                
            </form>
            <?php
                if(isset($_GET['info']) && $_GET['info'] == 'eroare') {
                    echo '<p style="text-align: center;"> A aparut o eroare la inregistrare';
                }
                else if(isset($_GET['info']) && $_GET['info'] == 'exista'){
                    echo '<p style="text-align: center;"> Acest nume de utilizator a fost folosit deja';
                } 
            ?>
    
        </div>
    </body>
</html>