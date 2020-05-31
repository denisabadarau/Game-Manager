<?php
include '../php/conectare.php';
?>
<?php
$db=deschideConexiunea();
$sql="SELECT numeutiz,comentariu,datacomentariu from commentsbattle";
$result = $db->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo
        '
        <div class="chenarcom">
        <div class="chenarcomutiz">Utiz:'.$row['numeutiz'].'</div>
        <div class="chenarcomcom">Com:'.$row['comentariu'].'</div>
        <div class="chenarcomdata">Data:'.$row['datacomentariu'].'</div>
        </div>
        ';
    }
}
?>
