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

    $result=$conectare->query($sql);
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

}



?>