<?php
require_once '../php/conectare.php';
$conectare = deschideConexiunea();

$type = $_GET['type'];
$sql = "SELECT DISTINCT(type) from games where category = '$type'";
if($result = $conectare->query($sql)) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['type'] . '">' . $row['type'] . '</option>';
    }
}
?>