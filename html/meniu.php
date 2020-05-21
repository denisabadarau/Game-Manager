<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniuStyle.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> My page </title>
</head>
<body>



    <div class="logout-box">  
      <input type="submit" name="submit" value="Logout">
      <a href = "logout.inc.php"></a>
    </div>



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