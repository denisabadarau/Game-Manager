 function showTop(typeGame){
var typeTop=document.getElementById('type').value;
  //alert(typeGame+" "+typeTop);
 var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("top").innerHTML=response;
            }
        }
    
        ajaxRequest.open("GET","../html/gettop.php?typeGame="+typeGame+"&typeTop="+typeTop,true);
        ajaxRequest.send();
        
   }
   