<?php
session_start();
include '../php/conectare.php';
$conectare = deschideConexiunea();
?>
<html>
    <head>
      <title>
        Game Manager
    </title>
    <link rel = "stylesheet" type="text/css" href = "../css/MyAccountStyle.css">
    </head>
    
    <body>

    <?php
    
    echo "Bine ai venit  " .$_SESSION['username'];
       
       $sql = "SELECT * FROM user where id = ".$_SESSION['id'];
       $result = $conectare->query($sql);
       //transform ob din msqli intr un obiect user
       //imi transforma linia de query in obiectul user 
       $user = $result->fetch_assoc();
       if($user['profile_img_path'] != '') {
        echo "<p>". $user['username'] ."</p>";
         echo
          " 
            <div class='userPictureContainer'>
            <h5> Profile Picture </h5>
            <img src='".$user['profile_img_path']."'>

            </div>";
           
 
       }
       else {
        echo "<p>". $user['username'] ."</p>";
         echo 
         " <div class='pictureBox'>
         <img src='upload/defaultimage.png'>
         </div>";
       }

    ?>
      <div class="accountBox">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="container_upload">  
          <input type="file" name="file">
        </div>
        <h4> Something about me! </h4>
        <div class="container_bio">
          <textarea type="text" name="bio"><?php echo $user['bio']; ?></textarea>
      </div>
      <table>
  <tr>
    <th>Nume:</th>
    <th>
      <?php
        echo $user['username'];
      ?>
    </th>
  </tr>
  <tr>
    <th>Email:</th>
    <th>
      <?php
        echo $user['email'];
      ?>
    </th>
  </tr>
  <tr>
    <th>Turnamente participate:</th>
    <th>
      <?php
        $sql = "SELECT id_turneu FROM tournament where id_user = '$id' ";
        echo $sql;
      ?>
    </th>
  </tr>
  
</table>
      <div class="container_buton">
          <button type="submit" name="submit">save</button>
      </div>
    </form>
      
      </div>

    </body>
</html>