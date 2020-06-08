<?php
include '../php/conectare.php';
$id_game=$_GET['id_game'];
$id_type=$_GET['type'];
$db=deschideConexiunea();
$sql1="select type from games where id='$id_type'";
$result= $db->query($sql1);
$row = mysqli_fetch_assoc($result);
$type=$row['type'];
$sql="update games set type='$type' where id='$id_game'";
$result1= $db->query($sql);
echo "<h1>Updated type succesfully</h1>";
?>