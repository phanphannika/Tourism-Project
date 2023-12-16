<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Place To Visit</title>
  <style>
    .place-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      row-gap: 30px;
      column-gap: 20px;
      
      
    }
    .place{
      width:280px;
      background-color:rgba(128, 128, 128, 0.1);
      border-radius: 5px;
    }
    .place:hover{
      background-color:rgba(128, 128, 128, 0.3);
    }
    .place a{
      text-decoration:none;
    }
    .place img{
      width:280px; 
      height:200px; 
      border-radius:5px;

    }
    /* .place img:hover{
      opacity:0.9;
    } */
    .place h3{
      color:#6C3483 ; 
      font-size:16px; 
      margin-top:10px; 
      /* margin-bottom:5px; */
    }
    .place h3:hover{
      color:orange;
    }
    .place p{
      color:black; 
      font-size:14.5px; 
      line-height:20px; 
      text-align:justify;
    }
  </style>
</head>

<body>
  <?php
  include('dbCon.php');
  $qw = 'SELECT * FROM tbldata where CateID=1  Order By DateIn DESC limit 4';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0) {
    echo '<div class="place-grid">';
    while ($row = $rw->fetch_assoc()) {
      echo '<div class="place">';
      echo '<a href="' . $row["DesURL"] . '" >';
      echo '<img src="' . $row["ImageUrl"] . '"  />';
      echo '<h3 >' . $row["ProName"] . '</h3>';
      echo '<p>' . $row["Description"] . '</p>';
      echo '</a>';
      echo '</div>';
    }
    echo '</div>';
  } else {
    echo '0 results';
  }
  $dbCon->close();
  ?>
</body>

</html>