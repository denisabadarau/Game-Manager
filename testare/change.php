<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();


$sql = "SELECT MAX(id_turneu) as id_turneu from tournament";
        
        $result = $conectare->query($sql);
        $row = mysqli_fetch_assoc($result);
        $new = $row['id_turneu'];
    
    echo $new;


?>



