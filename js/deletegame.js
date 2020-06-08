function deletegame()
{
  var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("demo").innerHTML=response;
            }
        }
    
        ajaxRequest.open("GET","deletegame.php",true);
        ajaxRequest.send();

}