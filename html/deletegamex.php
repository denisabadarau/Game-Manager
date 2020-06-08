<?php

require_once '../php/conectare.php';
$conectare = deschideConexiunea();
$id_game=$_GET['id_game'];

$sql="DELETE FROM games WHERE id='$id_game';";
$sql.="DELETE FROM images WHERE id_game='$id_game';";
$sql.="DELETE FROM infogames WHERE id_joc='$id_game';";
$sql.="DELETE FROM likes WHERE id_game='$id_game';";
$sql.="DELETE FROM regulijoc WHERE id_joc='$id_game';";
$sql.="DELETE FROM tournament WHERE id_joc='$id_game';";

// Execute multi query
if ($conectare -> multi_query($sql)) {
    
    echo '<h1>Game deleted successfully</h1>
   
    ';
    
  }
else{
    
    echo '<h1>Error:'.$conectare->$err.'</h1>
    ';
}

  

?>