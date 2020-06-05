<?php
header("Content-type: text/xml");
require '../php/conectare.php';

$conectare=deschideConexiunea();
$typeTop=$_GET['typeTop'];
$typeGame=$_GET['typeGame'];

if(isset($typeTop)){
    if($typeTop=="likes"){
        //afisez topul dupa likes
        if($typeGame=='all')
           $sql="SELECT * FROM games ORDER BY likes DESC LIMIT 5"; 
        else
            $sql="SELECT * FROM games WHERE type='$typeGame' ORDER BY likes DESC LIMIT 5";
           
    }
    else if($typeTop=="views"){
        //afisez topul dupa views
        $sql="SELECT * FROM games WHERE type='$typeGame' ORDER BY views DESC LIMIT 5";
    }

    $typeGameCaps=strtoupper($typeGame);
    $typeTopCaps=strtoupper($typeTop);
    echo '<?xml version="1.0" encoding="UTF-8" ?>';
              echo' <rss version="2.0">
                 <channel>
                 <title>TOP 5 '.$typeGameCaps.' GAMES  AFTER '.$typeTopCaps.'</title>
                 <description>Top 5 games - RSS format</description>
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
               <item>
               <title>'.$name.'</title>'; 
               if($typeTop=='likes')
              echo'
              <description>LIKES('.$likes.')</description>';
              else
                 echo '
                 <description>VIEWS('.$views.')</description>';
              echo '
               </item>';
        }
    }

    echo '
    </channel>
    </rss>
    ';

}



?>