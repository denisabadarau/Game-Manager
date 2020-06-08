<html>
<body>
<table>
<tr>
        <td>NAME </td>
        <td>CATEGORY</td>
        <td>TYPE</td>
        <td> OPTION </td>
        </tr>
<?php
include '../php/conectare.php';
$db=deschideconexiunea();
$sql="SELECT * from games";
$result = $db->query($sql);


if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo
        '<tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['category'].'</td>
        <td>'.$row['type'].'</td>
        <td> <input type="submit" onclick="deletegamex('.$row['id'].')" style="margin-left:30%; margin-top:0%" value="Delete"> </td>
        </tr>
        ';
    }
}
?>
</table>
</body>
<html>
