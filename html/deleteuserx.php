<?php
include '../php/conectare.php';
$id_utiz=$_GET['id'];
$conectare=deschideConexiunea();
$sql="DELETE FROM user WHERE id='$id_utiz';";
$sql.="DELETE FROM likes WHERE id_user='$id_utiz';";

// Execute multi query
if ($conectare -> multi_query($sql)) {

    echo '<h1>User deleted successfully</h1>

    ';

  }
else{

    echo '<h1>Error:'.$conectare->$err.'</h1>
    ';
}
?>