<?php
include 'conectare.php';
$conectare=deschideConexiunea();
$id_user="1";
$id_game='1';


$sql="SELECT * FROM likes WHERE id_user='2' AND id_game='7'";
$result=$conectare->query($sql);

echo $result->num_rows;
echo 'caca';
?>