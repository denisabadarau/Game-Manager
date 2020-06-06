<?php
require '../php/conectare.php';

$conectare=deschideConexiunea();
$typeGame=$_GET['typeGame'];
$typeTop=$_GET['typeTop'];

if(isset($typeTop)){
    if($typeTop=="likes"){
        //afisez topul dupa likes
        $sql="SELECT * FROM games WHERE type='$typeGame' ORDER BY likes DESC LIMIT 5";
    }
    else if($typeTop=="views"){
        //afisez topul dupa views
        $sql="SELECT * FROM games WHERE type='$typeGame' ORDER BY views DESC LIMIT 5";
    }

    $typeGameCaps=strtoupper($typeGame);
    $typeTopCaps=strtoupper($typeTop);
    echo '
         <h1 class="titluTop">TOP 5 '.$typeGameCaps.' GAMES  AFTER '.$typeTopCaps.'</h1>
         <a href="rssGames.php?typeTop='.$typeTop.'&typeGame='.$typeGame.'" target="_blank">
            <button class="buttonRSS">RSS</button>
         </a>
        ';

    $result=$conectare->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
           $id=$row['id'];
           $name=strtoupper($row['name']);
           $likes=$row['likes'];
           $views=$row['views'];
           $sql2="SELECT img1 FROM images WHERE id_game='$id'";
           $result2=$conectare->query($sql2);
           $img=mysqli_fetch_array($result2);
           echo '
           <div class="game">
              <a href="pagina-joc.php?id='.$id.'">
              <img src="../images/'.$img['img1'].'.jpg"/>
              </a>
              <p class="gameTitle">'.$name.'</p>
              ';
              if($typeTop=='likes')
              echo'
              <p class="info">LIKES('.$likes.')</p>';
              else
                 echo '
              <p class="info">VIEWS('.$views.')</p>';
            echo '
           </div>
           ';
        }
    }

}



?>