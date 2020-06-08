<?php
session_start();
require_once '../php/conectare.php';
$conectare = deschideConexiunea();
//verific daca utilizatorul este logat pe cont, in caz afirmativ preiau id ul
if(isset($_SESSION['id']))$id_user=$_SESSION['id'];
//verificam daca intr-adevar am apasat butonul inauntrul form-ului
if(isset($_POST['submit'])) {
    $file = $_FILES['file']; //aceasta variabila primeste toate informatiile din fisierele pe care vrem sa le uploadam folosind imputul formului
    //acum urmeaza sa extragem informatii din 'file-ul nostru
    if(isset($file)) {
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];

        //Luam doar ce e de la . incolo
        $fileExtention = explode('.', $fileName);
        //E posibil ca ce incarcam noi sa nu aiba litere mici
        $fileActualExtention = strtolower(end($fileExtention));

        $allowed = array('jpg', 'jpeg', 'png');
        //verific daca fisierul are una din terminatiile aprobate
        if (in_array($fileActualExtention, $allowed)) {
            //verificam daca nu avem erori la upload
            if ($fileError === 0) {
                //verificam lungimea sa nu punem una prea mare
                if($fileSize < 500000) {
                    //acum putem incepe uploadarea
                    //dar inainte de asta trebuie sa ne asiguram ca inainte primeste un nume potrivit
                    //gen sa nu l suprascrie folosim un id unic
                    $fileNameNew = uniqid('', true).".".$fileActualExtention;//creaza un id bazat pe microsec care erau la mmt actual deci nu primesc un numar random ci un timp in microsecunde 
                    $fileDestination = 'upload/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    //pun calea catre poza in baza de date la user
                    $sql = "update user set profile_img_path = '".$fileDestination ."' where id = ".$_SESSION['id'];
                    $result = $conectare -> query($sql); 
                }
                else {
                    echo "Your file is too big!";
                }

            }
            else {
                echo "There was an error uploading your file!";
            }
        }
        else {
            echo "you can not upload files of this type!";
        }
    }
    if(isset($_POST['bio'])) {
        //pun in baza de date ce scriu in bio
        $sql = "update user set bio = '".$_POST['bio']."' where id = ".$_SESSION['id'];
        $result = $conectare -> query($sql); 

    }

    header("location: meniu.php?uploadsucces");
}
?>

