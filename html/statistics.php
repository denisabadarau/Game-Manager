<?php
include '../php/conectare.php';
include '../php/view.php';
include '../php/likefunctions.php';
?>
<!DOCTYPE html>
    <html lang="en">
  <head>
    <link href="../css/meniuStyle.css" rel="stylesheet">
    <link href="../css/boardGamesStyle.css" rel="stylesheet">
    <link href="../css/paginaJocuriStyle.css" rel="stylesheet">
    <link href="../css/modalStyle.css" rel="stylesheet">
    <link href="../css/statisticsStyle.css" rel="stylesheet">
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> My page </title>
</head>
<body>
    <div class="split left">
    </div>
    <div class="split right">
    </div>
    <?php
    include 'menu.php';
    ?>

        <div class="container">
            <img class="topImage" src="../images/blueEye.jpg">
            <div class="middleContainer">
              <div class="textMiddle"> STATISTICS</div>    
            </div> 
        </div>
        <br>
        <br>
       
<div class="containerSelect">
<form action="#" method="post">
<label>Chart:</label>
<select name="charts">
    <option value="">--Please choose a chart--</option>
    <option value="line">Line Chart</option>
    <option value="pie">Pie Chart</option>
    <option value="bar">Bar Chart</option>
    <option value="horizontalBar">Horizontal Bar Chart</option>


</select>

<label>Game:</label>
<select name="game" >
    <option value="">--Please choose a game type--</option>
    <option value="board">Board Games</option>
    <option value="online">Online Games</option>

</select>

<label>Type:</label>
<select name="type" >
    <option value="">--Please choose a type--</option>
    <option value="likes">After likes</option>
    <option value="views">After views</option>
</select>
<input class="button" type="submit" name="submit" value="SUBMIT" style="font-size:13px"/>
</form>
</div>

<?php
       if(isset($_POST['submit'])){
       $selected_val1 = $_POST['charts'];  // Storing Selected Value In Variable
       $selected_val2 = $_POST['game'];  // Storing Selected Value In Variable
       $selected_val3 = $_POST['type'];  // Storing Selected Value In Variable
       if($selected_val3=='views')
       {
       ?>
       <canvas id="chartAfterViews"></canvas>
       <?php
       }
       else
        if($selected_val3=='likes')
        {
            ?>
            <canvas id="chartAfterLikes"></canvas>
            <?php
        }
    }
?>

<!--https://www.chartjs.org/docs/latest/getting-started/ -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('chartAfterViews').getContext('2d');

var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: '<?php echo $selected_val1?>',

    // The data for our dataset
    data: {
        labels: <?php echo gamesTypeAfterViews($selected_val2)?>,
        datasets: [{
            label: 'Statistics for games',
            data: <?php echo gamesViewsNoAfterViews($selected_val2)?>
        }]
    },

    // Configuration options go here
    options: {}
});
</script>

<script>
var ctx2= document.getElementById('chartAfterLikes').getContext('2d');
var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
    type: '<?php echo $selected_val1?>',

    // The data for our dataset
    data: {
        labels: <?php echo gamesTypeAfterLikes($selected_val2)?>,
        datasets: [{
            label: 'Statistics for games',
            data: <?php echo gamesLikesNoAfterLikes($selected_val2)?>
        }]
    },

    // Configuration options go here
    options: {}
});
</script>         
      
</body>

    </html>