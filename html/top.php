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
    <link href="../css/statisticsStyle.css" rel="stylesheet">
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
          <option value="All">All Games</option>
        </select>
      <input class="button" type="submit" name="submit" value="Get the top" style="font-size:13px"/>
     </form>
</div>

     <?php
       if(isset($_POST['submit'])){
       $selected_val = $_POST['game'];  // Storing Selected Value In Variable
       if($selected_val == "All")
       {
        //afisez topul pe ambele categorii
        $conectare=deschideConexiunea();
        $sql="SELECT UPPER(name),category FROM games WHERE id IN (SELECT id_game FROM likes GROUP BY id_game ORDER BY count(id_game) DESC)";
        $result=$conectare->query($sql);
        if ($result->num_rows > 0) {
            $rowNo='1';
            // output data of each row
            echo'<p class="title"> TOP FOR ALL GAMES </p>';
            while($row = $result->fetch_assoc()) {
              echo 
              '<p class ="descriere" style="text-align: center;" >'.
              $rowNo.'. '. $row["UPPER(name)"].' | category: '.$row['category'].'<br>
              </p>
              ';
              $rowNo+=1;
            }
          } 
          else {
            echo "0 results";
          }
        }

        else if($selected_val == "Board")
       {
        //afisez topul pe categoria board
        $conectare=deschideConexiunea();
        $sql="SELECT UPPER(name) FROM games WHERE id IN (SELECT id_game FROM likes GROUP BY id_game ORDER BY count(id_game) DESC) and category='board'";
        $result=$conectare->query($sql);
        if ($result->num_rows > 0) {
            $rowNo='1';
            echo'<p class="title"> TOP BOARD GAMES </p>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo 
              '
              <p class ="descriere" style="text-align: center;" >'.
              $rowNo.'. '. $row["UPPER(name)"].'<br>
              </p>
              ';
              $rowNo+=1;
            }
          } 
          else {
            echo "0 results";
          }
        }

        else if($selected_val == "Online")
       {
        //afisez topul pe categoria online
        $conectare=deschideConexiunea();
        $sql="SELECT UPPER(name) FROM games WHERE id IN (SELECT id_game FROM likes GROUP BY id_game ORDER BY count(id_game) DESC) and category='online'";
        $result=$conectare->query($sql);
        if ($result->num_rows > 0) {
            $rowNo='1';
            echo'<p class="title"> TOP ONLINE GAMES </p>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo 
              '
              <p class ="descriere" style="text-align: center;" >'.
              $rowNo.'. '. $row["UPPER(name)"].'<br>
              </p>
              ';
              $rowNo+=1;
            }
          } 
          else {
            echo "0 results";
          }
        }


       }
     ?>


        </body>
    </html>