<?php
include '../php/conectare.php';
?>
<?php
$db=deschideConexiunea();
$sql="SELECT numeutiz,comentariu,datacomentariu from commentsbattle order by datacomentariu desc";
$result = $db->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo
        '
        <div class="chenarcom" id="chenarcom">
        <div class="chenarcomutiz">'.$row['numeutiz'].'</div>
        <div class="chenarcomdata">'.$row['datacomentariu'].'</div>
        <div class="chenarcomcom">'.$row['comentariu'].'</div>
        </div>
        </div>
        ';
    }
}
?>

