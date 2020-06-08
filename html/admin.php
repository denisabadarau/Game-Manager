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
    <link href="../css/admin.css" rel="stylesheet">
    <link rel = "stylesheet" type="text/css" href = "../css/incearca.css">
    <script src="../js/giveadminuser.js"></script>
    <script src="../js/giveadminuserx.js"></script>
    <script src="../js/deleteuser.js"></script>
    <script src="../js/deleteuserx.js"></script>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> Game Manager </title>
<input type="button" class="buttonFeatures" style="margin-left:90%" value="AdminPage" onclick="location.href='admin.php'">
</head>
<body>
    <?php
    include 'menu.php';
    ?>
<div class="container">
            <img class="topImage" src="../images/blueEye.jpg">
            <div class="middleContainer">
              <div class="textMiddle">AdminPage</div>    
            </div> 
        </div>
<p class="title" style="margin-top:5%">Aceasta este o pagina de administrat site-ul</p>
<div class="containerSelect">
<form>
<label>ACTION:</label>
<select id="myselect" name="action" onchange="rezolvare()">
          <option value="">--Please choose an action--</option>
          <option value="deleteuser">Delete user</option>
          <option value="giveadminuser">Give admin to user</option>
          <option value="addnewgame">Add new game</option>
          <option value="deletegame">Delete game</option>
          <option value="changegametype">Change game type</option>
          <option value="changegamecategory">Change game category</option>
</select>
</form>
</div>
<div id="demo"> </div>
<script>
function rezolvare()
{
  var x = document.getElementById("myselect").value;
  if(x=="deleteuser")
  deleteuser();
  if(x=="giveadminuser")
  giveadminuser();
  if(x=="addnewgame")
  alert(x);
  if(x=="deletegame")
  alert(x);
  if(x=="changegametype")
  alert(x);
  if(x=="changegamecategory")
  alert(x);
}
</script>