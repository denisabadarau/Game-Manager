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
    <head>
        <link href="../css/meniuStyle.css" rel="stylesheet">
        <link href="../css/boardGamesStyle.css" rel="stylesheet">
        <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
        <link href="../css/modalStyle.css" rel="stylesheet">
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <div class="textMiddle"> EDUCATIONAL</div>    
        </div> 
</div>

   

    <div class="row">
      <div class="column">
          <img src="../images/keep.jpg"  >
        <div class="desc"><b>Keep Cool</b>can be classified as both a serious game and a global warming game. In Keep Cool, up to six players representing the world's countries compete to balance their own economic interests and the world's climate in a game of negotiation
          <p><a class="button" href="#popup1">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='7'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="7">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="7">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='7'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
        </div>
       </div>
      

  <div class="column">
  <img src="../images/ungame.jpg" >
<div class="desc"><b>The Ungame</b> is a non-competitive learning/communication board game . It is a game of conversation which "fosters listening skills as well as self-expression". 
<p><a class="button" href="#popup2">MORE INFO</a></p>  
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='8'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="8">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="8">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='8'";
            $result=$conectare->query($sql);
            echo '
            <p class ="descriere" style="text-align: center;" ><b> LIKES('. $result->num_rows . ')</b> </p>
            ';

            ?>
          </div>
    </div>

    <br>
      <br>
      <br>
      
       <div class="column">
        <img src="../images/kolejka.jpg" >
      <div class="desc"><b>Kolejka</b> was designed to teach young generations about the hardships under communism (1945–1989), particularly the difficulty of acquiring consumer goods in the shortage economy.The game has been described as inspired by Monopoly.
      <p><a class="button" href="#popup3">MORE INFO</a></p>
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='9'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="9">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="9">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='9'";
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
      <img src="../images/equate.jpg">
    <div class="desc"><b>Equate</b> is a board game where players score points by forming equations on a 19x19 game board. Equations appear across and down in a crossword fashion and must be mathematically correct. It is similar to Scrabble except players use digits and mathematical operators instead of letters. 
    <p><a class="button" href="#popup4">MORE INFO</a></p> 
            <?php
            $conectare=deschideConexiunea();
            $sql="SELECT * FROM likes WHERE id_user='1' AND id_game='10'";
            $result=$conectare->query($sql);
            if(!$result->num_rows){
              //daca nu a dat inca like, afisez butonul de like si trimit datele catre functia like
             echo'
              <form action="../php/like.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="10">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Like">
              </form>
              ' ;
            }else{
              //a dat like, afisez butonul de dislike si trimit datele catre functia dislike
              echo'
              <form action="../php/dislike.php" method="post">
                <input type="hidden" id="id_game" name="id_game" value="10">
                <input type="hidden" id="id_pagina" name="id_pagina" value="2">
                <input type="submit" class="button" name="trimite" value="Dislike">
              </form>
              ' ;
            }

            //afisez numarul de like uri pentru primul joc
            $sql="SELECT * FROM likes WHERE id_game='10'";
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
          <p class="titleGame">KEEP COOL</p>
          <div class="row">
            <div class="column">
                  <img src="../images/keep1.jpg" >
              </div>
         
              <div class="column" >
            <img src="../images/keep2.jpg"   >
              </div>
           
              <div class="column">
            <img src="../images/keep3.jpg" >
              </div>
            </div>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 3-6 </p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 40-50 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 9+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                <p class="descriere">Keep Cool is a board game created by Klaus Eisenack and Gerhard Petschel-Held of the Potsdam Institute for Climate Impact Research and published by the German company Spieltrieb in November 2004. The game can be classified as both a serious game and a global warming game. In Keep Cool, up to six players representing the world's countries compete to balance their own economic interests and the world's climate in a game of negotiation. The goal of the game as stated by the authors is to "promote the general knowledge on climate change and the understanding of difficulties and obstacles, and "to make it available for a board game and still retain the major elements and processes." Empirical studies have shown that Keep Cool can facilitate experiential learning about the difficulties of international climate politics. </p>
                <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                <p class="descriere"> <b>R1:</b> Each of the countries has a distinct starting position in the game and some have special abilities/bargaining chips which can greatly affect negotiation. </p>
                <p class="descriere"> <b>R2:</b> The United States begins the game with the most factories on the board (five black and one green) and always goes first.</p>
                <p class="descriere"> <b>R3:</b>  Europe begins with three black factories and one green, and the Tiger Countries begin with two black. </p>
                <p class="descriere"> <b>R4:</b> The Former Soviet Union begins the game with one of each kind of factory, but has the special prerogative to demand one carbonchip from any player at the beginning of their turn.</p>
                <p class="descriere"><b>R5:</b>  OPEC and the Developing Countries only start with one black factory each, but they both have special attributes which they can use to their advantage.</p>
                <p class="descriere"><b>R6:</b>  OPEC receives an additional carbonchip as income for every four black factories on the game board.</p>
                <p class="descriere"><b>R7:</b>  The Developing Countries can either add or remove up to three carbonchips to/from the carbometer from/to the chip pool.</p>  
              </div>
   </div>
</div>

<div id="popup2" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame">UNGAME</p>
          <div class="row">
            <div class="column">
                  <img src="../images/ungame1.jpg" >
              </div>
         
              <div class="column" >
            <img src="../images/ungame2.jpg">
              </div>
           
              <div class="column">
            <img src="../images/ungame3.jpg" >
              </div>
            </div>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-6</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 1/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 5+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
            <p class="descriere"> The UNGAME was designed for YOU to experience the fun of learning how to communicate more effectively. As you share thoughts, ideas and feelings, you will develop a deeper understanding of others and of yourself. Each person's ability to respond and become involved will improve as he continues to TELL IT LIKE IT IS. You'll find the UNGAME both entertaining AND educational. </p>
                <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                <p class="descriere">  <b>R1 :</b> When your piece lands on a space, you do what that space says, usually draw a card or answer the question on the board. </p>
                  <p class="descriere">  <b>R2:</b> The goal of the game is to connect to the other players on a deeper level. </p>
                    <p class="descriere">  <b>R3:</b> Only the individual players can determine to what extent they have won.</p>
                      <p class="descriere"> <b>R4:</b> Themes for the game and depth of questions shift with varying decks of cards and expansions.</p>
                </div>
   </div>
</div>

<div id="popup3" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame">KOLEJKA </p>
          <div class="row">
            <div class="column">
                  <img src="../images/kolejka1.jpeg" >
              </div>
         
              <div class="column" >
            <img src="../images/kolejka2.png"   >
              </div>
           
              <div class="column">
            <img src="../images/kolejka3.jpg" >
              </div>
            </div>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 60 min</p>
            <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 12+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
            <p class="descriere"> The board game Kolejka (a.k.a. Queue) tells a story of everyday life in Poland at the tail-end of the Communist era. The players' task appears to be simple: They have to send their family members out to various stores on the game board to buy all the items on their shopping list. The problem is, however, that the shelves in the five neighborhood stores are empty. </p>
                <p class="subTitleGame" style="color:  #ffcc00">RULES:</p>
                <p class="descriere"> <b>R1 :</b> The players line up their pawns in front of the shops without knowing which shop will have a delivery. </p>
                  <p class="descriere">  <b>R2:</b> To get ahead, the people in the queue use a range of queuing cards, such as "Mother carrying small child", "This is not your place, sir", or "Under-the-counter goods". But they have to watch out for "Closed for stocktaking", "Delivery error", and for the black pawns – the speculators – standing in the queue. </p>
                    <p class="descriere">  <b>R3:</b>  Only those players who make the best use of the queuing cards in their hand will come home with full shopping bags.</p>
                </div>
   </div>
</div>

<div id="popup4" class="overlay">
  <div class="popup">
  <a class="close" href="#">&times;</a>
  <div class="content">
          <p class="titleGame"> EQUATE</p>
          <div class="row">
            <div class="column">
                  <img src="../images/equate1.jpg" >
              </div>
         
              <div class="column" >
            <img src="../images/equate2.jpg"   >
              </div>
           
              <div class="column">
            <img src="../images/equate3.GIF" >
              </div>
            </div>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b> 2-4</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b> 2/5</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b> 120 min</p>
          <p class ="descriere" style="text-align: center;" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> 8+</p>
            <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
            <p class="descriere">  "Scrabble with math" is how this game is generally described, and the description is apt. The board is much like a Scrabble board, including spaces equivalent to "double-word score" and "triple-letter score". The difference is that, instead of placing words formed of letters, players of Equate place equations formed of numbers and symbols on the board. The beginners game (consisting mostly of addition and subtraction of integers) is pretty simple, but the standard game, bringing in multiplication, division, and fractions, can be something of a brain-burner. </p>
                </div>
   </div>
</div>



    
    </body>
    </html>