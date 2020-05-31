<html>
<head>
<link href="../css/meniu-style.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
    <link href="../css/battles.css" rel="stylesheet">
<body>  
        <button  class="button button1" onclick="afisbattle1(1)">Create a Tournament</button>
        <button class="button button2" onclick="afisbattle1(2)">View Tournaments</button>
        <button class="button button3" onclick="afisbattle1(3)">View Comments</button>
        <div id="demo" class="chenar"></div>
<script>
function afisbattle1(a){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  if(a==1)
  xhttp.open("GET", "comments.php", true);
  else
  if(a==2)
  xhttp.open("GET", "comments1.php", true);
  xhttp.send();
    }

    
</script>