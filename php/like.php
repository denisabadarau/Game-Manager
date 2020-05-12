<?php
include 'conectare.php';
$conectare=deschideConexiunea();
$id_user="1";
$id_game=$_POST['id_game'];
$id_pagina=$_POST['id_pagina'];


$sql="INSERT INTO likes(id_user,id_game) VALUES('$id_user','$id_game')";
$result=$conectare->query($sql);

//pt a reveni la pagina initiala
if($id_pagina==1)
{  
   //am asignat paginei de biology id-ul 1
   header("Location: ../html/biology.php");

}
if($id_pagina==2)
{  
   //EDUCATIONAL
   header("Location: ../html/educational.php");

}
if($id_pagina==3)
{  
   //FANTASY
   header("Location: ../html/fantasy.php");

}
if($id_pagina==4)
{  
   //HISTORICAL
   header("Location: ../html/historical.php");

}
if($id_pagina==5)
{  
   //HORROR
   header("Location: ../html/horror.php");

}
if($id_pagina==6)
{  
   //ACTION
   header("Location: ../html/action.php");

}
if($id_pagina==7)
{  
   //ADVENTURE
   header("Location: ../html/adventura.php");

}
if($id_pagina==8)
{  
   //SPORT
   header("Location: ../html/sport.php");

}
if($id_pagina==9)
{  
   //STRATEGY
   header("Location: ../html/strategy.php");

}
if($id_pagina==10)
{  
   //VEHICLES
   header("Location: ../html/vehicles.php");

}

?>