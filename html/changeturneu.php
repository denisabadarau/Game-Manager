<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_user=$_GET['id_user'];
$id_turneu=$_GET['id_turneu'];
$tip=$_GET['tip'];

if($tip=='JOIN')
{
    //adaug datele in tabela battle
    $sql="INSERT INTO battles(id_turneu,id_jucator) VALUES('$id_turneu','$id_user')";
    $result=$conectare->query($sql);
    $response="UNJOIN";
}
else
    if($tip=='UNJOIN')
    {
        //sterg datele din tabela battle
        $sql="DELETE FROM  battles WHERE id_turneu='$id_turneu' AND id_jucator='$id_user'";
        $result=$conectare->query($sql);
        $response="JOIN";
    }
echo $response;

?>