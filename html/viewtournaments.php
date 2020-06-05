<head>
<script type="text/javascript" src="../js/changeValue.js"></script>
    <script type="text/javascript" src="../js/getValue.js"></script>
    <link href="../css/view-tournament-style.css" rel="stylesheet">
    <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">

</head>
<?php
require '../php/conectare.php';
$id_user=$_GET['id_user'];
$conectare=deschideConexiunea();

$sql="SELECT * FROM tournament";
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
        <p class="numeCreator">made by '.$nume_creator.' at '.$data_creare.'</p>
        
        <script> getValueButton('.$id_user.','.$id_turneu.','.$data_turneu_str.','.$nr_jucatori.');</script>
        <input id="butonulMeu'.$id_turneu.'" type="button" class="buttonJOIN" onclick="changeValue(this.value,'.$id_user.','.$id_turneu.')">

        <br><br>
        <p class="infos">Date: '.$data_turneu.'</p>
        <p class="infos">Game: '.$nume_joc.'</p>
        <p class="infos">Location: '.$locatie.'</p>
        <p class="infos">Prize: '.$premiu.'</p>    
        </div>';
       
    
    }
}
?>

