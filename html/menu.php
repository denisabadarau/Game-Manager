<?php
  //session_start();
  require_once '../php/conectare.php';
  $conectare = deschideConexiunea();
?>
<head>
<link href="../css/meniu-style.css" rel="stylesheet">

</head>
<div class="split left">
    </div>
    <div class="split right">
    </div>
    

    
    <!-- The Modal -->
    <div id="myModal" class="modal">
    <?php   
       $id=$_SESSION['id'];
       $sql = "SELECT * FROM user where id ='$id'";
       $result = $conectare->query($sql);
       //transform ob din msqli intr un obiect user
       //imi transforma linia de query in obiectul user

       $user = $result->fetch_assoc();
       //nu-i setata imaginea ii dau path ul de la img default
       $profile_img_path = 'upload/defaultimage.png';
       //daca e setata ii dau path ul de la img userului
       if($user['profile_img_path'] != '') {
         $profile_img_path = $user['profile_img_path'];
       }
       
    ?>
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- inceput profil -->
        <div class="card">
            <img src="<?php echo $profile_img_path?>" style="width:100%">
            <h1>Username: <?php echo $user['username']; ?></h1>
            <h1>Email: <?php echo $user['email'];?></h1>
            <h1> Turnaments: </h1>
            
            
            <table>
                
                <?php 
                $id = $_SESSION['id'];
                $sql1 = "SELECT t.nume_joc,t.data_turneu FROM battles b JOIN tournament t ON (b.id_turneu = t.id_turneu) where b.id_jucator = '$id' ";
                $result1 = $conectare->query($sql1);
                
                while($row = $result1->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>".$row['nume_joc']."</td>
                            <td>".$row['data_turneu']."</td>
                        </tr>";
                }

                 ?>
            </table>
            <h4> Update details </h4>
      
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="container_upload">  
                    <input type="file" name="file">
                </div>
                <h4> Something about me! </h4>
                <div class="container_bio">
                    <textarea type="text" name="bio"><?php echo $user['bio']; ?></textarea>
                </div>
                <button type="submit" name="submit" class="save">Save</button>
            </form>
        </div>
    <!-- sfarsit profil -->
    </div>

    </div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<a href="meniu.php"> <img src="../images/logomainalb.png" class="center"> </a>
<p class="titlelogo">-Game Manager-</p>
        <ul>
          <li><a href="meniu.php">Home</a></li>
          <li><a href="boardgames.php">Board Games</a></li>
          <li><a href="onlinegames.php">Online Games</a></li> 
          <li><a href="statistics.php">Statistics</a></li>
          <li><a href="battles.php">Battles</a></li>
          <li><a href="top.php">Top</a></li>
      </ul>

