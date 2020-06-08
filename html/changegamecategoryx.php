<html>
<head>
<script src="../js/changegamecategoryxx.js"></script>
    <script src="../js/changegamecategoryx.js"></script>
    <script src="../js/changegamecategory.js"></script>
</head>
<body>
<?php
include '../php/conectare.php';
$id=$_GET['id_game'];
$db=deschideConexiunea();
$sql="SELECT type,category from games where id='$id'";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$type=$row['type'];
$category=$row['category'];
echo '<h1>Your type is '.$type.'</h1>';
echo '<br> <h1>Choose another type</h1>';
?>
<table>
<tr>
        <td>TYPE</td>
        <td> OPTION </td>
        </tr>
<?php
$db1=deschideconexiunea();
$sql1="SELECT DISTINCT type,max(id) as idtype from games where category='$category' group by type";
$result1 = $db1->query($sql1);
if ($result1->num_rows > 0){
    while($row1 = $result1->fetch_assoc()) {
        echo
        '<tr>
        <td>'.$row1['type'].'</td>
        <td> <input type="submit" onclick="changegamecategoryxx('.$id.','.$row1['idtype'].')" style="margin-left:30%; margin-top:0%" value="Choose"> </td>
        </tr>
        ';
    }
}
?>
</table>
</body>
<html>

