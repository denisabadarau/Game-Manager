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
    $sql2="UPDATE user SET tournaments=tournaments+1 WHERE id='$id_user'";
    $result2=$conectare->query($sql2);
    $response="UNJOIN";
}
else
    if($tip=='UNJOIN')
    {
        //sterg datele din tabela battle
        $sql="DELETE FROM  battles WHERE id_turneu='$id_turneu' AND id_jucator='$id_user'";
        $result=$conectare->query($sql);
        $sql2="UPDATE user SET tournaments=tournaments-1 WHERE id='$id_user'";
        $result2=$conectare->query($sql2);
        $response="JOIN";
    }
echo $response;

?>