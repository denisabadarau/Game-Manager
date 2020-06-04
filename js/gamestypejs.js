function showType(category){
     //alert("m am apelat");
    var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
               document.getElementById("newSelect").innerHTML=response;
               //alert(response);
            }
        }
    
        ajaxRequest.open("GET","../html/gamestype.php?category="+category,true);
        ajaxRequest.send();

   }