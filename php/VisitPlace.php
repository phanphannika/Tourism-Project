<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Place To Visit</title>
  <style>
    .body{
      width:100%;
      height:90vh;
      display:flex;
      justify-content:space-around;
      align-items: center;
      background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('../images/1682510685Pub Street.jpg');
      background-position:center;
      background-size:cover;
      padding-top:10vh;
    }
  </style>
</head>
<body>
  <?php
    include('../includeFiles/header.php');
    
  ?> <br><br><br><br><br><br>
  <div style="width:80%; margin:auto;">
    <?php
      include('../includeFiles/qurVisitPlace.php');
    ?>

  </div><br><br>
  <?php
    include('../includeFiles/footer.php');
  ?> <br>

  
</body>
</html>