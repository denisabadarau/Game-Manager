<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$id_user=$_GET['id_user'];
$id_turneu=$_GET['id_turneu'];
$data_turneu=$_GET['data_turneu'];
$nr_jucatori=$_GET['nr_jucatori'];

//verific daca turneul nu e finalizat deja
$today=strtotime(date("Y-m-d"));
if($today >= $data_turneu){
    $response="CAN'T JOIN";
}
else
{
        //verific daca nu participa deja la turneu
        $sql="SELECT count(*) FROM battles WHERE id_turneu='$id_turneu' AND id_jucator='$id_user'";
        $result=$conectare->query($sql);
        $row = $result->fetch_assoc();
        $participa=$row['count(*)'];
        if($participa==1)
                {
                  //deja participa la turneu
                  $response="UNJOIN";
                  //echo $participa;
                }
            else{
                 //nu participa
                  //verific daca mai sunt locuri la turneu
                  $sql1="SELECT count(*) FROM battles WHERE id_turneu='$id_turneu'";
                  $result1=$conectare->query($sql1);
                  $row1 = $result1->fetch_assoc();
                  $locuri=$row1['count(*)'];
                  if($locuri<$nr_jucatori)
                    {
                      $response='JOIN';
      
                    }
                     else
                    {
                     $response="CAN'T JOIN";
                    }
                }    
}

echo $response;

?>