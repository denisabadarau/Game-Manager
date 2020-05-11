<?php
include 'conectare.php';
$conectare=deschideConexiunea();
$id_user="1";
$id_game=$_POST['id_game'];

$sql="DELETE FROM likes WHERE id_game='$id_game' ";
$result=$conectare->query($sql);

header("Location: test.php");

?>