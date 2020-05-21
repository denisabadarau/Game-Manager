<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniuStyle.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
     <link href="../css/logoutStyle.css" rel="stylesheet">
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
    
    <?php
    include 'menu.php';
    ?>
      
      <br>
    <div class="containerSelect">
      <form action="#" method="post">
          <label>GAMES: </label>
        <select name="game">
          <option value="">--Please choose an option--</option>
          <option value="Board">Board Game</option>
          <option value="Online">Online Game</option>
        </select>
      <input class="button" type="submit" name="submit" value="View Slide" style="font-size:13px"/>
     </form>
</div>
      
      <?php
       if(isset($_POST['submit'])){
        $selected_val = $_POST['game'];
        if($selected_val == "Board")
          include 'caruselBoardGames.html';
       else if($selected_val == "Online")
          include 'caruselOnlineGames.html';
       }
      ?>
<a href="https://www.facebook.com/vlad.afrasinei" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/?gl=RO&hl=ro" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/mirela.adamache/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
</body>
</html>