<?php
session_start();
include '../php/conectare.php';
$conectare = deschideConexiunea();

//verificam daca sunt completatea toate chenarele
//folosim empty care verifica daca variabila data ca paramtru este goala sau nu


if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'] )) {
    
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //Extragem cu o variabila sql parola din baza de date
    $sql = "SELECT * FROM USER WHERE username = '$username'";
    $result = $conectare->query($sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];
    $check = password_verify($password, $hash);

    if($check == 0) {
        header("Location: login.php?info=ParolaGresita");
        die();
    }
    else {
        //preluam datele din Database
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash'";
        $row = $result->fetch_assoc();

        if(!$row = $result->fetch_assoc()){
            echo 'Parola sau username invalid';
        }
        else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['passwod'];
            $_SESSION['email'] = $row['email'];

        }
        header("Location: meniu.html");
    }

}
?>  

