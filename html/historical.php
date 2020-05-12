<?php
include '../php/conectare.php';
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniuStyle.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <meta charset="utf-8" >
    <title> My page </title>
</head>
<body>
    <div class="split left">
    </div>
    <div class="split right">
    </div>
    <a href="meniu.html"> <img src="../images/logomainalb.png"  style="width:300px;height:100px;margin-left:370px;"> </a>
        <p class="title">-Game Manager-</p>
        <ul>
            <li><a href="meniu.html">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">BoardGames</a>
                <div class="dropdown-content">
                <a href="biology.php">Biology</a>
                    <a href="educational.php">Educational</a>
                    <a href="fantasy.php">Fantasy</a>
                    <a href="historical.php">Historical</a>
                    <a href="horror.php">Horror</a>

                </div>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">OnlineGames</a>
                    <div class="dropdown-content">
                        <a href="action.html">Action</a>
                        <a href="adventure.html">Adventure</a>
                        <a href="animal.html">Animal</a>
                        <a href="sport.html">Sport</a>
                        <a href="strategy.html">Strategy</a>
                        <a href="vehicles.html">vehicles</a>
                    </div>
                    <li><a href="statistics.html">Statistics</a></li>
                    <li><a href="battles.html">Battles</a></li>
                    <li><a href="top.html">Top</a></li>
            </li>
        </ul>

    <div class="container">
      <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> HISTORICAL</div>    
        </div> 
</div>

<div class="row">
  <div class="column">
          <img src="../images/days.jpg" >
        <div class="desc"><b>7 days of Westerplatte</b> is a cooperative game, the players incorporate the roles of Polish commanders who work together to confront the German army and win the game.
        <p><a class="button" href="#popup1">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='16'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="16">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="16">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='16'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
            </div>

<div class="column">
    <img src="../images/axis.jpg"  >
  <div class="desc"><b>Axis& Allies</b> depicts WWII on a grand scale, a full global level. Up to five players can play on two different teams.The game comes with masses of plastic miniatures that represent various military units during WWII.
  <p><a class="button" href="#popup2">MORE INFO</a></p>
  <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='17'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="17">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="17">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='17'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
        </div>
              </div>


<div class="column">
    <img src="../images/lancaster.jpg">
  <div class="desc">In 1413, the new king of England, Henry V of Lancaster, has ambitious plans: The unification of England and the conquest of the French crown! In <b>Lancaster</b>, each player takes the role of an ambitious aristocratic family. Who will be the best supporter of this young king, and the most powerful Lord of his time?
  <p><a class="button" href="#popup3">MORE INFO</a></p>
  <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='18'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="18">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="18">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='18'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
</div>
</div>
</div>

<div class="row">
<div class="column">
        <img src="../images/carcassone.jpg" >
      <div class="desc"><b>Carcassonne</b> is considered to be an excellent "gateway game" by many board game players as it is a game that can be used to introduce new players to board games. The rules are simple, no one is ever eliminated, and the play is fast. A typical game, without any expansions, takes about 45 minutes to play. There is a substantial luck component to the game; however, good tactics greatly improve one's chances of winning
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='19'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="19">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="19">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='19'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>

<div class="column">
        <img src="../images/making.jpg">
      <div class="desc"><b>1960: The making of a president </b> achieves perfect pitch between accessibility of game play and empowering the players by allowing them to indulge in making and changing established history in an engaging way.This fast-playing strategy game for two players challenges you to run for the most powerful elective office in the world, at one of its most unique crossroads. Will you recreate history, or rewrite it? 1960: The Making of the President provides you the opportunity to do both.
      <p><a class="button" href="#popup5">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='20'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="20">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="20">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='20'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
  </div>


<div class="column">
        <img src="../images/stone.png">
      <div class="desc"> <b>Stone Age </b>is a development game with a Stone Age theme that involves taking control of a tribe to collect resources and build a village that has the most powerful chief.Players collect wood, break stone and wash their gold from the river. They trade freely, expand their village and so achieve new levels of civilization. With a balance of luck and planning, the players compete for food in this prehistoric time. 
      <p><a class="button" href="#popup6">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='21'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="21">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="21">
                <input type="hidden" id="id_pagina" name="id_pagina" value="4">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='21'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>
        </div>

        <div id="popup1" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame"> 7 DAYS OF WESTERPLATTE </p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/wester1.jpg" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/wester2.jpg"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/wester3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1-4</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.5/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 45-60</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 8+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p cass="descriere"> 7 Days of Westerplatte is a cooperative war game. The players incorporate the roles of Polish commanders who work together to confront the German army and win the game. Stukas's raids, land troop attacks, and battleship and howitzer bombardments are the biggest threat for Polish forces, and to hold back the attacking German troops, players must use land mines, mortars and rifles, while also remembering to rebuild the defensive structures and keep their morale high. Will you manage to defend the Depot for seven days, or will you succumb to the enemy's crushing power?</p>
                        </div>
           </div>
        </div>
        
        <div id="popup2" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame">AXIS& ALLIES</p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/axis1.jpg" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/axis2.jpg"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/axis3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 3/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 180 min</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 12+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p class="descriere">It depicts WWII on a grand scale, full global level. Up to five players can play on two different teams. The Axis which has Germany and Japan, and the Allies which has the USA, the United Kingdom, and the USSR. A full map of the world is provided, broken up in various chunks similar to Risk. The game comes with gobs of plastic miniatures that represent various military units during WWII. </p>
                        <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                        <p class="descriere"> <b>R1 :</b>  Players have at their disposal infantry, armor, fighters, bombers, battleships, aircraft carriers, submarines, troop transports, anti-air guns, and factories</p>
                        <p class="descriere"> <b>R2:</b> All of the units perform differently and many have special functions. </p>
                        <p class="descriere"> <b>R3:</b> Players have to work together with their teammates in order to coordinate offenses and decide how best to utilize their production points.</p>
                        <p class="descriere"> <b>R4:</b> Players also have the option of risking production resources on the possibility of developing a super technology that might turn the tide of war.</p>
                        </div>
           </div>
        </div>
        
        <div id="popup3" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame"> LANCASTER</p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/lancaster1.jpg" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/lancaster2.jpg"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/lancaster3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 3/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60 mi</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p class="descriere">In 1413, the new king of England, Henry V of Lancaster, has ambitious plans: The unification of England and the conquest of the French crown! Each player takes the role of an ambitious aristocratic family. Who will be the best supporter of this young king, and the most powerful Lord of his time?</p>
                        <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                        <p class="descriere"><b>R1 :</b> In Lancaster, the players want to proceed from simply being a Lord to being the most powerful ally of the king.</p>
                        <p class="descriere"> <b>R2:</b> They may achieve this by developing their own knighthood, as well as by clever deployment of individual knights in the counties of England, at their own castle, and to conflicts with France.</p>
                        <p class="descriere"><b>R3:</b>  In parliament, they try to push laws from which they will benefit themselves most.</p>
                        <p class="descriere"><b>R4:</b> The player with the most power points at the end of the game is the winner.</p>
                        </div>
           </div>
        </div>
        
        <div id="popup4" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame"> CARCASSONNE</p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/carcasone1.png" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/carcasone2.jpg"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/carcasone3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p class="descriere"> Carcassonne is a tile-placement game in which the players draw and place a tile with a piece of southern French landscape on it. The tile might feature a city, a road, a cloister, grassland or some combination thereof, and it must be placed adjacent to tiles that have already been played, in such a way that cities are connected to cities, roads to roads, etcetera. </p>
                        <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                        <p class="descriere"> <b>R1 :</b> Having placed a tile, the player can then decide to place one of their meeples on one of the areas on it: on the city as a knight, on the road as a robber, on a cloister as a monk, or on the grass as a farmer.</p>
                        <p class="descriere"> <b>R2:</b> When that area is complete, that meeple scores points for its owner.</p>
                        <p class="descriere"><b>R3:</b> Since players place only one tile and have the option to place one meeple on it, turns proceed quickly even if it is a game full of options and possibilities.</p>
                        </div>
           </div>
        </div>
        
        <div id="popup5" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame"> 1960: THE MAKING OF THE PRESIDENT</p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/making1.gif" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/makin2.gif"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/makin3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 3.5/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 90-120 min</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 12+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p class="descriere"> In 1960: The Making of the President, you take on the role of one of these great protagonists vying for the right to lead his country into the heart of the Cold War. However, it is not just foreign policy that poses a challenge to American leadership; this is also an era of great social turmoil and progress. </p>
                        <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                        <p class="descriere"> <b>R1 :</b> As with any election campaign, the challenge is to adapt your game plan as the ground shifts out from under you. </p>
                        <p class="descriere"> <b>R2:</b> There are never enough resources or time to do everything, but you need to make the tough calls to propel yourself into the White House.</p>
                        <p class="descriere"><b>R3:</b> This fast-playing strategy game for two players challenges you to run for the most powerful elective office in the world, at one of its most unique crossroads. </p>
                        <p class="descriere"> <b>R4:</b>Candidates vie to capture each state’s electoral votes using campaign points in the four different regions of the country. At the same time, they must build momentum by dominating the issues of the day and attempt to gain control of the airwaves.</p>
                        </div>
           </div>
        </div>
        
        <div id="popup6" class="overlay">
          <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
                  <p class="titleGame">STONE AGE </p>
                  <div class="row">
                    <div class="column">
                          <img src="../images/stone1.jpg" >
                      </div>
                 
                      <div class="column" >
                    <img src="../images/stone2.jpg"   >
                      </div>
                   
                      <div class="column">
                    <img src="../images/stone3.jpg" >
                      </div>
                    </div>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.5/5</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
                    <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                        <p class="descriere"> The "Stone Age" times were hard indeed. In their roles as hunters, collectors, farmers, and tool makers, our ancestors worked with their legs and backs straining against wooden plows in the stony earth. Of course, progress did not stop with the wooden plow. People always searched for better tools and more productive plants to make their work more effective. In Stone Age, the players live in this time, just as our ancestors did. </p>
                        <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                        <p class="descriere"> <b>R1 :</b> Players use up to ten tribe members each in three phases. </p>
                        <p class="descriere"> <b>R2:</b> In the first phase, players place their men in regions of the board that they think will benefit them, including the hunt, the trading center, or the quarry. </p>
                        <p class="descriere"><b>R3:</b>  In the second phase, the starting player activates each of his staffed areas in whatever sequence he chooses, followed in turn by the other players.</p>
                        <p class="descriere"><b>R4:</b>  In the third phase, players must have enough food available to feed their populations, or they face losing resources or points.</p>
                        </div>
           </div>
        </div>
        

    </body>
    </html>