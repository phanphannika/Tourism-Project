<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Place To Visit</title>
  <style>
    .tour-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      column-gap:1.5rem;
      row-gap:1.5rem;
      
    }
    .tour {
      display:grid;
      grid-template-columns:40% 60%;
      padding:10px;
      border-bottom:1px solid gray;
      
    }
    .tour:hover{
      background-color:rgba(128, 128, 128, 0. 1);
    }
    .tour a{
      text-decoration:none;
    }
    .tour img{
      width:230px; 
      height:170px; 
      border-radius:5px;

    }
    .tour img:hover {
      transform:scale(1.05);
    }
    .tour h3{
      color:#6C3483 ; 
      font-size:16px; 
      margin-top:10px; 
      margin-bottom:5px; 
      line-height:1.2rem; 
      margin-bottom:1.2rem;
    }
    .tour h3:hover{
      color:orange;
    }
    .tour p{
      color:black;
      font-size:13.5px; 
      line-height:15px; 
      text-align:justify; 
      line-height:1.2rem;

    }
  </style>
</head>

<body>
  <?php
  include('dbCon.php');
  $qw = 'SELECT * FROM tbldata where CateID=2 Order By DateIn DESC limit 4';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0) {
    echo '<div class="tour-grid">';
    while ($row = $rw->fetch_assoc()) {
      echo '<div class="tour">';
      echo '<a href="' . $row["DesURL"] . '" >';
      echo '<img src="' . $row["ImageUrl"] . '" />';
      echo '<div>';
      echo '<h3>' . $row["ProName"] . '</h3>';
      echo '<p>' . $row["Description"] . '</p>';
      echo '</a>';
      echo '</div>';
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