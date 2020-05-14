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
                    <li><a href="top.php">Top</a></li>
            </li>
        </ul>

    <div class="container">
      <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> FANTASY</div>    
        </div> 
</div>

    <br>
    <br>
    
    <div class="row">
      <div class="column">
          <img src="../images/battle.jpg" >
        <div class="desc"><b>Battle Masters</b> is a game that simulates the type of battles as seen in Warhammer Fantasy Battle, but with much simpler game mechanics not based on its parent game. It is focuses on a battle between the forces of good, or The Empire, against the forces of evil, or Chaos, which is a combined army including forces from the Chaos and Orcs and Goblins armies of the Warhammer Fantasy setting including creatures such as Ogres.
          <p><a class="button" href="#popup1">MORE INFO</a></p>
          <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='11'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="11">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="11">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='11'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
        </div>
              </div>
      

        <div class="column">
            <img src="../images/blood.jpg">
          <div class="desc"><b>Blood Bowl </b> is a fantasy football game populated by traditional fantasy elements such as human warriors, goblins, dwarves, elves, orcs and trolls.Blood Bowl is a two-player, turn-based board game that typically uses 28 mm miniatures to represent a contest between two teams on a playing field. 
            <p><a class="button" href="#popup2">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='12'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="12">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="12">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='12'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
  </div>
        </div>

    
    <div class="column">
        <img src="../images/escape.jpg"  >
      <div class="desc"><b>Escape from Atlantis</b> is a board game that portrays the sinking of Atlantis and the attempts by the population to escape the sinking island.Escape from Atlantis includes four Atlantean tribes, each with twelve villagers. These are represented as small wooden figures, coloured red, blue, green and yellow. Each player picks one tribe.
        <p><a class="button" href="#popup3">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='13'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="13">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="13">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='13'";
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
        <img src="../images/chaos.jpg">
      <div class="desc"> <b>Chaos Marauders</b> is a card-based board game for 2-4 players .The object of the game is to create "battle lines" of orcs and a motley assortment of creatures from the Warhammer universe, including skaven (with their formidable Horned Rat Standard, and "Clan Skyrre Blowback" flamethrower), goblins, dwarf captives, hobgoblins, "crummy snotling slaves", an Orc War Wyvern and the eponymous Chaos Marauders. 
        <p><a class="button" href="#popup4">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='14'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="14">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="14">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='14'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
  </div>
        </div>

             

    <div class="column">
        <img src="../images/dark.jpg" >
      <div class="desc"><b>Dark Tower</b> is a 1981 electronic board game by Milton Bradley Company, for one to four players. The object of the game is to amass an army, collect the three keys to the Tower, and defeat the evil within
        <p><a class="button" href="#popup5">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='15'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="15">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="15">
                <input type="hidden" id="id_pagina" name="id_pagina" value="3">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='15'";
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
            <p class="titleGame"> BATTLE MASTERS</p>
            <div class="row">
              <div class="column">
                    <img src="../images/battle1.jpg" >
                </div>
           
                <div class="column" >
              <img src="../images/battle2.jpg"   >
                </div>
             
                <div class="column">
              <img src="../images/battle3.jpg" >
                </div>
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 1.5/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 9+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                  <p class="descriere"> Battle Masters is a fantasy miniatures battle game by Milton Bradley, presumably licensed from Games Workshop. The sizeable game box comes stuffed with tons of plastic miniatures, a deck of combat cards and some dice. Players move and fight their armies based upon what card is turned over from the deck. Combat is held on a large vinyl mat 4.5 ft square</p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b>R1 :</b> You and your opponent must strategically guide 25 army units, featuring over 100 finely-detailed figures, across the gigantic 4 1/2' X 5' Battle Mat </p>
                    <p class="descriere"><b>R2:</b> The battle unfolds as each turn of a Battle card tells which army units can move and which can attack.  </p>
                      <p class="descriere"><b>R3:</b>When a card is drawn the unit or units whose picture(s) is on the card is allowed to first move and then attack (with the exception of archers, crossbowmen and the mighty cannon, who may move or attack).</p>
                        <p class="descriere"> <b>R4:</b>  In some instances the card may show multiple units in which case all of those units may move and attack.</p>
                          <p class="descriere"> <b>R4:</b> Two special units exist with unique movement/attack rules, the Ogre Champion (Chaos) and the Mighty Cannon (Empire)</p>
                            <p class="descriere"><b>R5:</b> They are also mounted as individuals on the unit bases.</p>  
                </div>
     </div>
  </div>
  
  <div id="popup2" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> BLOOD BOWL </p>
            <div class="row">
              <div class="column">
                    <img src="../images/blood1.jpg" >
                </div>
           
                <div class="column" >
              <img src="../images/blood2.jpg"   >
                </div>
             
                <div class="column">
              <img src="../images/blood3.jpg" >
                </div>
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.5/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 90 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 14+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
              <p class="descriere">Blood Bowl: Team Manager - The Card Game is a bone-breaking, breathtaking standalone card game of violence and outright cheating for two to four players. Chaos, Dwarf, Wood Elf, Human, Orc, and Skaven teams compete against each other over the course of a brutal season. Customize your team by drafting Star Players, hiring staff, upgrading facilities, and cheating like mad. Lead your gang of misfits and miscreants to glory over your rivals all to become Spike! Magazine's Manager of the Year! </p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b>R1 :</b> Once a manager has chosen one of the six teams, he has five weeks to groom them into the best in the league, culminating with the Blood Bowl tournament.</p>
                    <p class="descriere"><b>R2:</b> Managers begin the season with a starting team deck full of basic scrub players. </p>
                      <p class="descriere"><b>R3:</b> These players are none too bright and have limited talents, but a clever manager can play to their strengths by carefully positioning them to excel on the pitch.</p>
                        <p class="descriere"><b>R4:</b> The more highlights a team wins, the more it improves and the more fans it accumulates.</p>
                  </div>
     </div>
  </div>
  

  
  <div id="popup4" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame"> CHAOS MARAUDRES </p>
            <div class="row">
              <div class="column">
                    <img src="../images/chaos1.jpg" >
                </div>
           
                <div class="column" >
              <img src="../images/chaos2.jpg"   >
                </div>
             
                <div class="column">
              <img src="../images/chaos3.jpg" >
                </div>
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 4</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 1/5 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 45 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
              <p class="descriere"> A game created by Games Workshop in the mid 80s that puts each player in the position of being an orcish general who must muster his troops into three battle lines in preparation of attacking the dwarves. Each player begins with a blank card mat which is slowly filled with cards that represent different units of orcs, goblins, war machines, and treasure. Each card has its own rules which affect play.</p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b>R1 :</b> Once a battle line is completed with a standard at the front, a musician at the rear, and all the spaces filled in between, it can be used to disrupt another player's unfinished battle line. </p>
                    <p class="descriere"><b>R2:</b> The games ends when a player has all three lines completed. </p>
                      <p class="descriere"> <b>R3:</b> Each card has a point value which is then tallied and added to a bonus score for any completed battle lines.</p>
                        <p class="descriere"><b>R4:</b> Also, many of the cards used to relate to old Citadel ork and goblin miniatures, in theory.</p>
                  </div>
     </div>
  </div>
  


  <div id="popup3" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">ESCAPE FROM ATLANTIS</p>
            <div class="row">
              <div class="column">
                    <img src="../images/survive1.jpg" >
                </div>
           
                <div class="column" >
              <img src="../images/survive2.jpg"   >
                </div>
             
                <div class="column">
              <img src="../images/survive3.jpg" >
                </div>
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 4</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 45-60 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 8+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
              <p class="descriere">Escape from Atlantis is similar to the Parker Brothers game Survive! but with some key differences (e.g., people pawns are not worth a variable number of points).
                    In 2010, a reworked version of Escape from Atlantis which combines the rules of the game along with the rules to Survive! was printed by Stronghold Games titled "Survive: Escape from Atlantis!" </p>
                    <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                    <p class="descriere"> <b>R1:</b> Each player controls 12 Atlantean Tribesmen that they try and move towards the safety of the surrounding islands before the main island sinks</p>
                      <p class="descriere"> <b>R2:</b>  Players can either swim, latch onto a dolphin, or use boats to travel but must avoid sea monsters, octopuses, and sharks on their way to safety.</p>
                  </div>
     </div>
  </div>

  <div id="popup5" class="overlay">
    <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
            <p class="titleGame">DARK TOWER </p>
            <div class="row">
              <div class="column">
                    <img src="../images/dark1.jpg" >
                </div>
           
                <div class="column" >
              <img src="../images/dark2.jpg"   >
                </div>
             
                <div class="column">
              <img src="../images/dark3.jpg" >
                </div>
              </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1-4</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 90 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
              <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
              <p class="descriere"> Dark Tower was technologically impressive when it was released in 1981. Gameplay was facilitated by a small computer inside the black plastic shell of the tower itself. Players input their moves on a small membrane keypad each turn and the computer took over from there, doing everything from conducting the progress of battles to keeping track of how much (or little) food was left to feed the players' always hungry warriors. The computer would play brief musical serenades at significant points of the game.</p>
                  <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                  <p class="descriere"> <b>R1 :</b> To vanquish the usurper, players search the four realms of the circular game board for three keys to unlock the tower's gate. </p>
                    <p class="descriere"> <b>R2:</b> On this journey, there are battles to be fought against roving bands of brigands, dragons, plague and hunger.</p>
                      <p class="descriere"> <b>R3:</b> There are bazaars to visit to purchase supplies and assistants for the quest. There are uncharted territories to get lost in and tombs and ruins to plunder. </p>
                        <p class="descriere"> <b>R4:</b> And there is a mighty army to be raised before the player can lay siege to the tower and fight either to glorious victory or crushing defeat.</p>
                  </div>
     </div>
  </div>


    </body>
    </html>