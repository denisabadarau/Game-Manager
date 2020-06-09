<?php
session_start();
require_once '../php/conectare.php';
$conectare = deschideConexiunea();
//Array ( [type] => boardgame [category] => fantasy [game] => 12 [titlu] => besst 
//[locatie] => vaslui [premiu] => 100 [data_turneu] => 2020-07-03 )
//echo $_POST['category'];

if(!isset($_POST['type']) || empty($_POST['type'])) {
    header("Location: battles.php?error=missing type");
    die();
}
if(!isset($_POST['category']) || empty($_POST['category'])) {
    header("Location: battles.php?error=missing category");
    die();
}
if(!isset($_POST['nr_jucatori']) || empty($_POST['nr_jucatori'])) {
    header("Location: battles.php?error=missing nr_jucator");
    die();
}
if(!isset($_POST['game']) || empty($_POST['game'])) {
    header("Location: battles.php?error=missing game");
    die();
}
if(!isset($_POST['titlu']) || empty($_POST['titlu'])) {
    header("Location: battles.php?error=missing title");
    die();
}if(!isset($_POST['locatie']) || empty($_POST['locatie'])) {
    header("Location: battles.php?error=missing location");
    die();
}
if(!isset($_POST['premiu']) || empty($_POST['premiu'])) {
    header("Location: battles.php?error=missing prize");
    die();
}
if(!isset($_POST['data_turneu']) || empty($_POST['data_turneu'])) {
    header("Location: battles.php?error=missing data_turneu");
    die();
}

$sql = "SELECT name from games where id = '" .$_POST['game'] . "'";
if($result = $conectare->query($sql)) {
    $game = $result->fetch_assoc(); 
    $nume_joc = $game['name'];

}

$sql = "
INSERT INTO tournament 
    (id_joc, id_user, data_turneu, nr_jucatori, premiu, category, type, locatie, titlu_turneu, nume_joc, nume_creator)
 VALUES ('" .$_POST['game'] . "', '" . $_SESSION['id'] . "', '" . $_POST['data_turneu'] . "', '" .$_POST['nr_jucatori'] ."', '" . $_POST['premiu'] . "', '" . $_POST['category'] . "', '" . $_POST['type'] ."', '" . $_POST['locatie'] . "', '" .$_POST['titlu'] . "' , '" .$nume_joc . "' , '" . $_SESSION['username'] . "')" ;
if($result = $conectare->query($sql)) {
    //fac increment la turnamente
    $sql = "UPDATE games SET tournaments = tournaments + 1 WHERE id =" . $_POST['game']; 
    if($result = $conectare->query($sql)) {
        $sql = "SELECT MAX(id_turneu) as id_turneu from tournament";

        $result = $conectare->query($sql);
        $row = mysqli_fetch_assoc($result);
        $new = $row['id_turneu'];
        
        $sql = " INSERT INTO battles (id_turneu, id_jucator)
                VALUES ('" . $new . "', '" . $_SESSION['id'] . "')" ;
        if($result = $conectare->query($sql)) {
            header("Location: battles.php?createdsucces");
        }
    }
}


?>