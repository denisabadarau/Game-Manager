<html>
<body>
<table>
<tr>
<td>id</td>
<td>username</td>
<td>email</td>
<td>option</td>
</tr>
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
        <td> <input type="submit" onclick="giveadminuserx('.$row['id'].')" style="margin-left:30%; margin-top:0%" value="MakeAdmin"> </td>
        </tr>
        ';
    }
}
?>
</table>
</body>
<html>
