<?php
include '../php/conectare.php';
include '../php/view.php';
//adaug vizualizari  atunci cand un utilizator acceseaza pagina
addViews('sport');
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
          <div class="textMiddle"> SPORT</div>    
        </div> 

    </div>
    <br>
    <br>
    
    <br>
    <br>



    <div class="row">
        <div class="column">
              <img src="../images/og15.jpg" >
            <div class="desc"><b>Soccer</b> <br></br> In the game, players assume the role of the titular main protagonist who travels 
              across several countries around the world in order to repair the World Cup 
            <p><a class="button" href="#popup1">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='40'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="40">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="40">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='40'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
     
          <div class="column">
              <img src="../images/og14.jpg" >
            <div class="desc"><b>NBA 2k20</b> <br></br>NBA 2K20 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports,
               based on the National Basketball Association
              <p><a class="button" href="#popup3">MORE INFO</a></p>
              <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='41'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="41">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="41">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='41'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
                </div>
  
          <div class="column" >
        <img src="../images/og16.jpg"   >
        <div class="desc"><b>TennisKids</b> <br></br>The game is a realistic simulation of the sport table tennis, with the main 
          objective to make the opponent fail to hit the ball.
          <p><a class="button" href="#popup2">MORE INFO</a></p>
          <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='42'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="42">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="42">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='42'";
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
        <img src="../images/og17.jpg"  >
      <div class="desc"><b>Finnal Blow</b><br></br> The game features a single season boxing championship run.
         You can select from a group of fictional fighters: Dynamite Joe - 
         The Miracle Man, Fernando Gomez - The South American Eagle. 
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='43'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="43">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="43">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='43'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>
  
          <div class="column">
          <img src="../images/og18.jpg"  >
        <div class="desc"><b>International Karate</b><br></br>International Karate is a fighting game developed and published
           by System 3 for various home computers
        <p><a class="button" href="#popup5">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='44'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="44">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="44">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='44'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
    
          <div class="column">
        <img src="../images/og19.jpg"  >
      <div class="desc"> <b>BOWLING</b> <br></br>In all six variations, games last for 10 frames, or turns.
         At the start of each frame, the current player is given two chances to 
         roll a bowling ball down an alley in an attempt to knock down as
          many of the ten bowling pins as possible.
        <p><a class="button" href="#popup6">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='45'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="45">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="45">
                <input type="hidden" id="id_pagina" name="id_pagina" value="8">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='45'";
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
                <p class="titleGame"> Soccer Kids</p>
            
                
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#000000">NUMBER OF PLAYERS:</b> 2</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000">TIME TO PLAY:</b>20 min</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000" >AGE:</b> 10+</p>
                       <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> Soccer Kid is a platform game where players take control 
                        of the titular character travelling across the world in order 
                        to retrieve and restore the world cup from the clutches of the alien
                         pirate Scab, who plans to add it to his ever-growing collection.
                          By pressing different buttons at the title screen, the player can 
                          change the colours of their character's clothes in order to represent 
                          their favorite team.
                          </p>
                      
                      </div>
         </div>
      </div>
  
  
      <div id="popup2" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame"> NBA 2k20</p>
                
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b>2+ </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY: </b>medium </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY: </b>30-50 min</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b>14+</p>
                  <p class="subTitleGame" style="color: green">GAMEPLAY:</p>
                      <p class="descriere"> NBA 2K20 is a basketball simulation game which, like the previous games in the series, strives to realistically 
                        depict the National Basketball Association (NBA), as well as present 
                        improvements over the previous installments. The player mainly plays
                         NBA games with real-life or customized players and teams; games follow
                          the rules and objectives of NBA games. Several game modes are present 
                          and many settings can be customized. Up to six expansion teams can be 
                          created and used in both MyLeague and MyGM Modes, with the possibility 
                          of a 36-team league, and any team can be relocated and rebranded.
                        </p>
                      
                      </div>
         </div>
      </div>
  
      <div id="popup3" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame">TennisKids</p>
  
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
                  <p class="subTitleGame" style="color: green">Gameplay</p>
                      <p class="descriere"> Rockstar Games Presents Table Tennis is a realistic simulation of the sport of table tennis. In the game, two players 
                        hit a ball back and forth from one another. The goal of the game 
                        is to make the opponent fail to return the ball. Players have the 
                        ability to challenge a multiplayer partner, either offline or online, 
                        or can select to challenge the game's artificial intelligence.Players can 
                        select from a roster of eleven characters, which are unlocked as they 
                        progress through the game; each character has particular skills in 
                        different areas.</p>
                      </div>
         </div>
      </div>
  
  <div id="popup4" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> Final Blow</p>
            
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
              <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere">The game is a side-scrolling boxing game where the player moves left and right to control a screen sized boxer. When the timing is right, the player can unleash a final blow punch which can sometimes KO the opponent in a single strike.

                    The home versions contain a spectator mode where the player can watch their favorite boxers compete.
                  </p>
                  
     </div>
     </div>
  </div>
        
    
  
  <div id="popup5" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">International Karate</p>

              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> high</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 15+</p>
              <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere"> The core game is a two-dimensional, one-on-one, versus fighting game. 
                    Players take on the roles of martial artists competing in a kumite tournament.
                     Rather than wearing down an opponent's health, the goal is instead 
                     to score single solid hits. After each hit, combat stops and both
                      combatants are returned to their starting positions. Depending on 
                      how well players hit their opponent, they score either a half-point 
                      or a full point. Matches can be quite brief, as only two full points are required
                       to win, and a point can be quickly scored just seconds after a round 
                       begins.</p>
                  
                  </div>
     </div>
  </div>
  
  <div id="popup6" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">Bowling  </p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-8</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                  <p class="descriere"> The bowler (on the left side of the screen) may move up and down his end of the alley to aim before
                     releasing the ball. In four of the game's six variations, the ball 
                     can be steered before it hits the pins. Knocking down every pin on 
                     the first shot is a strike, while knocking every pin down in both shots
                      is a spare. The player's score is determined by the number of pins 
                      knocked down in all 10 frames, as well as the number of strikes and 
                      spares acquired.</p>
                  </div>
     </div>
  </div>
  
  

    </body>
    </html>