<?php
require_once '../php/conectare.php';
$conectare = deschideConexiunea();

$category = $_GET['category'];
$sql = "SELECT id,name from games where type = '$category'";
if($result = $conectare->query($sql)) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
}
?>