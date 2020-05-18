<?php

function addViews($type)
{
    
    $conectare=deschideConexiunea();
    $sql="UPDATE games SET views=views+1 WHERE type='$type'";
    $result=$conectare->query($sql);
}

//returneaza un array string cu tipurile jocurilor
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

//returneaza un array cu numarul de vizualizari pt fiecare tip
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

?>