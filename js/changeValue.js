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
                
            }
        }
        ajaxRequest.open("GET","../html/changeturneu.php?id_user="+id_user+"&id_turneu="+id_turneu+"&tip="+str,true);
        ajaxRequest.send();
    }