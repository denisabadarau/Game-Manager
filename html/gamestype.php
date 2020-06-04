<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();
$category=$_GET['category'];

if(isset($category) ){
    echo '<option value="">--Please choose a type--</option>';
    if($category=='board' || $category=='online' )
    {
    $sql="SELECT DISTINCT type FROM games WHERE category='$category'";
    $result=$conectare->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $type= $row['type'];
            echo '<option value="'.$type.'">'.$type.'</option>';

        }
    }
    exit;
}
else if($category=='all' ){
    $sql="SELECT DISTINCT type FROM games";
    $result=$conectare->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $type= $row['type'];
            echo '<option value="'.$type.'">'.$type.'</option>';

        }
    }
    exit;

}

}


?>