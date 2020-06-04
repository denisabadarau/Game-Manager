<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();
$sql="SELECT * FROM games ORDER BY likes DESC LIMIT 10";
$result=$conectare->query($sql);
echo '
<h1 class="titluTop">GENERAL TOP AFTER LIKES</h1>
';
if($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
               $id=$row['id'];
               $name=strtoupper($row['name']);
               $likes=$row['likes'];
               $sql2="SELECT img1 FROM images WHERE id_game='$id'";
               $result2=$conectare->query($sql2);
               $img=mysqli_fetch_array($result2);
               echo '
               <div class="game">
                  <img src="../images/'.$img['img1'].'.jpg"/>
                  <p class="info">'.$name.'</p>
               </div>
               ';
            }
        }


?>