<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
  <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/boardgames.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/paginacategorie.css" rel="stylesheet">
    <link rel = "stylesheet" type="text/css" href = "../css/incearca.css">
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Game Manager </title>
<input type="button" class="buttonFeatures" style="margin-left:90%" value="AdminPage" onclick="location.href='admin.php'">
    <!-- Trigger/Open The Modal -->
    <input type="button" class="buttonFeatures" id="myBtn"  style="margin-left:90%" value="My Account">
<input type="button" class="buttonFeatures" style="margin-left:90%" value="Documentation" onclick="location.href='logout.inc.php'">
<input type="button" class="buttonFeatures" style="margin-left:91%" value="Logout" onclick="location.href='logout.inc.php'">

</head>
<body>
    <?php
    include 'menu.php';
    ?>

    <div class="row">
    <div class="columnFOUR">
    <div class="titleandicon">
    <img src="../images/icon1.jpg">
    <p class="titleColumnFour">FIND NEW GAMES</p>
</div>
    <p class="infoColumnFour">Browse trough all sort of games, read game's description and enter into the word of games.</p>
    <input type="button" class="buttonFeatures" value="boardgames" onclick="location.href='boardgames.php'">
    <input type="button" class="buttonFeatures" value="onlinegames" onclick="location.href='onlinegames.php'">
  </div>
  <div class="columnFOUR" >
    <div class="titleandicon">
  <img src="../images/icon2.jpg">
  <p class="titleColumnFour">JOIN A TOURNAMENT</p>
</div>
  <p class="infoColumnFour">Complete the questionnaire to create a new tournament or join the tournaments already created.</p>
  <input type="button" class="buttonBattles" value="battles" onclick="location.href='battles.php'">
  </div>
  <div class="columnFOUR" >
  <div class="titleandicon">
  <img src="../images/icon3.jpg">
  <p class="titleColumnFour">LIKE YOUR FAVS GAMES</p>
</div>
  <p class="infoColumnFour">Like your favorite games to reach the top as high as possible. Voice your opinions!</p>
  <input type="button" class="buttonBattles" value="go to top" onclick="location.href='top.php'">
  
  </div>
  <div class="columnFOUR" >
  <div class="titleandicon">
  <img src="../images/icon4.jpg">
  <p class="titleColumnFour">HELP OTHER GAMER</p>
</div>
  <p class="infoColumnFour">Write tips, strategies and house rules to help others take their game to a new level. All in the tournament comments session.</p>
  <input type="button" class="buttonBattles" value="comments" onclick="location.href='battles.php'">  
</div>
</div>

<div class="row">
    <div class="columnTWO">
  <p class="titleColumnFour">BOARD GAMES</p>
  <div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=biology'"> 
  <img src="../images/board1.jpg">
  <p class="titleColumnTwo">BIOLOGY</p>
</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=educational'"> 
  <img src="../images/board2.jpg">
  <p class="titleColumnTwo">EDUCATIONAL</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=fantasy'"> 
  <img src="../images/board3.jpg">
  <p class="titleColumnTwo">FANTASY</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=historical'"> 
  <img src="../images/board4.jpg">
  <p class="titleColumnTwo">HISTORICAL</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=horror'"> 
  <img src="../images/board5.jpg">
  <p class="titleColumnTwo">HORROR</p>

   </div>
   </div>

 <div class="columnTWO">
  <p class="titleColumnFour">ONLINE GAMES</p>
  <div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=action'"> 
  <img src="../images/online1.jpg">
  <p class="titleColumnTwo">ACTION</p>
</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=adventure'"> 
  <img src="../images/online2.jpg">
  <p class="titleColumnTwo">ADVENTURE</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=sport'"> 
  <img src="../images/online3.jpg">
  <p class="titleColumnTwo">SPORT</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=strategy'"> 
  <img src="../images/online4.jpg">
  <p class="titleColumnTwo">STRATEGY</p>

</div>
<div class="divColumnTwo" onclick="location.href='pagina-categorie.php?c=vehicles'"> 
  <img src="../images/online5.jpg">
  <p class="titleColumnTwo">VEHICLES</p>

   </div>
   </div>

</div>
    
<a href="https://www.facebook.com/vlad.afrasinei" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/?gl=RO&hl=ro" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/mirela.adamache/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>