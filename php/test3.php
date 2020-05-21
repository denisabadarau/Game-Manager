<?php
<<<<<<< HEAD
include '../php/conectare.php';

function gamesTypeAfterViews($category)
{
    $conectare=deschideConexiunea();
    $sql="SELECT DISTINCT(type) FROM games WHERE category='$category'";
    $result=$conectare->query($sql);
    $types=[];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //pun fiecare tip intr-un string
            $types[]=$row["type"];
    }
}
return json_encode($types);
}

function gamesViewsNoAfterViews($category)
{
    $conectare=deschideConexiunea();
    $sql="SELECT DISTINCT(type),views FROM games WHERE category='$category'";
    $result=$conectare->query($sql);
    $views=[];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //pun fiecare numar de vizualizari intr-un array
            $views[]=(int)$row["views"];

    }
}
return json_encode($views);

}

echo gamesTypeAfterViews('board');
echo gamesViewsNoAfterViews('board');
=======
include 'conectare.php';
include 'likefunctions.php';

echo gamesLikesNoAfterLikes('board');
>>>>>>> 6da6505d2dd42631d8c3689b81765eb75bbea516

?>