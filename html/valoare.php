<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_user=$_GET['id_user'];
$id_joc=$_GET['id_joc'];

$sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='$id_joc'";
$result=$conectare->query($sql);
$response=$result->num_rows;
if($response===0)$response='LIKE';
else $response='DISLIKE';
echo $response;
?>



