<?php
include '../php/conectare.php';
$db=deschideConexiunea();
if (isset($_GET['com']))
{
$com=$_GET['com'];
$id_user=$_GET['id_user'];
$sql="Select username from user where id='$id_user'";
$result1=$db->query($sql);
$row = mysqli_fetch_assoc($result1);
$numeutiz=$row['username'];
$data=date("Y-m-d H:i:s");
$sql2="INSERT into commentsbattle(id_jucator,numeutiz,comentariu,datacomentariu)
VALUES('$id_user','$numeutiz','$com','$data')";
$result2 = $db->query($sql2);
echo
        '
        <div class="chenarcom">
        <div class="chenarcomutiz">'.$numeutiz.'</div>
        <div class="chenarcomdata">'.$data.'</div>
        <div class="chenarcomcom">'.$com.'</div>
        </div>
        ';
}
?>
