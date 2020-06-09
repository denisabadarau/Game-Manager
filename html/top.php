<?php
session_start();
?>

<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <script type="text/javascript" src="../js/gettopjs.js"></script>
    <script type="text/javascript" src="../js/gamestypejs.js"></script>
    <script type="text/javascript" src="../js/getTopUsers.js"></script>
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
<div class="containerSelect">
<form>
<label>TOP AFTER: </label>
<select id="type" >
  <option value="">--Please choose a type--</option>
  <option value="likes">Likes</option>
  <option value="views">Views</option>
</select>

<label>CATEGORY:</label>
<select name="category" onchange="showType(this.value)">
          <option value="">--Please choose a category--</option>
          <option value="board">Board Game</option>
          <option value="online">Online Game</option>
          <option value="all">All Games</option>
</select>

<label>TYPE:</label>
<select id="newSelect" onchange="showTop(this.value)">
<option value="">--Please choose a type--</option>
</select>
</form>
</div>
<br>

<input id="buttonTop" class="buttonTOP" value="TOP USERS" onclick="getTopUsers()">

<div id="top" class="top">
 <?php
  include 'generaltop.php';
 ?>
</div>


</body>
</html>