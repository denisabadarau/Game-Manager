<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","caruselBoardGames.html"+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Joseph Swanson</option>
<option value="4">Glenn Quagmire</option>
</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
<body>
<script type="text/template" id="myHTML">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 &amp;&amp; this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;form&gt;
&lt;select name="users" onchange="showUser(this.value)"&gt;
&lt;option value=""&gt;Select a person:&lt;/option&gt;
&lt;option value="1"&gt;Peter Griffin&lt;/option&gt;
&lt;option value="2"&gt;Lois Griffin&lt;/option&gt;
&lt;option value="3"&gt;Joseph Swanson&lt;/option&gt;
&lt;option value="4"&gt;Glenn Quagmire&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;
&lt;br&gt;
&lt;div id="txtHint"&gt;&lt;b&gt;Person info will be listed here.&lt;/b&gt;&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</script>
</body>
</html>