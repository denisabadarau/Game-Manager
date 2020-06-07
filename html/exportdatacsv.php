
<?php
 include '../php/conectare.php';
 //https://phppot.com/php/php-csv-file-export-using-fputcsv/
 //https://www.webslesson.info/2016/10/export-mysql-table-data-to-csv-file-in-php.html
 //Sursele folosite pentru acest export ca si csv
 if(isset($_POST["export"]))
 {
header('Content-Type: text/csv; charset=utf-8');  
 header('Content-Disposition: attachment; filename=data.csv');
 $output = fopen("php://output", "w");  
 fputcsv($output, array('GameID', 'Name', 'Category', 'Type', 'Likes', 'Views','Tournaments'));
 $db=deschideConexiunea();
 $sql="SELECT id,name,category,type,views,likes,tournaments from games";
 $result=$db->query($sql);
 while($row = mysqli_fetch_assoc($result)) 
 {  
    fputcsv($output, $row);  
}  
fclose($output);
 }
 ?>