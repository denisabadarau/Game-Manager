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
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
    <link href="../css/view-tournament-style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/changeValue.js"></script>
    <script type="text/javascript" src="../js/getValue.js"></script>

    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Game Manager </title>
</head>
<body>
<script>
function getValuePlayers(id_turneu){
    //alert("m am apelat");
    var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
               document.getElementById("gamer"+id_turneu).innerHTML=response;
                
        }
        }
    
        ajaxRequest.open("GET","../html/getplayers.php?id_turneu="+id_turneu,true);
        ajaxRequest.send();


}



function changeValue(str,id_user,id_turneu){
        var ajaxRequest= new XMLHttpRequest();
        //alert("m am apelat2");

        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                if(response=="JOIN")
                  {
                      document.getElementById("butonulMeu"+id_turneu).value=response;
                      document.getElementById("butonulMeu"+id_turneu).style.color="green";

                      }
                else 
                   if(response=="UNJOIN")
                { document.getElementById("butonulMeu"+id_turneu).value=response;
                  document.getElementById("butonulMeu"+id_turneu).style.color="red";
                }

                getValuePlayers(id_turneu);
                
            }
        }
        ajaxRequest.open("GET","../html/changeturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&tip="+str,true);
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
  <div class="comment ">
  <?php
 require '../php/conectare.php';
 $conectare=deschideConexiunea();
 
 $sql="SELECT * FROM tournament ORDER BY data_creare DESC";
 $result=$conectare->query($sql);

 if($result->num_rows >0){
     while($row = $result->fetch_assoc()) {
         $participa=TRUE;
         $id_turneu=$row['id_turneu'];
         $nume_joc=$row['nume_joc'];
         $nume_creator=$row['nume_creator'];
         $data_creare=$row['data_creare'];
         $data_turneu=$row['data_turneu'];
         $data_turneu_str=strtotime($row['data_turneu']);
         $nr_jucatori=$row['nr_jucatori'];
         $premiu=$row['premiu'];
         $categorie=$row['category'];
         $tip=$row['type'];
         $locatie=$row['locatie'];
         $titlu_turneu=$row['titlu_turneu'];
 
          
        echo '
        <div class="chenarTurneu">
         <h1 class="titluTurneu">'.$titlu_turneu.'</h1> 
         <p class="numeCreator">made by <span style="color: #4d4d4d">'.$nume_creator.'</span> at '.$data_creare.'</p>

         <script> getValueButton('.$id_user.','.$id_turneu.','.$data_turneu_str.','.$nr_jucatori.');</script>
         <input id="butonulMeu'.$id_turneu.'" type="button" class="buttonJOIN" onclick="changeValue(this.value,'.$id_user.','.$id_turneu.'),getValuePlayers('.$id_turneu.')">
 
         <br><br>
         <p class="infos"><span style="font-size:23px">Date: </span>'.$data_turneu.'</p>
         <p class="infos"><span style="font-size:23px">Game: </span>'.$nume_joc.'</p>
         <p class="infos"><span style="font-size:23px">Location: </span>'.$locatie.'</p>
         <p class="infos"><span style="font-size:23px">Prize: </span>'.$premiu.'</p>
         <br>
         <script>getValuePlayers('.$id_turneu.');</script>
         <p class="infos" ><span style="font-size:23px">Players: </span> <span id="gamer'.$id_turneu.'"></span> /'. $nr_jucatori.' </p>
         <br>
         ';
         //verific daca turneul nu e finalizat deja
         $today=strtotime(date("Y-m-d"));
         if($today >= $data_turneu_str) {
          echo '<p class="infos"><span style="font-size:23px">Mode: </span><span style="color: #e60000">FINISHED</span></p>';
          }
          else {
          echo '<p class="infos" ><span style="font-size:23px">Mode: </span><span style="color:green">AVAILABLE</span></p>';
           
            }
         
         echo '
         </div>';
        
     
     }
 }
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
