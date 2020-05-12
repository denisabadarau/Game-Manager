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
                    <li><a href="top.html">Top</a></li>
            </li>
        </ul>

      <div class="container">
        <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> ACTION</div>    
        </div> 

    </div>
    <br>
    <br>
    
    <br>
    <br>



    <div class="row">
        <div class="column">
              <img src="../images/og1.jpg" >
            <div class="desc"><b>0 DAY ATTACK ON EARTH</b> <br></br>is an action shooter video game developed by Japanese studio Gulti and published by Square Enix for the Xbox 360. The game was released on December 23, 2009,[1] and revolves around players defending Paris, New York, and Tokyo from an assault of aliens
            <p><a class="button" href="#popup1">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='28'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="28">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="28">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='28'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
     
          <div class="column">
              <img src="../images/og3.jpg" >
            <div class="desc"><b>Cytosis: BOMBERMAN</b> <br></br>Bomberman is a video game for the Xbox Live Arcade, developed by Backbone Entertainment. Bomberman Live is an original version of the classic game Bomberman, an arcade-style maze-based video game originally developed by Hudson Soft.
              <p><a class="button" href="#popup3">MORE INFO</a></p>
              <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='29'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="29">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="29">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='29'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
                </div>
  
          <div class="column" >
        <img src="../images/og2.jpg"   >
        <div class="desc"><b>10,000 BULETS</b> <br></br>10,000 Bullets, known in Japan as Tsukiyo ni Saraba, is an action/third-person shooter video game developed by Blue Moon Studio and published by Taito Corporation for the Sony PlayStation 2 video game console.
          <p><a class="button" href="#popup2">MORE INFO</a></p>
          <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='30'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="30">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="30">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='30'";
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
        <img src="../images/og4.jpg"  >
      <div class="desc"><b>BATMAN FOREVER</b><br></br> Batman Forever is a beat 'em up video game based on the movie of the same name. Though released by the same publisher at roughly the same time, it is an entirely different game from Batman Forever
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='31'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="31">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="31">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='31'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>
  
          <div class="column">
          <img src="../images/og5.jpg"  >
        <div class="desc"><b>MARIO</b><br></br>Mario is a fictional character in the Mario video game franchise, owned by Nintendo and created by Japanese video game designer Shigeru Miyamoto.
        <p><a class="button" href="#popup5">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='32'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="32">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="32">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='32'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
    
          <div class="column">
        <img src="../images/og6.jpg"  >
      <div class="desc"> <b>AIR RAIDERS</b> <br></br>Air Raiders is an action game released for the Atari 2600 by Mattel in 1982. It received mixed reviews from critics.
        <p><a class="button" href="#popup6">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='33'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="33">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="33">
                <input type="hidden" id="id_pagina" name="id_pagina" value="6">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='33'";
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
                <p class="titleGame"> 0 DAY ATTACK ON EARTH</p>
            
                
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#000000">NUMBER OF PLAYERS:</b> 2</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000">TIME TO PLAY:</b>20 min</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000" >AGE:</b> 10+</p>
                       <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> 0 DAY ATTACK ON EARTH  is designed as a twin-stick shooter in its core, where the movement is done with
                           the left stick and shooting with the right.There is a main goal in each level, which is to take down a certain number of 
                           boss aliens before a timer goes down to zero. However, the skies are also filled with smaller ships, and there are pods 
                           and snakes that burst from the ground. Aiding the fight against the enemies are power-ups like spray gun and flame throwers,
                            as well as special abilities like nitro boost that helps moving the ship out of any harm.0 Day Attack on Earth consists of 
                            28 levels that are split in groups of seven that take place in four cities.Each city is accurately depicted through satellite 
                            imagery,containing landmarks like Champs-Élysées, Tokyo Tower, and Arc de Triomphe. One of the features included is co-op play 
                            for up to four players (when playing offline, AI-controlled ships will support the player instead). Besides co-op, there are 
                            Capture the Flag and Capture Point multiplayer modes.
                          </p>
                      
                      </div>
         </div>
      </div>
  
  
      <div id="popup3" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame"> BOMBERMAN</p>
                
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b>1 </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY: </b>medium </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY: </b>30-50 min</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b>14+</p>
                  <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> Most games in the Bomberman franchise largely revolve around two modes of play; single player campaigns where the player
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
                <p class="titleGame">10000Bulets</p>
                <div class="row">
               
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-3</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> high level </p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 10-15 min</p>
                    <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 12+ </p>
                  <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> 10.000Bulets: is a worker placement game that takes place inside a human cell. Players start out with a number of workers and on a player’s turn, they will place one of their workers in any available location within that cell. Some of the locations provide players with resources (e.g., mRNA, ATP); some with actions (e.g., convert resources, collect cards). Resources are used to build enzymes, hormones and/or receptors, which score Health Points. The player with the most Health Points at the end of the game wins!</p>
                      <p class="subTitleGame" style="color:  #ffcc00">Gameplay:</p>
                      <p class="descriere">   <b> </b>10,000 Bullets is an action/third-person shooter in which the gun-wielding player 
                        character battles numerous enemies and bosses in different environments.
                         Styled similar to cinematography found in The Wachowskis' The Matrix 
                         film franchise and gameplay mechanics in games such as Dead to Rights 
                         and Max Payne, the player is given an ability to slow down time and thus 
                         dodge multitudes of flying bullets and other obstacles.</p>
                      
                      </div>
         </div>
      </div>
  
  <div id="popup4" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> BATMAN FOREVER</p>
            
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
              <p class="subTitleGame" style="color: green">gameplay</p>
                  <p class="descriere"> is an action-adventure game set within an open world
                     Gotham City, which can be explored freely by the player from the beginning of the game,
                      allowing them to travel seamlessly anywhere within its boundaries.
                       Many of the gadgets and the gameplay elements from the previous Arkham 
                       games return, including the grapnel gun, line launcher, batarangs, the 
                       countering system, Detective Vision, and the Remote Hacking Device
                  </p>
                  
     </div>
     </div>
  </div>
        
    
  
  <div id="popup5" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">Mario</p>

              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> easy</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 10-15 minutes</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 5+</p>
              <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere"> Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the Mad Science Foundation was created. Now these "misunderstood geniuses" can finally get the access they need to the four vital building blocks of mad science: Lasers, Dark Matter, Cryptomium, and Sharks.</p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b></b>  In Mario , the player takes on the role of Mario, the protagonist of the 
                    series. Mario's younger brother, Luigi, is controlled by the second 
                    player in the game's multiplayer mode and assumes the same plot role
                     and functionality as Mario. The objective is to race through the Mushroom 
                     Kingdom, survive the main antagonist Bowser's forces, and save Princess 
                     Toadstool.</p>

                  </div>
     </div>
  </div>
  
  <div id="popup6" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">AIR RAIDERS </p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-8</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
            <p class="subTitleGame" style="color: green">Gameplay:</p>
                  <p class="descriere"> The player has the view of an airstrip as seen from the cockpit of a jet 
                    fighter. In order to start the launch, it is required that the player 
                    presses the fire button. When the player pulls back on the joystick, 
                    the jet fighter becomes airborne. A feature of the game includes a horizontal tilt
                     that happens when the jet fighter turns to the left or the right for
                      realistic simulation. The goal is to fire at enemy aircraft. The player
                       also has to worry about not making a quick dive after an enemy craft
                        that would lead to a crash landing. There is also a bar that is 
                        located on the width of the screen that allows the player to keep 
                        track of the horizontal position. It is important to stay out of heavy
                        unfire zones because it can lead to a nosedive crash. It is possible to pull out 
                        of a nosedive, but it would be a better idea for the player to avoid flak.</p>
                  </div>
     </div>
  </div>
  
  

    </body>
    </html>