<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
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

    <?php
    include 'menu.php';
    ?>
      
      <div class="container">
        <img class="topImage" src="../images/blueEye.jpg">
        <div class="middleContainer">
          <div class="textMiddle"> BATTLES</div>    
        </div> 
</div>

        <button  class="button button1" onclick="afisbattle1(1)">Create a Tournament</button>
        <button class="button button2" onclick="afisbattle1(2)">View Tournaments</button>
        <button class="button button3" onclick="afisbattle1(3),initialtabel()">View Comments</button>
        <div id="demo" class="chenar">
        <?php
        include 'comments1.php'
        ?>
        </div>
<script>
function afisbattle1(a){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  if(a==1)
  xhttp.open("GET", "comments2.php", true);
  else
  if(a==2)
  xhttp.open("GET", "comments1.php", true);
  else
  if(a==3)
  xhttp.open("GET", "commentsbattle.php", true);
  xhttp.send();
    }
</script>
</body>
</html>
