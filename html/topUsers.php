<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();

$sql="SELECT * FROM user ORDER BY tournaments DESC LIMIT 5";
$result=$conectare->query($sql);
echo '
<h1 class="titluTop">TOP 5 USERS</h1>
';
if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
        $username=strtoupper($row['username']);
        $tournaments=$row['tournaments'];
        $img=$row['profile_img_path'];

        echo '
               <div class="game">
                  <img src="'.$img.'"/>
                  <p class="gameTitle">'.$username.'</p>
              <p class="info">TOURNAMENTS('.$tournaments.')</p>
               </div>
               ';

    }
}

?>