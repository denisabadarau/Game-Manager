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
          <div class="textMiddle"> HORROR</div>    
        </div> 
</div>

    <br>
    <br>
    <div class="row">
      <div class="column">
          <img src="../images/nycto.jpg" >
        <div class="desc">One of the most unique games , <b>Nyctophobia</b> is a 1vMany game that will have a group of players trying to survive as a maniacal predator chases them in a pitch Black Forest. The catch is that the survivors must play the game wearing blackout sunglasses. 
        <p><a class="button" href="#popup1">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='22'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="22">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="22">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='22'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
            </div>

            <div class="column">
              <img src="../images/betrayl.jpg">
            <div class="desc"><b>Betrayal at House on the Hill </b> starts out as a fully cooperative game with players exploring an old mansion. At some point during the game, one of the players becomes a traitor (who or when is unknown at the start) and will turn on their former teammates. The haunts, as they are called, are all fairly unique with each having its own story and goals for both teams.
            <p><a class="button" href="#popup2">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='23'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="23">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="23">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='23'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
                </div>
                      </div>

        <div class="column">
    <img src="../images/zombicide.jpg"  >
  <div class="desc">If you want to experience hordes of raging undead, then <b>Zombicide</b> is your drink of choice. It’s not higher on the list because I don’t get a huge horror vibe from it. Characters are fairly powerful and it’s really not until late in the game, when rounds are spawning undead in large masses, that the tension finally starts to appear. 
  <p><a class="button" href="#popup3">MORE INFO</a></p>
  <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='24'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="24">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="24">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='24'";
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
        <img src="../images/ghosts.jpg" >
      <div class="desc"><b>Ghost </b> takes place on a 6×6 square grid representing a haunted castle. Both players are given eight ghosts, of which four are good (represented by a blue dot) and four are evil (represented by a red dot). The ghosts are assembled in two rows of four ghosts at the player's own edge of the board. At each of the four corners is an exit from the castle.
      <p><a class="button" href="#popup4">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='25'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="25">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="25">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='25'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
            </div>

      <div class="column">
        <img src="../images/dead.png">
      <div class="desc"><b>Dead of winter </b> puts players in a small colony of survivors who must work together towards group victory, but at the same time, players must also complete a personal objective to win as individuals. Players often have to decide what’s best for the colony and best for themselves, which creates high-stakes gameplay.
      <p><a class="button" href="#popup5">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='26'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="26">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="26">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='26'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
            </div>


      <div class="column">
        <img src="../images/mansions.png">
      <div class="desc"> In <b>Mansions of Madness</b>, players take on the role of investigators trying to get the bottom of strange happenings in the towns of Innsmouth and Arkham. This edition of the game is now fully cooperative, with the Cthulhu Mythos monsters being controlled by an integrated app.  
      <p><a class="button" href="#popup6">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='27'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="27">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="27">
                <input type="hidden" id="id_pagina" name="id_pagina" value="5">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='27'";
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
                    <p class="titleGame"> NYCTOPHOBIA</p>
                    <div class="row">
                      <div class="column">
                            <img src="../images/nycto1.jpg" >
                        </div>
                   
                        <div class="column" >
                      <img src="../images/nycto2.jpg"   >
                        </div>
                     
                        <div class="column">
                      <img src="../images/nycto3.jpg" >
                        </div>
                      </div>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1-4</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.5/5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 45-60</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 8+</p>
                      <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> Welcome to the experiential table top game that is going to redefine what it means to play a game. Nyctophobia, which means "fear of the dark", is a cooperative game of survival in which up to four players must work together to escape a maniacal predator chasing them in a pitch-black forest. But there's a wrinkle: Would-be survivors play the game with blackout glasses. Players cannot see the board and have to rely on touch to navigate their way to safety. So, are you afraid of the dark?</p>
                          <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                          <p class="descriere"> <b>R1 :</b> All but one of the players play the game completely unable to see the board. </p>
                          <p class="descriere"> <b>R2:</b>  The blinded players make up the Hunted team. </p>
                          <p class="descriere"> <b>R3:</b> They are tasked with finding the car space on the board and surviving until the police arrive to rescue them. </p>
                          <p class="descriere"> <b>R4:</b> The sighted player is the Hunter, who is tasked with chasing down the Hunted and reducing one of the Hunted to zero health before the police arrive.</p>
                          </div>
             </div>
          </div>
          
          
          
          <div id="popup2" class="overlay">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                    <p class="titleGame"> BETRAYAL AT HOUSE ON THE HILL</p>
                    <div class="row">
                      <div class="column">
                            <img src="../images/betrayl1.jpg" >
                        </div>
                   
                        <div class="column" >
                      <img src="../images/betrayl2.jpg"   >
                        </div>
                     
                        <div class="column">
                      <img src="../images/betrayl3.webp" >
                        </div>
                      </div>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 3/5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 180 min</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 12+</p>
                      <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> Betrayal at House on the Hill quickly builds suspense and excitement as players explore a haunted mansion of their own design, encountering spirits and frightening omens that foretell their fate. With an estimated one hour playing time, Betrayal at House on the Hill is ideal for parties, family gatherings or casual fun with friends.</p>
                          <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                          <p class="descriere"> <b>R1 :</b>  The game is designed for three to six people, each of whom plays one of six possible characters.</p>
                          <p class="descriere"> <b>R2:</b> Secretly, one of the characters betrays the rest of the party, and the innocent members of the party must defeat the traitor in their midst before it’s too late!</p>
                          <p class="descriere"> <b>R3:</b> Betrayal at House on the Hill will appeal to any game player who enjoys a fun, suspenseful, and strategic game.</p>
                          <p class="descriere"> <b>R4:</b> Betrayal at House on the Hill includes detailed game pieces, including character cards, pre-painted plastic figures, and special tokens, all of which help create a spooky atmosphere and streamline game play.</p>
                          </div>
             </div>
          </div>
          
          <div id="popup3" class="overlay">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                    <p class="titleGame"> ZOMBICIDE</p>
                    <div class="row">
                      <div class="column">
                            <img src="../images/zombicide1.png" >
                        </div>
                   
                        <div class="column" >
                      <img src="../images/zombicide2.jpg"   >
                        </div>
                     
                        <div class="column">
                      <img src="../images/zombicide3.jpg" >
                        </div>
                      </div>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 3/5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60 mi</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
                      <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> Zombicide is a collaborative game in which players take the role of a survivor – each with unique abilities – and harness both their skills and the power of teamwork against the hordes of unthinking undead! Zombies are predictable, stupid but deadly, controlled by simple rules and a deck of cards. Unfortunately for you, there are a LOT more zombies than you have bullet</p>
                          <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                          <p class="descriere"> <b>R1 :</b> Find weapons, kill zombies.</p>
                          <p class="descriere"> <b>R2:</b> The more zombies you kill, the more skilled you get; the more skilled you get, the more zombies appear.</p>
                          <p class="descriere"> <b>R3:</b> The only way out is zombicide!</p>
                          <p class="descriere"> <b>R4:</b> Play ten scenarios on different maps made from the included modular map tiles, download new scenarios from the designer's website, or create your own!</p>
                          </div>
             </div>
          </div>
          
          <div id="popup4" class="overlay">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                    <p class="titleGame"> GHOST </p>
                    <div class="row">
                      <div class="column">
                            <img src="../images/ghost1.jpg" >
                        </div>
                   
                        <div class="column" >
                      <img src="../images/ghost2.jpg"   >
                        </div>
                     
                        <div class="column">
                      <img src="../images/ghost3.jpg" >
                        </div>
                      </div>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
                      <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> The lightning fast shape and color recognition game that is sure to test the reflexes of kids, families and gamers alike. In Ghost Blitz, five wooden items sit on the table waiting to be caught: a white ghost, a green bottle, a cute grey mouse, a blue book, and a comfortable red chair. Each card in the deck shows pictures of two objects, with one or both objects colored the wrong way. With all players playing at the same time, someone reveals a card, then players grab for the "right" object – but which object is right?</p>
                          <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                          <p class="descriere"> <b>R1 :</b> If one object is colored correctly – say, a green bottle and a red mouse – then players need to grab that correctly colored object.</p>
                          <p class="descriere"> <b>R2:</b> If both objects are colored incorrectly – say, a green ghost and a red mouse – then you look for the object and color not represented among the four details shown. </p>
                          <p class="descriere"> <b>R3:</b> In this case you see green, red, ghost and mouse, so players need to grab the blue book.</p>
                          <p class="descriere"> <b>R4:</b> The first player to grab the correct object keeps the card, then reveals the next card from the deck. If a player grabs the wrong object, she must discard one card previously collected.</p>
                          <p class="descriere"> <b>R5:</b> Once the card deck runs out, the game ends and whoever has collected the most cards wins!</p>
                        </div>
             </div>
          </div>
          
          <div id="popup6" class="overlay">
            <div class="popup">
            <a class="close" href="#">&times;</a>
            <div class="content">
                    <p class="titleGame">MANSIONS OF MADNESS </p>
                    <div class="row">
                      <div class="column">
                            <img src="../images/mansions1.jpg" >
                        </div>
                   
                        <div class="column" >
                      <img src="../images/mansions2.jpg"   >
                        </div>
                     
                        <div class="column">
                      <img src="../images/mansions3.jpg" >
                        </div>
                      </div>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1-4</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 90 min</p>
                      <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 10+</p>
                      <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                      <p class="descriere"> Mansions of Madness: Second Edition is a fully cooperative, app-driven board game of horror and mystery for one to five players that takes place in the same universe as Eldritch Horror and Elder Sign. Let the immersive app guide you through the veiled streets of Innsmouth and the haunted corridors of Arkham's cursed mansions as you search for answers and respite. </p>
                          <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                          <p class="descriere"> <b>R1 :</b> Each game takes place within a pre-designed story that provides players with a unique map and several combinations of plot threads. </p>
                          <p class="descriere"> <b>R2:</b> These threads affect the monsters that investigators may encounter, the clues they need to find, and which climactic story ending they will ultimately experience.</p>
                          <p class="descriere"> <b>R3:</b> One player takes on the role of the keeper, controlling the monsters and other malicious powers within the story.</p>
                          <p class="descriere"> <b>R4:</b> The other players take on the roles of investigators, searching for answers while struggling to survive with their minds intact.</p>
                          </div>
             </div>
          </div>


    </body>
    </html>