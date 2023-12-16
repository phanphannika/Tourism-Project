<?php
  // $dbCon = mysqli_connect('localhost', 'root', '', 'cambodia') or die ('Not Connected');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename="visit_cambodia";
  $dbCon = mysqli_connect($servername, $username, $password, $databasename);
  if(!$dbCon){
    echo "it error";
  }

?>
