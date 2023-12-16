
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Place To Visit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    .hotel-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      row-gap: 30px;
      column-gap: 30px;
      
    }
    .hotel {
      width:290px;
      background-color:rgba(128, 128, 128, 0.1);
      /* border:0.5px solid gray; */
      border-radius:5px;
      /* padding: 0 10px; */
      
      
    }
    .hotel:hover{
      background-color:rgba(128, 128, 128, 0.3);
    }
    a{
      text-decoration:none;
    }
    img{
      width:288px; 
      height:200px; 
      border-radius:5px;

    }
    h3{
      padding:10px 10px; 
      color:#6C3483 ; 
      font-size:14px;  
      width:300px;

    }
    p{
      padding:10px 10px; 
      color:gray; 
      font-size:13.5px; 
      text-align:left; 
      line-height:1.5rem;

    }
  </style>
</head>

<body>
  <?php
  include('dbCon.php');
  $qw = 'SELECT * FROM tbldata where CateID=4 Order By DateIn DESC';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0) {
    echo '<div class="hotel-grid">';
    while ($row = $rw->fetch_assoc()) {
      echo '<div class="hotel">';
      echo '<a href="' . $row["DesURL"] . '" target="_blank" >';
      echo '<img src="' . $row["ImageUrl"] . '"  />';
      echo '<h3>' . $row["ProName"] .  '</h3>';
      echo '<p >' . $row["Description"] . '</p>';
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
