<html>
<head>
    <link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/boardgames.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/paginacategorie.css" rel="stylesheet">
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <script>
    function getValue(){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu").value=response;
            }
        }
        ajaxRequest.open("GET","valoare.php?id_user=1&&id_joc=1",true);
        ajaxRequest.send();
    }

    function changeValue(str){
        var ajaxRequest= new XMLHttpRequest();
        ajaxRequest.onreadystatechange = function(){
            if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
                var response =ajaxRequest.responseText;
                document.getElementById("butonulMeu").value=response;
                
            }
        }
        ajaxRequest.open("GET","change.php?id_user=1&&id_joc=1&&tip="+str,true);
        ajaxRequest.send();
    }
    </script>
     <script>getValue();</script>
     <input id='butonulMeu' type='button' class='button' onclick="changeValue(this.value)">
     
    

</body>
</html>