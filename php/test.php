<?php
include 'conectare.php';

function addViews($type)
{
    
    $conectare=deschideConexiunea();
    $sql="UPDATE games SET views=views+1 WHERE type='$type'";
    $result=$conectare->query($sql);
    return 
}


?>