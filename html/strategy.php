<?php
session_start();
include '../php/conectare.php';
include '../php/view.php';

//verific daca utilizatorul este logat pe cont, in caz afirmativ preiau id ul
if(isset($_SESSION['id']))$id_user=$_SESSION['id'];

//adaug vizualizari  atunci cand un utilizator acceseaza pagina
addViews('strategy');
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
    <?php
    include 'menu.php';
    ?>

      <div class="container">
        <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> STRATEGY</div>    
        </div> 

    </div>
    <br>
    <br>
    
    <br>
    <br>



    <div class="row">
        <div class="column">
              <img src="../images/og20.jpg" >
            <div class="desc"><b>FORGE OF EMPIERS</b> <br></br>Forge of Empires is a browser-based strategy game developed by InnoGames.
            <p><a class="button" href="#popup1">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='46'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="46">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="46">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='46'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
     
          <div class="column">
              <img src="../images/og21.jpg" >
            <div class="desc"><b>GREOPOLIS</b> <br></br>Grepolis can be considered a 4X browser game. It requires a player to Exploit resources, Expand their cities, Explore the oceans, and to Exterminate opposition.
              <p><a class="button" href="#popup3">MORE INFO</a></p>
              <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='47'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="47">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="47">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='47'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
                </div>
  
          <div class="column" >
        <img src="../images/og22.jpg"   >
        <div class="desc"><b>TRIBAL WARS</b> <br></br>Tribal Wars is a browser-based game set in the Middle Ages. Every player controls a small village, striving for power and glory.
          <p><a class="button" href="#popup2">MORE INFO</a></p>
          <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='48'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="48">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="48">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='48'";
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
        <img src="../images/og23.jpg"  >
      <div class="desc"><b>THE WEST</b><br></br> Are you ready to help in the colonisation of the Wild West? Follow in the footsteps of Jesse James, Wyatt Earp, Doc Holliday, and other Western legends? 
        Then join us in a unique adventure into the world of the Old West.
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='49'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="49">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="49">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='49'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
    </div>
          </div>
  
          <div class="column">
          <img src="../images/og24.jpg"  >
        <div class="desc"><b>ELVENAR</b><br></br>At the beginning, you start with a limited area to build your city. 
          The City Map is an area divided into tiles that looks like a square
           grid and where you can place your first buildings, in order to start
            your city's development.
        <p><a class="button" href="#popup5">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='50'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="50">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="50">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='50'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
            </div>
          </div>
    
          <div class="column">
        <img src="../images/og25.jpg"  >
      <div class="desc"> <b>TRIVIADOR</b> <br></br> Players take on the role of European countries sending expeditions to find gold and establish colonies. Although the design uses the trappings of board wargames such as a hex map, combat is not a major part of the game
        <p><a class="button" href="#popup6">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='$id_user' AND id_game='51'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="51">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="51">
                <input type="hidden" id="id_pagina" name="id_pagina" value="9">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='51'";
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
                <p class="titleGame"> FORGE OF EMPIERS</p>
            
                
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#000000">NUMBER OF PLAYERS:</b> 4</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000">TIME TO PLAY:</b>20 min</p>
                  <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#000000" >AGE:</b> 10+</p>
                       <p class="subTitleGame" style="color: green">Gameplay:</p>
                      <p class="descriere"> The main goal of the game is to expand and develop a city, 
                        evolving from the Stone Age to the Colonization of Mars. The 
                        city has houses that provide coins and population, production 
                        buildings that provide tools, buildings that produce goods, and 
                        decorations that provide happiness. Forge points, with a meter 
                        that refills in time, allow to research technologies, which unlock 
                        new buildings, more building space and other bonuses.
                          </p>
                      
                      </div>
         </div>
      </div>
  
  
      <div id="popup3" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame"> TRIBAL WARS</p>

                
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b>2+ </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY: </b>medium </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY: </b>30-50 min</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b>14+</p>
                  <p class="subTitleGame" style="color: green">GAMEPLAY:</p>
                      <p class="descriere"> Tribal Wars has to be played with the 
                        supported browsers over the official web versions or the official 
                        and updated mobile apps. Any kind of action in the game has to be 
                        done by hand or by a selection of permitted scripts and tools only.</p>
                      
                      </div>
         </div>
      </div>
  
      <div id="popup2" class="overlay">
        <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="content">
                <p class="titleGame">GREOPOLIS</p>

          
                  <p class="subTitleGame" style="color: green">GAMEPLAY:</p>
                      <p class="descriere"> All of your buildings, units, spells, and research will 
                        need some or all of these resources. Once you build the basic level for 
                        the timber camp, quarry, and silver mine you will begin to receive those 
                        resources automatically. The rate at which you generate those resource
                         will depend on your island type. Divine Favor will only begin to 
                         accumulate once you select a god to worship in your city. The higher
                          the level of your Timber Camp, Quarry, Silver Mine, and Temple the 
                          more quickly you will gain resources.</p>
                      
                      </div>
         </div>
      </div>
  
  <div id="popup4" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> THE WEST</p>
            
           
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                  <p class="descriere">Discover new lands and experience exciting adventures and duels!
                    The West awaits!
                    
                  </p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b> </b> it is allowed for two players to use the same means of connection, provided each player only controls the actions of his/her assigned account</p>
                  <p class="descriere"> <b> </b>every player sharing a means of connection must abide by rule  </p>
     </div>
     </div>
  </div>
        
    
  
  <div id="popup5" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">ELVENAR</p>

              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 15+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                  <p class="descriere"> The gameplay of both races will be pretty similar but your choice will influence some main traits:

                    The look of your city will depend upon the race you’ve picked. Elves are magical beings, and live in close harmony with nature. Their building design will be very sophisticated. Humans are very ambitious and determined meaning they have a more medieval and industrialized style.
                    The military units that you have at your disposal will also differ. For example, Elves will rely, amongst others, on Treants and Humans on Axe Barbarians.</p>
                
                  </div>
     </div>
  </div>
  
  <div id="popup6" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">TRIVIADOR</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-3</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> higher/p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 15 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 17+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                  <p class="descriere">The basic game can be played by two to four players, representing the activities of Spain, England, France or Portugal. The game also 
                    includes a solitaire scenario where Spain is played by a single player, 
                    and the original SPI edition included optional rules for an additional 
                    player to take a purely financial role as the German bankers.</p>
                  </div>
     </div>
  </div>
  
  

    </body>
    </html>