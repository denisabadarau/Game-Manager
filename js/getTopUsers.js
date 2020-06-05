function getTopUsers(){
    var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("top").innerHTML=response;
            }
        }
    
        ajaxRequest.open("GET","../html/topUsers.php?",true);
        ajaxRequest.send();
}