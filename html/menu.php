 <?php
  echo $_SESSION['username'];
?>
<a href="meniu.html"> <img src="../images/logomainalb.png"  style="width:300px;height:100px;margin-left:370px;"> </a>
        <p class="title">-Game Manager-</p>
        <ul>
          <li><a href="meniu.php">Home</a></li>
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
                  <li><a href="statistics.php">Statistics</a></li>
                  <li><a href="battles.php">Battles</a></li>
                  <li><a href="top.php">Top</a></li>
          </li>
      </ul>
