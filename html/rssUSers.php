<?php
header("Content-type: text/xml");
require '../php/conectare.php';

$conectare=deschideConexiunea();


$sql="SELECT * FROM user ORDER BY tournaments DESC LIMIT 5";
$result=$conectare->query($sql);
echo '<?xml version="1.0" encoding="UTF-8" ?>';
              echo' <rss version="2.0">
                 <channel>
                 <title>TOP 5 USERS</title>
                 <description>Top 5 users - RSS format</description>
        ';
if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
        $username=strtoupper($row['username']);
        $tournaments=$row['tournaments'];
        echo '
            <item>
            <title>'.$username.'</title>
            <description>TOURNAMENTS('.$tournaments.')</description>
            </item>
               ';

    }
}

echo'
</channel>
</rss>
';



?>