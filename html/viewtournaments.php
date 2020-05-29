<?php
require '../php/conectare.php';
$id_user=$_GET['id_user'];
$conectare=deschideConexiunea();
$sql="SELECT * FROM tournament";
$result=$conectare->query($sql);
$today=date("Y-m-d");
if($result->num_rows >0){
    while($row = $result->fetch_assoc()) {
        $id_turneu=$row['id_turneu'];
        $nume_joc=$row['nume_joc'];
        $nume_creator=$row['nume_creator'];
        $data_creare=$row['data_creare'];
        $data_turneu=$row['data_turneu'];
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
        <br><br>
        <p class="infos">Date: '.$data_turneu.'</p>
        <p class="infos">Game: '.$nume_joc.'</p>
        <p class="infos">Location: '.$locatie.'</p>
        <p class="infos">Prize: '.$premiu.'</p>    
        </div>';
    
    }
}
?>
<script>
function getValue(id_user,id_turneu){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu"+id_turneu).value=response;
            }
        }
    
        ajaxRequest.open("GET","getturneu.php?id_user="+id_user+"&id_turneu="+id_turneu,true);
        ajaxRequest.send();
    }


    function changeValue(str,id_user,id_turneu){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu"+id_turneu).value=response;
                
            }
        }
        ajaxRequest.open("GET","changeturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&tip="+str,true);
        ajaxRequest.send();
    }


</script>
