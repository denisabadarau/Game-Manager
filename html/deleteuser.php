<html>
<body>
<table>
<?php
include '../php/conectare.php';
$db=deschideconexiunea();
$sql="SELECT * from user where id not in(select id_utizobis from admin)";
$result = $db->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo
        '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['email'].'</td>
        <td> <input type="submit" onclick="deleteuserx('.$row['id'].')" style="margin-left:30%; margin-top:0%" value="Delete"> </td>
        </tr>
        ';
    }
}
?>
</table>
</body>
<html>
