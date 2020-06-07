<?php
session_start();
//verific daca utilizatorul este logat pe cont, in caz afirmativ preiau id ul
if(isset($_SESSION['id']))$id_user=$_SESSION['id'];
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
    <link href="../css/view-tournament-style.css" rel="stylesheet">
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
<div class="buttoncom">
  <button class="button2"  onclick="displayTab(1)">Create a tournament</button>
  <button class="button2"  onclick="displayTab(2)">View Tournaments</button>
  <button class="button2"  onclick="displayTab(3),LoadCom()">View Comments</button>
</div>
<div class="chenar" id="demo">
  <div class="comment">
  <?php
  echo 'adelina';
  ?>
  </div>
  <div class="comment">
  <?php
  echo 'denisa';
  ?>
  </div>
  <div class="comment" id="com">
  <textarea id="subject" name="subject" placeholder="Add comment.." style="border-style: groove;width:99%;height:50px;background: darkgrey;"></textarea>
  <input   id="buton" class="button" type="submit" name="submit" value="SUBMIT" onclick="afisbattle('<?php echo $id_user; ?>'),viewcomments()" style="font-size:13px;width:100px;color:green;"/>
  <div class="comment2" id="com2"></div>
</div>
</div>

<script>
//https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_dots
function displayTab(slideIndex) {
        var i;
        var content = document.getElementsByClassName("comment");
        var tabs = document.getElementsByClassName("button2");
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "none";
        }
        for (i = 0; i < tabs.length; i++) {
            tabs[i].style.color = "black";
            tabs[i].style.backgroundColor = "white";
            tabs[i].style.opacity = "70%";
            
        }
        content[slideIndex - 1].style.display = "block";
        tabs[slideIndex - 1].style.color = "black";
        tabs[slideIndex - 1].style.backgroundColor = "slategray";
        tabs[slideIndex - 1].style.opacity = "100%";
    }
    function LoadCom() {
        return new Promise(resolve => {
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("com").innerHTML += this.responseText;
                    resolve();
                }
            };
            xhttp.open("GET", "combattleajax2.php", true);
            xhttp.send();
        });
    }



    function afisbattle(id_user){
    var x=document.getElementById("subject").value;
    if(x!=""&&x!=null)
    afisbattle1(x,id_user);
    }
    
    function afisbattle1(x,id_user){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("com2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "comments2.php?com="+x+"&id_user="+id_user, true);
  xhttp.send();
    }

    function viewtournaments(id_user){
      var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("demo").innerHTML=response;
            }
        }
    
        ajaxRequest.open("GET","viewtournaments.php?id_user="+id_user,true);
        ajaxRequest.send();

    }
    function viewcomments(){
      var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("chenarcom").innerHTML=response;
            }
        }
    
        ajaxRequest.open("GET","combattleajax2.php",true);
        ajaxRequest.send();

    }
</script>
</body>
</html>
