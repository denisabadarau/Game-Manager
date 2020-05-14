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
          <div class="textMiddle"> BIOLOGY</div>    
        </div> 

    </div>
    <br>
    <br>
    
    <br>
    <br>



    <div class="row">
      <div class="column">
            <img src="../images/wingspan.png" >
          <div class="desc"><b>Wingspan</b> is a card-driven, medium-weight, engine-building board game in which players compete to attract birds to their wildlife reserves. 
            <p><a class="button" href="#popup1">MORE INFO</a></p>  
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='2' AND id_game='1'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="1">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="1">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='1'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
          </div>
        </div>
   

        <div class="column" >
      <img src="../images/blinded.jpg"   >
      <div class="desc"><b>Blinded by Science</b> is for people who understand the meaning of deoxyribonucleic acid. If you're a trivia buff and science is your thing, then this game is probably in your DNA.
        <p><a class="button" href="#popup2">MORE INFO</a></p>
        <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='2'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="2">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="2">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='2'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
      </div>
        </div>
     
        <div class="column">
      <img src="../images/cytosisjpg.jpg" >
    <div class="desc"><b>Cytosis: A Cell Building</b> Game is a worker placement game that takes place inside a human cell.
      <p><a class="button" href="#popup3">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='3'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="3">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="3">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='3'";
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
      <img src="../images/evo1.jpg"  >
    <div class="desc"><b>In Evo</b> you travel the wild open spaces of Kumgath with your mounts, you will use your knowledge of biology to help them adapt and succeed against both the hostile and changing climate and other competing species.
    <p><a class="button" href="#popup4">MORE INFO</a></p>
    <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='4'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="4">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="4">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='4'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
  </div>
        </div>

        <div class="column">
        <img src="../images/mads.jpg"  >
      <div class="desc">Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the <b>Mad Science Foundation</b> was created. 
      <p><a class="button" href="#popup5">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='5'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="5">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="5">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='5'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>    
    </div>
        </div>
  
        <div class="column">
      <img src="../images/wonderBun.jpg"  >
    <div class="desc">In <b> Wonders of Science</b>, the players take turns rolling the die and asking each other scientific questions from the cards. If a question is answered correctly, the card is won; if answered incorrectly, the card is returned to the bottom of the pile.
      <p><a class="button" href="#popup6">MORE INFO</a></p>
      <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='6'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="6">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">

                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="6">
                <input type="hidden" id="id_pagina" name="id_pagina" value="1">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru  joc
            $sql="SELECT * FROM likes WHERE id_game='6'";
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
              <p class="titleGame"> WINGSPAN</p>

              <div class="row">
                <div class="column">
                      <img src="../images/wingspan1.jpg" >
                  </div>
             
                  <div class="column" >
                <img src="../images/wingspan2.jpg"   >
                  </div>
               
                  <div class="column">
                <img src="../images/wingspan4.jpg" >
                  </div>
                </div>
          
              
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 1-5</p>
                <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#ff3333" >DIFFICULTY:</b> medium </p>
                <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b>40-70 min</p>
                <p class="descriere" style="text-align: center;"> <b style="font-family: Family-Guy; color:#ff3333" >AGE:</b> 8+</p>
                     <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                    <p class="descriere"> Wingspan is a competitive, medium-weight, card-driven, engine-building board game from Stonemaier Games.
                       You are bird enthusiasts—researchers, bird watchers, ornithologists, and collectors—seeking to discover and attract the best birds to your network of wildlife preserves. Each bird extends a chain of powerful combinations in one of your habitats (actions). </p>
                    <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                    <p class="descriere"> <b>R1 :</b> Players can take a limited number of four types of action each round: drawing new birds, placing birds from their hand into their habitat, collecting food, and laying eggs, which have to be spent in order to play the birds</p>
                    <p class="descriere"> <b>R2:</b>The strength of each action depends on how many cards are already in that habitat, and additional bonus actions are activated by the birds which are already in the habitat which represents that action. </p>
                    <p class="descriere"> <b>R3:</b>In addition to putting birds into their habitats, players score points for objectives achieved during each round and throughout the whole game, eggs accumulated, and food and cards stored on other cards, which represent food collection and predation by a player's birds</p>
                    <p class="descriere"> <b>R4:</b>The winner is the player with the most points after 4 rounds.</p>
                    </div>
       </div>
    </div>


    <div id="popup2" class="overlay">
      <div class="popup">
      <a class="close" href="#">&times;</a>
      <div class="content">
              <p class="titleGame"> BLINDED BY SCIENCE</p>

              <div class="row">
                <div class="column">
                      <img src="../images/blinded3.jpg" >
                  </div>
             
                  <div class="column" >
                <img src="../images/blinded2.jpg"   >
                  </div>
               
                  <div class="column">
                <img src="../images/blinded1.jpeg" >
                  </div>
                </div>
              
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b>2+ </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY: </b>medium </p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY: </b>30-50 min</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b>14+</p>
                <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                    <p class="descriere"> Blinded by Science is for people who understand the meaning of deoxyribonucleic acid.  Curie, Darwin, Galileo, Tesla, Turing...if these are some of your heroes, then this game is for you! Each card covers a different scientific subject, and includes three questions with increasing degrees of difficulty. If you're a trivia buff and science is your thing, then this game is probably in your DNA.</p>
                    <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                    <p class="descriere">  <b>R1: </b>Players answer science-based trivia questions for points. </p>
                    <p class="descriere">  <b>R2: </b>Each card covers a different scientific subject and has three questions with increasing degrees of difficulty. </p>
                    <p class="descriere">  <b>R3: </b>Once a predetermined number of cards have been read, highest score wins. </p>
                    </div>
       </div>
    </div>

    <div id="popup3" class="overlay">
      <div class="popup">
      <a class="close" href="#">&times;</a>
      <div class="content">
              <p class="titleGame">CYTOSIS</p>
              <div class="row">
                <div class="column">
                      <img src="../images/cytosis1.jpg" >
                  </div>
             
                  <div class="column" >
                <img src="../images/cytosis2.jpg"   >
                  </div>
               
                  <div class="column">
                <img src="../images/cytosis3.png" >
                  </div>
                </div>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
                <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
                  <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
                <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                    <p class="descriere"> Cytosis: A Cell Building Game is a worker placement game that takes place inside a human cell. Players start out with a number of workers and on a player’s turn, they will place one of their workers in any available location within that cell. Some of the locations provide players with resources (e.g., mRNA, ATP); some with actions (e.g., convert resources, collect cards). Resources are used to build enzymes, hormones and/or receptors, which score Health Points. The player with the most Health Points at the end of the game wins!</p>
                    <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                    <p class="descriere">   <b>R1: </b>Players must build up their antibodies for each viral strain to help them defend against the attacking viruses!</p>
                      <p class="descriere">   <b>R2: </b>At the beginning of the game, each character will select a color and take the pieces of the color that they have selected.</p>
                        <p class="descriere">   <b>R3: </b>The game board is laid out and the players will place one of their marker tokens onto the 0 space of the scoring track.</p>
                          <p class="descriere">   <b>R4: </b>The Cell Component and Event cards are separated by type, shuffled, and placed face down closeby to form draw piles. </p>
                    </div>
       </div>
    </div>

<div id="popup4" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame"> EVO</p>
          
          <div class="row">
            <div class="column">
                  <img src="../images/evo2.png" >
              </div>
         
              <div class="column" >
            <img src="../images/evo4.jpg"  >
              </div>
           
              <div class="column">
            <img src="../images/evo3.jpg" >
              </div>
            </div>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS: </b> 2-5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2.50/5 </p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60-90 min</p>
              <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE: </b> 10 </p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                <p class="descriere">The simple strategy game at the core of Evo is made more interesting by the constantly changing climate. Positions which can be advantageous in one turn are often deadly a few turns later, so unlike many games where a winning player can come to dominate the game, the balance of power shifts frequently.
                </p>
                <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                <p class="descriere"> <b>Initiative :</b>  the order players will act in is determined by the number of "tail" mutations they have. Ties are resolved by roll-offs on a six-sided die.</p>
                <p class="descriere"> <b>Climate:</b>a six-sided die is rolled to determine how the climate changes. Normally it proceeds in a cycle from hot to cold and back again, but on a 5 it stays the same, and on a 6 it moves in the opposite direction to the expected one. </p>
                <p class="descriere"> <b>Movement and Combat:</b>  players can move their dinos. The more "leg" mutations they have, the further they can move their dinos. If they attempt to move into a space occupied by another dino, they must fight.</p>
                <p class="descriere"> <b>Birth:</b> players can add one new dino to the board for each "egg" mutation they possess, next to their existing dinos.</p>
                <p class="descriere"> <b>Survival and Mutation:</b>inos die off depending on climate and terrain. "Parasol" and "Fur" mutations allow them to withstand heat and cold, respectively. The players then bid for new mutations; their (successful) bids are subtracted from their score.</p>
                <p class="descriere"> <b>Meteor and Evolution:</b> In later turns, there is a chance that a Meteor strikes the island, ending the game. In earlier turns, and in later turns in which the game does not end, the players gain one point for each dino of their colour on the board.</p>
   </div>
   </div>
</div>
      
  

<div id="popup5" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame">MAD SCIENCE FOUNDATION</p>
          <div class="row">
            <div class="column">
                  <img src="../images/mad3.jpg" >
              </div>
         
              <div class="column" >
            <img src="../images/mad1.png"  >
              </div>
           
              <div class="column">
            <img src="../images/mad2.png" >
              </div>
            </div>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4 </p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30-45 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 15+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                <p class="descriere"> Throughout the centuries, mad scientists have always encountered the same problem of very limited access to the dangerous resources they require. To solve this problem, the Mad Science Foundation was created. Now these "misunderstood geniuses" can finally get the access they need to the four vital building blocks of mad science: Lasers, Dark Matter, Cryptomium, and Sharks.</p>
                <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                <p class="descriere"> <b>R1:</b>  In the quest for infamy, directors will be bribed, resources will be reallocated, spies will be dispatched, inventions will be sabotaged, and big, ominous buttons will be pressed with catastrophic results.  </p>
                <p class="descriere"> <b>R2:</b> Each round, one player controls the Crooked Director for that round. They then separate the available commodities into piles to be drafted. </p>
                <p class="descriere"> <b>R3:</b>  It's up to the scientist controlling the Director to determine the value of whatever resources are available and separate them into piles.</p>
                <p class="descriere"> <b>R4:</b> Players then take turns selecting which pile of goodies to grab, with the Director's controller choosing last.</p>
                </div>
   </div>
</div>

<div id="popup6" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame">WONDERS OF SCIENCE </p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-8</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 30 min</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 7+</p>
          <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                <p class="descriere"> Professor Noggin takes Science out of the classroom and into this entertaining trivia game. See what you know, and learn surprising new facts as you go. Wonders of Science will create science wonderment for all who play.Players take turns rolling the die and asking each other questions from the cards. If a question is answered correctly, the card is won; if answered incorrectly, the card is returned to the bottom of the pile. The player with the most cards at the end of the game is the winner. Players have a few chances throughout the game to get a Noggin's Choice card. This means they can choose a card from any other player, and get ahead. Remember the correct answers. If a question is not answered correctly the first time, that question will come up again.</p>
                </div>
   </div>
</div>




    </body>
    </html>