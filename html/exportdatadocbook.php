<?php
include '../php/conectare.php';

//asa imi fac tagurile xml
$conectare = deschideConexiunea();
$sql = "SELECT * FROM games";
$xml = new SimpleXMLElement('<gamemanager/>');
$xml->addAttribute('xml:id', 'gamemanager');
$xml->addAttribute('xmlns', 'http://docbook.org/ns/docbook');
$xml->addAttribute('version', '5.0');

if($result = $conectare->query($sql)) {
    while($row = $result->fetch_assoc()) {
        $game = $xml->addChild('game');
        $game->addAttribute('xml:id', $row['id']);
        $game->addChild('name', $row['name']);
       // $game->addChild('description',$row['minidescriere']);
        $game->addChild('type', $row['type']);
        $game->addChild('category', $row['category']);
        $game->addChild('likes', $row['likes']);
        $game->addChild('tournaments', $row['tournaments']);
        $game->addChild('viwes', $row['views']);
    }  
}

Header('Content-type: application/docbook+xml');
header('Content-Disposition: attachment; filename=file.dbk');
print($xml->asXML());
?>