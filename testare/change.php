<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_user=$_GET['id_user'];
$id_joc=$_GET['id_joc'];
$tip=$_GET['tip'];


if ($tip== 'LIKE') {
    $sql="INSERT INTO likes(id_user,id_game) VALUES('1','1')";
    $result=$conectare->query($sql);
    $sql2="UPDATE games SET likes=likes+1 WHERE id='1'";
    $result2=$conectare->query($sql2);
    $response='DISLIKE';
}
else if($tip=='DISLIKE'){
    $sql="DELETE FROM likes WHERE id_game='1' ";
    $result=$conectare->query($sql);
    $sql2="UPDATE games SET likes=likes-1 WHERE id='1'";
    $result2=$conectare->query($sql2);
    $response='LIKE';
}

echo $response;

?>


