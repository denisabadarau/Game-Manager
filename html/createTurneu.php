<?php
session_start();
require_once '../php/conectare.php';
$conectare = deschideConexiunea();
//Array ( [type] => boardgame [category] => fantasy [game] => 12 [titlu] => besst 
//[locatie] => vaslui [premiu] => 100 [data_turneu] => 2020-07-03 )

if(!isset($_POST['type']) && $_POST['type']) {
    header("Location: battles.php?error=missing type");
    die();
}
if(!isset($_POST['category']) && $_POST['category']) {
    header("Location: battles.php?error=missing category");
    die();
}

$sql = $sql = "SELECT name from games where id = '" .$_POST['game'] . "'";
if($result = $conectare->query($sql)) {
    $game = $result->fetch_assoc(); 
    $nume_joc = $game['name'];

}

$sql = "
INSERT INTO `tournament` 
    (`id_joc`, `id_user`, `data_turneu`, `nr_jucatori`, `premiu`, `category`, `type`, `locatie`, `titlu_turneu`, `nume_joc`, `nume_creator`)
 VALUES ('" .$_POST['game'] . "', '" . $_SESSION['id'] . "', '" . $_POST['data_turneu'] . "', '" .$_POST['nr_jucatori'] ."', '" . $_POST['premiu'] . "', '" . $_POST['category'] . "', '" . $_POST['type'] ."', '" . $_POST['locatie'] . "', '" .$_POST['titlu'] . "' , '" .$nume_joc . "' , '" . $_SESSION['username'] . "')" ;
if($result = $conectare->query($sql)) {
    //fac increment la turnamente
    $sql = "UPDATE games SET tournaments = tournaments + 1 WHERE id =" . $_POST['game']; 
    if($result = $conectare->query($sql)) {
        header("Location: battles.php?createdsucces");
    }
}


?>