<?php

//returneaza un array string cu tipurile jocurilor
function gamesTypeAfterLikes($category)
{
    $conectare=deschideConexiunea();
    $sql="SELECT DISTINCT type FROM  games where category='$category'";
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
function gamesLikesNoAfterLikes($category)
{
    $conectare=deschideConexiunea();
    $sql="SELECT sum(likes) as likes FROM games  where games.category='$category' group by type";
    $result=$conectare->query($sql);
    $likes=[];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //pun fiecare numar de vizualizari intr-un array
            $likes[]=(int)$row["likes"];

    }
}
return json_encode($likes);

}
?>