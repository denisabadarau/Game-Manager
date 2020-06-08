function changegamecategoryx(id_game)
{
    var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("demo").innerHTML=response;
                //alert(response);
            }
        }
    
        ajaxRequest.open("GET","changegamecategoryx.php?id_game="+id_game,true);
        ajaxRequest.send();

}