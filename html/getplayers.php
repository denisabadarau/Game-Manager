<?php

require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_turneu=$_GET['id_turneu'];

$sql1="SELECT count(*) FROM battles WHERE id_turneu='$id_turneu'";
$result1=$conectare->query($sql1);
$row1 = $result1->fetch_assoc();
$locuri=$row1['count(*)'];

echo $locuri;

?>