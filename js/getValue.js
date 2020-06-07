function getValueButton(id_user,id_turneu,data_turneu,nr_jucatori){
   // alert("m am apelat1");
        var ajaxRequest= new XMLHttpRequest();

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
    
        ajaxRequest.open("GET","../html/getturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&data_turneu="+data_turneu+"&nr_jucatori="+nr_jucatori,true);
        ajaxRequest.send();
    }