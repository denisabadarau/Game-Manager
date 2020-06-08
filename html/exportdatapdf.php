<?php

/*https://mpdf.github.io/getting-started/creating-your-first-file.html
https://www.youtube.com/watch?v=MnIps8Yc8CY
*/
 include '../php/conectare.php';

 if(isset($_POST["exportpdf"]))
 {

    require_once '../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $output='';
    $output.='<h1 style="text-align:center">STATISTICS FOR GAMES</h1>';
    $output.='<h2 style="text-align:center">STATISTICS LIKES: </h2>';
    
    $conectare=deschideConexiunea();
    $sql="SELECT DISTINCT category FROM games";
    $result=$conectare->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $categoryUp= strtoupper($row['category']);
            $category=$row['category'];
            $output.='<h3>'.$categoryUp.' GAME</h3>';
            $sql2="SELECT DISTINCT type, sum(likes) as likes FROM games WHERE category='$category' group by type";
            $result2=$conectare->query($sql2);
            if ($result2->num_rows > 0){
                while($row2 = $result2->fetch_assoc()) {
                    $type=$row2['type'];
                    $likes=$row2['likes'];
                    $output.='<p>'.$type.':'.$likes.' likes</p>';
                    
                }
            }

        }
    }
    $output.='<hr> ';
    $output.='<h2 style="text-align:center">STATISTICS VIEWS: </h2>';
    $sql3="SELECT DISTINCT category FROM games";
    $result3=$conectare->query($sql3);
    if ($result3->num_rows > 0){
        while($row3 = $result3->fetch_assoc()) {
            $categoryUp= strtoupper($row3['category']);
            $category=$row3['category'];
            $output.='<h3>'.$categoryUp.' GAME</h3>';
            $sql4="SELECT DISTINCT type, sum(views) as views FROM games WHERE category='$category' group by type";
            $result4=$conectare->query($sql4);
            if ($result4->num_rows > 0){
                while($row4 = $result4->fetch_assoc()) {
                    $type=$row4['type'];
                    $views=$row4['views'];
                    $output.='<p>'.$type.':'.$views.' views</p>';
                    
                }
            }

        }
    }

    $output.='<hr> ';
    $output.='<h2 style="text-align:center">STATISTICS TOURNAMENTS: </h2>';
    $sql4="SELECT DISTINCT category FROM games";
    $result4=$conectare->query($sql4);
    if ($result4->num_rows > 0){
        while($row4 = $result4->fetch_assoc()) {
            $categoryUp= strtoupper($row4['category']);
            $category=$row4['category'];
            $output.='<h3>'.$categoryUp.' GAME</h3>';
            $sql5="SELECT DISTINCT type, sum(tournaments) as tournaments FROM games WHERE category='$category' group by type";
            $result5=$conectare->query($sql5);
            if ($result5->num_rows > 0){
                while($row5 = $result5->fetch_assoc()) {
                    $type=$row5['type'];
                    $tournaments=$row5['tournaments'];
                    $output.='<p>'.$type.':'.$tournaments.' tournaments</p>';
                    
                }
            }

        }
    }


$mpdf->WriteHTML($output);

// Output a PDF file directly to the browser
$mpdf->Output('statisticsgames.pdf','D');

 }

?>