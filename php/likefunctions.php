<?php

//returneaza un array string cu tipurile jocurilor
function gamesTypeAfterLikes($category)
{
    $conectare=deschideConexiunea();
    $sql="SELECT games.type FROM likes join games on likes.id_game=games.id where games.category='$category' group by games.type";
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
    $sql="SELECT count(likes.id_game) as likes FROM likes join games on likes.id_game=games.id where games.category='$category' group by games.type";
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