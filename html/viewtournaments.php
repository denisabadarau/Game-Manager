<script>
function getValue(id_user,id_turneu,data_turneu,nr_jucatori){
        var ajaxRequest= new XMLHttpRequest();
        alert("m am apelat1");

        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                
            //alert(response);
                if(response=="JOIN")
                  {
                      document.getElementById("butonulMeu"+id_turneu).value=response;
                      document.getElementById("butonulMeu"+id_turneu).style.color="green";

                      }
                else 
                    if(response=="CAN'T JOIN")
                    {
                        document.getElementById("butonulMeu"+id_turneu).style.display="none";
                        
                        }
                else 
                   if(response=="UNJOIN")
                { document.getElementById("butonulMeu"+id_turneu).value=response;
                  document.getElementById("butonulMeu"+id_turneu).style.color="red";
                }
                
            }
        }
    
        ajaxRequest.open("GET","getturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&data_turneu="+data_turneu+"&nr_jucatori="+nr_jucatori,true);
        ajaxRequest.send();
    }


    function changeValue(str,id_user,id_turneu){
        var ajaxRequest= new XMLHttpRequest();
        alert("m am apelat2");

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
                
            }
        }
        ajaxRequest.open("GET","changeturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&tip="+str,true);
        ajaxRequest.send();
    }


</script>


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
        echo $id_user;

       echo '
       <div class="chenarTurneu">
        <h1 class="titluTurneu">'.$titlu_turneu.'</h1> 
        <p class="numeCreator">made by '.$nume_creator.' at '.$data_creare.'</p>

        <script> getValue('.$id_user.','.$id_turneu.','.$data_turneu_str.','.$nr_jucatori.');</script>
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

