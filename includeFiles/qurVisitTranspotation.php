<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Place To Visit</title>
  <style>
    .transportation-grid{
      display: grid;
      grid-template-columns: 1fr ;
      row-gap: 30px;
      column-gap: 20px;
     
      
      
      
    }
    .transportation {
      display:grid;
      grid-template-columns:40% 40%;
      border-bottom:1px solid gray;
      padding:10px;
      
    }
    .transportation a {
      text-decoration:none;
    }
    .transportation img{
      width:300px; 
      height:250px; 
      border-radius:5px; 
      margin-left:200px;

    }
    .transportation img:hover{
      opacity: 0.9;
    }
    .transportation h3{
      color:#6C3483 ; 
      font-size:16px;
      margin-top:10px; 
      margin-bottom:10px;
    }
    .transportation p{
      color:gray; 
      font-size:14px; 
      line-height:1.5rem; 
      text-align:justify;

    }
  </style>
</head>

<body>
  <?php
  include('dbCon.php');
  $qw = 'SELECT * FROM tbldata where CateID=3 Order By DateIn DESC';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0) {
    echo '<div class="transportation-grid">';
    while ($row = $rw->fetch_assoc()) {
      echo '<div class="transportation">';
      echo '<a href="' . $row["DesURL"] . '" >';
      echo '<img src="' . $row["ImageUrl"] . '" " />';
      echo '<div>';
      echo '<h3 >' . $row["ProName"] . '</h3>';
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