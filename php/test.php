<?php

$host='localhost';
$user='root';
$pass='';
$db='testp';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo 's-a conectat cu succes';
$sql="insert into test(nume,prenume,email) values ('ana','are','mere')";
$query=mysqli_query($con,$sql);
if($query)
    echo 's-a inserat cu succes';
?>