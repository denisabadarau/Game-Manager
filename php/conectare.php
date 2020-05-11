<?php
function deschideConexiunea()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "gamadb";
 $conexiune = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conexiune -> error);
 
 return $conexiune;
 }
 
function inchideConexiunea($conexiune)
 {
 $conexiune -> close();
 }
   
?>