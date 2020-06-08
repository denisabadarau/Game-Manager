<?php
include '../php/conectare.php';
$id_utiz=$_GET['id'];
$db=deschideConexiunea();
$sql="select * FROM user WHERE id='$id_utiz';";
$result= $db->query($sql);
$row = mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
$sql2="INSERT into admin(id,username,password,email,id_utizobis)
VALUES('$id_utiz','$username','$password','$email','$id_utiz')";
$result2=$db->query($sql2);
echo '<h1>User made admin succesfuly</h1>';
?>