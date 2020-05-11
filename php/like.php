<?php
include 'conectare.php';
$conectare=deschideConexiunea();
$id_user="1";
$id_game=$_POST['id_game'];


$sql="INSERT INTO likes(id_user,id_game) VALUES('$id_user','$id_game')";
$result=$conectare->query($sql);

//pt a reveni la pagina initiala
header("Location: ../html/biology.html");
?>