<?php
//https://www.youtube.com/watch?v=8T3sQ1nMaak
include '../php/conectare.php';
$conectare = deschideConexiunea();

//verificam daca sunt completatea toate chenarele
//folosim empty care verifica daca variabila data ca paramtru este goala sau nu


if ( !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?info=eroare");
    }
    else{
        $username = mysqli_real_escape_string($conectare, $_POST['username']);
        //$username = strtolower($_POST['username']);
        $password = mysqli_real_escape_string($conectare, $_POST['password']);
        //$password = $_POST['password'];
        $email = mysqli_real_escape_string($conectare, $_POST['email']);
        
    //folosim aceasta functie pentru a securiza contul utilizatorului
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    //nu lasam un utilizator care isi face un cont nou sa aiba acelasi nume cu unul existent deja
        $sql = "SELECT username FROM user WHERE username = '$username'";
        $result = $conectare->query($sql);
        $check = mysqli_num_rows($result);
        
        if ($check > 0) {
            header("Location: register.php?info=exista");
            die();
        }
    else {
        //comanda noastra care va ajunge la baza de date
    $sql = "INSERT INTO user (username, password, email, profile_img_path, bio) VALUES ('$username', '$password_hashed', '$email', '', '')";

    //se executa query ul
        $result = $conectare -> query($sql); 
        header("Location: login.php");
        }
    }
}
else {
    header("Location: register.php?info=eroare");
}
?>  

