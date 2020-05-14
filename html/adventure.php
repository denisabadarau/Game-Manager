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
                      <a href="action.php">Action</a>
                      <a href="adventure.php">Adventure</a>
                      <a href="sport.php">Sport</a>
                      <a href="strategy.php">Strategy</a>
                      <a href="vehicles.php">vehicles</a>
                    </div>
                    <li><a href="statistics.html">Statistics</a></li>
                    <li><a href="battles.html">Battles</a></li>
                    <li><a href="top.php">Top</a></li>
            </li>
        </ul>

      <div class="container">
        <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> ADVENTURE</div>    
        </div> 

    </div>
    <br>
    <br>
    
    <br>
    <br>



    <div class="row">
     
          <div class="column">
              <img src="../images/og8.jpg" >
            <div class="desc"><b> Apex Legends</b> <br></br>is a free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts.
              <p><a class="button" href="#popup3">MORE INFO</a></p>
              <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='34'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="34">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="34">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='34'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
                </div>

                <div class="column">
                  <img src="../images/og7.jpg" >
                <div class="desc"><b>The Amazing Eternals</b> <br></br>is an adventure  video game, this game was an upcoming team-based multiplayer online first-person shooter video game developed and published by Digital Extremes.
                <p><a class="button" href="#popup1">MORE INFO</a></p>
                <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='35'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="35">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="35">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='35'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
                </div>
              </div>
  
          <div class="column" >
        <img src="../images/og9.jpg"   >
        <div class="desc"><b>Quake Champions</b> <br></br>Quake Champions is a first-person shooter developed by id Software and published by Bethesda Softworks, as part of the Quake series of multiplayer shooters
          <p><a class="button" href="#popup2">MORE INFO</a></p>
          <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='36'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="36">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="36">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='36'";
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
        <img src="../images/og10.jpg"  >
      <div class="desc"><b>Overwatch</b><br></br> Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment. 
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='37'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="37">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="37">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='37'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>
  
          <div class="column">
          <img src="../images/og11.jpg"  >
        <div class="desc"><b>Valorant</b><br></br>Valorant is an upcoming free-to-play multiplayer first-person shooter developed and published by Riot Games.
        <p><a class="button" href="#popup5">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='38'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="38">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="38">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='38'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
    
          <div class="column">
        <img src="../images/og12.jpg"  >
      <div class="desc"> <b>Evolve</b> <br></br>Evolve is a first-person shooter video game developed by Turtle Rock Studios, published by 2K Games.
        <p><a class="button" href="#popup6">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='39'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="39">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="39">
                <input type="hidden" id="id_pagina" name="id_pagina" value="7">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='39'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
  </div>
      </div>
  
  <div id="popup3" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame"> Apex Legends</p>
            
                
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#000000">NUMBER OF PLAYERS:</b> 2</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000">TIME TO PLAY:</b>20 min</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000" >AGE:</b> 10+</p>
                       <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> Apex Legends is an online multiplayer battle royale game featuring squads of three players
                         using pre-made characters 
                        , similar to those of hero shooters.
                        Alternate modes have been introduced allowing for single and 
                        for two-player squads since the game's release
                          </p>
                      
                      </div>
         </div>
      </div>
  
  
      <div id="popup1" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame"> The amazing eternals</p>
  
                <div class="row">
                  <div class="column">
                        <img src="../images/og7.jpg" >
                  </div>
                  </div>
                
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b>2+ </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY: </b>medium </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY: </b>30-50 min</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b>14+</p>
                  <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> Most games in the AMAZING ETERNALS franchise largely revolve around two modes of play; single player campaigns where the player
                           must defeat enemies and reach an exit to progress through levels, and multiplayer modes where players must attempt to eliminate each other and be the 
                           last one standing. Gameplay involves strategically placing down bombs, which explode in multiple directions after a certain amount of time, in order 
                           to destroy obstacles and kill enemies and other players. The player can pick up various power-ups, giving them benefits such as larger explosions or 
                           the ability to place more bombs down at a time. The player is killed if they touch an enemy or get caught up in a bomb's explosion, including their own, 
                           requiring players to be cautious of their own bomb placement. In addition to the main maze-based Bomberman games, some spin-off titles involve adventure, 
                           platformer, puzzle, and kart racing gameplay.</p>
                      
                      </div>
         </div>
      </div>
  
      <div id="popup2" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame">Quake</p>
              
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> high </p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30minutes</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 17+ </p>
                  <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> In Quake's single-player mode, players explore and navigate to the exit of each Gothic and dark level, facing monsters
                         and finding secret areas along the way. Usually there are switches to 
                         activate or keys to collect in order to open doors before the exit can 
                         be reached. Reaching the exit takes the player to the next level. Before 
                         accessing an episode, there is a set of three pathways with easy, medium, 
                         and hard skill levels. The fourth skill level, "Nightmare", was "so bad 
                         that it was hidden, so people won't wander in by accident"; the player 
                         must drop through water before the episode four entrance and go into a 
                         secret passage to access it.
                      </p>
                      </div>
         </div>
      </div>
  
  <div id="popup4" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> Overwatch</p>
            
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
              <p class="subTitleGame" style="color: green">Gameplay</p>
                  <p class="descriere">Overwatch is an online team-based game generally 
                    played as a first-person shooter. The game features several different 
                    game modes, principally designed around squad-based combat with two opposing 
                    teams of six players each. Players select one of over two dozen pre-made 
                    hero characters from one of three class types: Damage heroes that deal 
                    most of the damage to attack or defend control points, Tank heroes that 
                    can absorb a large amount of damage, and Support heroes that provide 
                    healing or other buffs for their teammates.
                  </p>
                  
     </div>
     </div>
  </div>
        
    
  
  <div id="popup5" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">Valorant</p>
            
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 15+</p>
              <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere"> Valorant is an upcoming free-to-play multiplayer first-person shooter developed 
                  and published by Riot Games.</p>
                  </div>
     </div>
  </div>
  
  <div id="popup6" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">Evolve </p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-8</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
            <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere"> Evolve is an action video game with a focus on both co-operative, and competitive, multiplayer gameplay. 
                    The game adapts a '4v1' asymmetrical structure where four players take control of the Hunters, while the fifth 
                    player controls the Monster. The Hunters' main objective is to track and hunt the Monster 
                    in a limited amount of time, while the Monster's goal is to evolve and
                     make themselves more powerful.</p>
                  </div>
     </div>
  </div>
  
  

    </body>
    </html>