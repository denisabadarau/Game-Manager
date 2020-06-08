<?php
include '../php/conectare.php';
include '../php/view.php';
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
<html>
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
    
<body>
    
    <script>
    function getValue(id_user,id_joc){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu"+id_joc).value=response;
            }
        }
    
        ajaxRequest.open("GET","valoare.php?id_user="+id_user+"&id_joc="+id_joc,true);
        ajaxRequest.send();
    }


    function changeValue(str,id_user,id_joc){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu"+id_joc).value=response;
                getLikes(id_joc);
                
            }
        }
        ajaxRequest.open("GET","change.php?id_user="+id_user+"&id_joc="+id_joc+"&tip="+str,true);
        ajaxRequest.send();
    }

    function getLikes(id_joc){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("likeNR"+id_joc).innerHTML=response;     
            }
        }
        ajaxRequest.open("GET","likes.php?id_joc="+id_joc,true);
        ajaxRequest.send();

    }
    </script>

<div class="logout-box">  
      <input type="submit" name="submit" value="Logout">
      <a href = "logout.inc.php"></a>
    </div>



    <?php
    include 'menu.php';
    ?>
      <?php
      echo
      '<div class="container">
      <img class="topImage" src="../images/blueEye.jpg">
      <div class="middleContainer">
        <div class="textMiddle">'.$_GET["c"].'</div>    
      </div> 
      </div>
      ';
      ?>

<div class="dropdown">
  <button class="dropbtn">Select category</button>
  <div class="dropdown-content">
     <?php
      $db=deschideConexiunea();
      $sql1="SELECT distinct category from games where type='".$_GET["c"]."'";
      $result1=$db->query($sql1);
      $row1=$result1->fetch_assoc();
      $sql = "SELECT DISTINCT type FROM games WHERE category='".$row1['category']."'";
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

<?php
  $db=deschideConexiunea();
  //verific daca utilizatorul este logat pe cont, in caz afirmativ preiau id ul
  if(isset($_SESSION['id']))$id_user=$_SESSION['id'];
  $sql = "SELECT id,minidescriere FROM games where type='".$_GET["c"]."'";
  $result = $db->query($sql);
  $rowno='0';
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $sql2 = "SELECT img1 FROM images WHERE id_game ='".$row['id']."'";
      $sth = $db->query($sql2);
      $result2=mysqli_fetch_array($sth);
      $rowno+=1;
      $id_joc=$row["id"];
    if($rowno%3==1){
        echo
        '<div class="row">
        <div class="column">
        <a href="pagina-joc.php?id='.$row["id"] .'">
        <img src="../images/'.$result2['img1'].'.jpg"/>
        </a>
        <div class="desc">'.$row['minidescriere'].' 
        <br>
  
        <script> getValue('.$id_user.','.$id_joc.');</script>
        <script>getLikes('.$id_joc.');</script>
          <input id="butonulMeu'.$id_joc.'" type="button" class="button" onclick="changeValue(this.value,'.$id_user.','.$id_joc.')">
          <p style="display:inline; color:black;">LIKES( <span id="likeNR'.$id_joc.'"></span> )</p>
          </div>
        </div>';
      }
      else
      if($rowno%3==2)
      {
        echo'
        <div class="column">
        <a href="pagina-joc.php?id='.$row["id"] .'">
        <img src="../images/'.$result2['img1'].'.jpg"/>
        </a>
        <div class="desc">'.$row['minidescriere'].'
        <br>
  
        <script> getValue('.$id_user.','.$id_joc.');</script>
        <script>getLikes('.$id_joc.');</script>
          <input id="butonulMeu'.$id_joc.'" type="button" class="button" onclick="changeValue(this.value,'.$id_user.','.$id_joc.')">
          <p style="display:inline; color:black;">LIKES( <span id="likeNR'.$id_joc.'"></span> )</p>
          </div>
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
      <div class="desc">'.$row['minidescriere'].' 
      <br>

      <script> getValue('.$id_user.','.$id_joc.');</script>
        <script>getLikes('.$id_joc.');</script>
          <input id="butonulMeu'.$id_joc.'" type="button" class="button" onclick="changeValue(this.value,'.$id_user.','.$id_joc.')">
          <p style="display:inline; color:black;">LIKES( <span id="likeNR'.$id_joc.'"></span> )</p>
          </div>
          </div>
        </div>';
      }
    }
  }
?>
</body>
</html>