<?php
session_start();
include '../php/conectare.php';
include '../php/view.php';


//verific daca utilizatorul este logat pe cont, in caz afirmativ preiau id ul
if(isset($_SESSION['id']))$id_user=$_SESSION['id'];

//preiau id ul jocului
$id_game=$_GET['id'];

//maresc numarul de vizualizari pentru joc
addViews($id_game);
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
    <title> Game Manager </title>
    
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <!--<div class="contentJoc">-->
    <?php
    //iau titlul jocului
    $conectare=deschideConexiunea();
    $sql="SELECT UPPER(name) as name FROM games WHERE id='$id_game'";
    $result=$conectare->query($sql);
    $row = $result->fetch_assoc();
    echo'
    <p class="titleGame">' .$row['name'] .' </p>
    ';

    //iau pozele din baza de date
    $sql="SELECT img1,img2,img3 FROM images WHERE id_game='$id_game'";
    $result=$conectare->query($sql);
    if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '
              <div class="row">
                <div class="column">
                  <img src="../images/'.$row['img1'].'.jpg" >
              </div>
         
                <div class="column" >
                <img src="../images/'.$row['img2'].'.jpg" >
              </div>
           
              <div class="column">
              <img src="../images/'.$row['img3'].'.jpg" >
              </div>
            </div>
              ';
             
            }
          } 
        
        //iau informatiile despre joc din baza de date
        $sql="SELECT nr_jucatori,dificultate,varsta,timp_de_joc,descriere FROM infogames WHERE id_joc='$id_game'";
        $result=$conectare->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo'
                <p class ="descriere"  > <b style="font-family: Family-Guy; color:#ff3333">NUMBER OF PLAYERS:</b>'.$row['nr_jucatori'].'</p>
                <p class ="descriere" > <b style="font-family: Family-Guy; color:#ff3333">DIFFICULTY:</b>'. $row['dificultate'].'</p>
                <p class ="descriere" > <b style="font-family: Family-Guy; color:#ff3333">AGE:</b> '. $row['varsta'].'</p>
                <p class ="descriere" > <b style="font-family: Family-Guy; color:#ff3333">TIME TO PLAY:</b>'. $row['timp_de_joc'].' </p>
                
                <p class="subTitleGame" style="color: green">DESCRIPTION:</p>
                <div class="descriereContainer">
                <p class="descriere">'.$row['descriere'].'
                </p>
                </div>
                ';
            }

        }

        //iau regulile din baza de date
        $sql="SELECT * FROM regulijoc WHERE id_joc='$id_game'";
        $result=$conectare->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row['regula1']!=NULL && $row['regula2']!=NULL && $row['regula3']!=NULL &&$row['regula4']!=NULL)
                echo'
                <p class="subTitleGame" style="color: #ffcc00">RULES:</p>
                ';
                if($row['regula1']!=NULL)
                {
                    echo' 
                    <div class="descriereContainer">
                      <p class="descriere"><b style=" color:#ff3333">R1: </b> '.$row['regula1'].'</p>
                    </div>
                    ';
                }
                if($row['regula2']!=NULL)
                {
                    echo' 
                    <div class="descriereContainer">
                      <p class="descriere"><b style=" color:#ff3333">R2: </b>'.$row['regula2'].'</p>
                    </div>
                    ';
                }
                if($row['regula3']!=NULL)
                {
                    echo' 
                    <div class="descriereContainer">
                      <p class="descriere"><b style=" color:#ff3333">R3: </b>'.$row['regula3'].'</p>
                    </div>
                    ';
                }
                if($row['regula4']!=NULL)
                {
                    echo' 
                    <div class="descriereContainer">
                      <p class="descriere"><b style=" color:#ff3333">R4: </b>'.$row['regula4'].'</p>
                    </div>
                    ';
                }
            }

        }


    ?>
<!--</div>-->

    </body>
    </html>