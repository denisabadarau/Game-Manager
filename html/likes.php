<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_joc=$_GET['id_joc'];

$sql="SELECT likes FROM games WHERE id='$id_joc'";
$result=$conectare->query($sql);
$row = $result->fetch_assoc();

echo $row['likes'];

?>



