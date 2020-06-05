<?php
require '../php/conectare.php';
$conectare=deschideConexiunea();
$sql="SELECT * FROM games ORDER BY likes DESC LIMIT 5";
$result=$conectare->query($sql);
echo '
<h1 class="titluTop">GENERAL TOP AFTER LIKES</h1>
<a href="rssGames.php?typeTop=likes&typeGame=all">
<button class="buttonRSS">RSS</button>
</a>
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
              <a href="pagina-joc.php?id='.$id.'">
                  <img src="../images/'.$img['img1'].'.jpg"/>
                  </a>
                  <p class="gameTitle">'.$name.'</p>
              <p class="info">LIKES('.$likes.')</p>
               </div>
               ';
            }
        }


?>