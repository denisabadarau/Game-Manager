<?php
include '../php/conectare.php';
include '../php/view.php';
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <?php
      include 'caruselBoardGames.html';
      ?>

<div class="dropdown">
  <button class="dropbtn">Select category</button>
  <div class="dropdown-content">
     <?php
      $db=deschideConexiunea();
      $sql = "SELECT DISTINCT type FROM games WHERE category='board'";
      $result = $db->query($sql);
      if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
        echo
        '<a href="pagina-categorie.php?c='.$row['type'].'">'.$row['type'].'</a>';
        }
      }
      ?>
    </div>
</div>


    <p class="titlelogo">Most popular games</p>

    <?php
  $db=deschideConexiunea();
  $sql = "SELECT id,minidescriere FROM games where category='board' order by likes DESC limit 9";
  $result = $db->query($sql);
  $rowno='0';
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $sql2 = "SELECT img1 FROM images WHERE id_game ='".$row['id']."'";
      $sth = $db->query($sql2);
      $result2=mysqli_fetch_array($sth);
      $rowno+=1;
      if($rowno%3==1)
      {
        echo
      '<div class="row">
      <div class="column">
      <a href="pagina-joc.php?id='.$row["id"] .'">
      <img src="../images/'.$result2['img1'].'.jpg"/>
      </a>
      <div class="desc">'.$row['minidescriere'].'</div>
      </div>';
      }
      else
      if($rowno%3==2)
      {
        echo
      '
      <div class="column">
      <a href="pagina-joc.php?id='.$row["id"] .'">
      <img src="../images/'.$result2['img1'].'.jpg"/>
      </a>
      <div class="desc">'.$row['minidescriere'].'</div>
      
      </div>';
      }
      else
        if($rowno%3==0)
      {
      echo
      '
      <div class="column">
      <a href="pagina-joc.php?id='.$row["id"] .'">
      <img src="../images/'.$result2['img1'].'.jpg"/>
      </a>
      <div class="desc">'.$row['minidescriere'].'</div>
      </div>
      </div>';
      }
    }
  }
?>
<a href="https://www.facebook.com/vlad.afrasinei" class="fa fa-facebook"></a>
<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/?gl=RO&hl=ro" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/mirela.adamache/?hl=en" class="fa fa-instagram"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>

